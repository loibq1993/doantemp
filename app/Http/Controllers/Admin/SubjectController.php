<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
namespace App\Http\Controllers\Admin;
use mysqli;
use App\AdminUser;
use App\Student;
use App\User;
use App\Subject;
use App\Teacher;
use App\Specialize;
use App\Certificate;
use App\Course;
use App\Classes;
use App\Point;
use App\Bonus;
use App\Folk;

use App\Studentclass;
use App\Subjectclass;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FrontEnd\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Middleware\CommonFunctions;
use App\Repositories\CourseMemberRepository;
use App\Repositories\UserRepository;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;
use Excel;
use Exception;



// Phân môn học
if(isset($_GET['arrsub'])&& isset($_GET['vlslsub']))
{ 

    $str= $_GET['arrsub'];
    $arrsub=explode(",",$str);
    $vl=$_GET['vlslsub'];
   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doantotnghiep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM classes where name_class='$vl'";
$result = $conn->query($sql);
$id;
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $id=$row['id'];
   break;
  }
} else {
  echo "0 results";
}
if(isset($_GET['addsubject']))
{
    for($i=0;$i<count($arrsub);$i++)
    {
    $sql = "select count(*) as sum from subject_class where subject_id='$arrsub[$i]' and class_id='$id' ";
    $result= $conn->query($sql);
    $r=$result->fetch_assoc();
    if(intval($r['sum'])>0)
    {
        ?>
        <script type="text/javascript"> alert("Môn học đã tồn tại");</script>
        <?php
        break;
    }
    else
    $sql = "INSERT INTO subject_class (subject_id,class_id)
    VALUES ($arrsub[$i],$id)";

    if($conn->query($sql))
        {
            if($i==count($arrsub)-2){
            ?>
        <script type="text/javascript">alert("Thêm thành công");</script>
        <?php 
        break;
    }
        }
        else
        {
            ?>
 <script type="text/javascript">alert("Thêm không thành công");</script>
 <?php
        break;
        }       
    }
}
$conn->close(); 
}

class SubjectController extends Controller
{
    public function createSubject(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            $specialize_id = Specialize::select('id','name')->get();
            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'specialize_id'=>'required',
                    'name_subject' => 'required',
                    'sotiet' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $subject = new Subject();
                    $subject->specialize_id = $request->post("specialize_id");
                    $subject->name_subject = ucwords($request->post("name_subject"));
                    $subject->sotiet = $request->post("sotiet");

                   
                    $message = Config::get('constant.create_fail_mesg');
                    if ($subject->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }
            } 
            else 
            {
                return view('admindetail.subject.admin_create_subject',['specialize_id'=>$specialize_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    // Sửa môn học
    public function editSubject(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_subject' => 'required',
                    'sotiet' => 'required',
                    'specialize_id'=>'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $subjectId = $request->post("subject_id");                            
                    $subject = Subject::where('id', "=", $subjectId)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($subject != null)
                    {
                        $subject->name_subject = ucwords($request->post("name_subject")); 
                        $subject->sotiet = $request->post("sotiet");
                        $subject->specialize_id = $request->post("specialize_id");  
                        $subject->save();
                        $subject->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $subjectId = $request->get('id');                        
                $subject = Subject::select('id', 'name_subject', 'sotiet','specialize_id')
                        ->where('id','=',$subjectId)->first();
                $specialize_id = Specialize::all();
                return view('admindetail.subject.admin_edit_subject', ['subject' => $subject,'specialize_id'=>$specialize_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    public function listSubject(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            
            $subjects = Subject::select(['id', 'name_subject','sotiet','specialize_id'])->paginate(Config::get('constant.rows_per_page'));
            return view('admindetail.subject.admin_list_subject', ['subjects' => $subjects]);
        } else {
            return Redirect::to("/admin/login");
        }
    }
    
    public function getsubclass(Request $request)
    {
        if (Auth::guard("admins")->check()) { 
            $cid = $request->get("cid");
            $subjects = DB::table('subjects as sj')
                    ->join('specialize as sp','sj.specialize_id','sp.id')
                    ->join('subject_class as sc', 'sj.id', '=', 'sc.subject_id')
                    ->select('sj.id', 'sj.name_subject','sp.name')
                    ->where('class_id', $cid)->orderBy('sc.subject_id')->get();
            $classes = Classes::select('id','name_class')->where('id',$cid)->first();
            return view('admindetail.classes.listsubjectclass', ['subjects' => $subjects,'classes'=>$classes]);
        } else {
            return Redirect::to("/admin/login");
        }
    }

    public function Addsubjectclass(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("teachers")->check())){
            
            $subjects = DB::table('subjects')->select('*')->paginate(Config::get('constant.rows_per_page'));
            $classes = Classes::select('id','name_class')->where('status_id','=','1')->get(); 
            $page = $request->get("page");
            if ($request->isMethod('post')){
                $id = $request->post('id_search');
                $name = $request->post('name_search');
                if (($id == null) && ($name == null))
                {
                    return view('admindetail.subject.add_subject_into_class', ['subjects' => $subjects],['list_classes'=>$classes]);
                }
                $codition = [];
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }
                if ($name){
                    $codition_name = ['name_subject', 'like', '%' . $name . '%'];
                    array_push($codition, $codition_name);
                }
                $subjects = Subject::select('id','name_subject')->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));
                
                //$classes = Classes::select('id','name_class')->get(); 
                return view('admindetail.subject.add_subject_into_class', ['subjects' => $subjects, 'list_classes' => $classes, 'id_search' => $id, 'name_search' => $name]);
                             
            }
            else { 
                                       
                return view('admindetail.subject.add_subject_into_class', ['subjects' => $subjects,'list_classes' => $classes]);
            }
        }else{
            return Redirect::to("/admin/login");
        }
    }

}
