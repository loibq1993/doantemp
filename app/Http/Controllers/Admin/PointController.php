<?php

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
use App\Conduct;
use App\Rank;
use App\Studentclass;
use App\Subjectclass;
use App\Yearpoint;
use App\Term;
use App\Imports\PointImport;
use App\Exports\PointExport;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FrontEnd\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Pagination\LengthAwarePaginator;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;
use Excel;
use Exception;


// Phân quyền môn học-giáo viên
if(isset($_GET['arrtc'])&& isset($_GET['vlsltc']))
{ 

    $str= $_GET['arrtc'];
    $arrtc=explode(",",$str);
    $vl=$_GET['vlsltc'];
   

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
$sql = "SELECT * FROM subjects where name_subject ='$vl'";
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
if(isset($_GET['addteacher']))
{
    for($i=0;$i<count($arrtc);$i++)
    {
    $sql = "select count(*) as sum from subject_teacher where teacher_id='$arrtc[$i]' and subject_id='$id' ";
    $result= $conn->query($sql);
    $r=$result->fetch_assoc();
    if(intval($r['sum'])>0)
    {
        ?>
        <script type="text/javascript"> alert("Giáo viên này đã được phân công!");</script>
        <?php
        break;
    }
    else
    $sql = "INSERT INTO subject_teacher (teacher_id,subject_id)
    VALUES ($arrtc[$i],$id)";

    if($conn->query($sql))
        {
            if($i==count($arrtc)-2){
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

/// Lưu điểm
if(isset($_GET["str"]))
{
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
 
    $str= $_GET["str"];
    $arr= explode("-",$str);
   
    $str_data=" ";
    $array_data=array();
    $s=" ";
    
    for($i=0;$i<count($arr)-1;$i++)
    {
      
        $arr_tmp=explode(",",trim($arr[$i]));

    
      if($arr_tmp!=null)
      {
         
            $array_data[]=array(
                "id"    =>$arr_tmp[0],
                "mhs"   =>$arr_tmp[1],
                "ths"   =>$arr_tmp[2],
                "lop"   =>$arr_tmp[3],
                "mh"    =>$arr_tmp[4],
                "hk"    =>$arr_tmp[5],
                "dm"    =>$arr_tmp[6], 
                "d15"   =>$arr_tmp[7], 
                "d45"   =>$arr_tmp[8], 
                "dhk"   =>$arr_tmp[9], 
                "dtbhk" =>$arr_tmp[10], 
                );
      }
       
         
    }

    foreach($array_data as $data)
    {

        $dm  =  $data["dm"];
        $d15 =  $data["d15"];
        $d45 =  $data["d45"];
        $dhk =  $data["dhk"];
        $mhs =  $data["mhs"];
        $dtbhk = $data["dtbhk"];
        //$mhk =  $data["hk"];
        $id  =  $data["id"];
    
        $sql = "UPDATE point set dm='$dm',d15='$d15',d45='$d45',dhk='$dhk',dtbhk=($dm+$d15+(2*$d45)+(3*$dhk))/7 WHERE user_id='$mhs' and id='$id'";
            
        if($conn->query($sql)==true)
        {
                
                 
        }
        else
        {
                echo "Lưu không thành công: " . $conn->error;
        }
   }
     
        ?>
        <script>
            alert("Lưu thành công!");
        </script>
        <?php      
}
class PointController extends Controller
{
       //====== Point=====
       public function LockPoint(Request $request)
       {
          if (Auth::guard("admins")->check()){
               
               $teacher = DB::table('teacher')->select('*')->paginate(Config::get('constant.rows_per_page'));
               $subjects = Subject::select('id','name_subject')->get();
               if ($request->isMethod('post')){
                   $id = $request->post('id_search');
                   $name = $request->post('name_search');
                   if (($id == null) && ($name == null))
                   {
                       return view('admindetail.point.lockpoint', ['teacher' => $teacher,'subjects' => $subjects]);
                   }
                   $codition = [];
                   if ($id){
                       $codition_id = ['id', '=', $id];
                       array_push($codition, $codition_id);
                   }
                   if ($name){
                       $codition_name = ['name_teacher', 'like', '%' . $name . '%'];
                       array_push($codition, $codition_name);
                   }
                   $teacher = Teacher::select('id','name_teacher')->where($codition)->orderBy('id', 'asc')
                           ->paginate(Config::get('constant.rows_per_page'));

                   
                   return view('admindetail.point.lockPoint', ['teacher' => $teacher,'subjects' => $subjects,'id_search' => $id, 'name_search' => $name]);
                                
               }
               else { 
                                          
                   return view('admindetail.point.lockPoint', ['teacher' => $teacher,'subjects' => $subjects]);
               }
           }else{
               return Redirect::to("/admin/login");
           }
       }
    //    public function getData()
    // {
    //     $point = Point::join('users as u','u.id','=','point.user_id')
    //         ->join('classes as c','point.class_id', 'c.id')
    //         ->join('subjects as s','point.subject_id','s.id')
    //         ->join('terms as t','point.term_id','t.id')
    //         ->select('point.user_id','point.class_id','point.subject_id','point.term_id','u.name','c.name_class','s.name_subject','t.name_term',
    //         'point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
    //         ->orderBy('point.user_id','asc')->get();
    //     return Datatables::of($point)->make(true);
    // }
       public function TypingPoint(Request $request)
       {
           if (Auth::guard("admins")->check()) {
   
            $point = Point::join('users as u','u.id','=','point.user_id')
            ->join('student_class as sc', 'u.id', '=', 'sc.user_id')
            ->join('classes as c','point.class_id', 'c.id')
            ->join('subjects as s','point.subject_id','s.id')
            ->join('terms as t','point.term_id','t.id')
            ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
            'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
            ->where([['t.status','=',0],['u.status','=',0],['is_enable','=',1]])
            ->orderBy('point.user_id','asc')
            ->get();
            if ($request->isMethod('post')){
                $grade = $request->post('grade');
                $class = $request->post('class');
                $subject = $request->post('subject');
                $term = $request->post('term');
                if (($grade == null) && ($class == null)  && ($subject == null) && ($term == null))
                {
                    return view('admindetail.point.list_point_input');
                }
                $codition = [];
                if ($class){
                    $codition_class = ['c.id',$class];
                    array_push($codition, $codition_class);
                   
                } 
                if($subject){
                    $codition_subject = ['s.id',$subject];
                    array_push($codition, $codition_subject);
                }
                if($term){
                    $codition_term = ['t.name_term',$term];
                    array_push($codition, $codition_term);
                }
                
                $point = Point::join('users as u','u.id','=','point.user_id')
                    ->join('student_class as sc', 'u.id', '=', 'sc.user_id')
                    ->join('classes as c','point.class_id', 'c.id')
                    ->join('subjects as s','point.subject_id','s.id')
                    ->join('terms as t','point.term_id','t.id')
                    ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
                    'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
                    ->where($codition)->get();

                
                    return view('admindetail.point.list_point_input', ['point'=>$point,'class'=>$class,'subject'=>$subject,'term'=>$term]);                 
                }
                else {
                    return view('admindetail.point.list_point_input');
                }
           } 
           else 
           {
                return Redirect::to("/admin/login");
           }
   
       }
       public function yearPoint(Request $request)
       {
        if (Auth::guard("admins")->check()) {
   
            $point1 = Point::join('users as u','u.id','=','point.user_id')
                    ->join('student_class as sc', 'u.id', '=', 'sc.user_id')
                    ->join('classes as c','point.class_id', 'c.id')
                    ->join('subjects as s','point.subject_id','s.id')
                    ->join('terms as t','point.term_id','t.id')
                    ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
                    'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
                    ->where('t.status','0')->where('t.name_term','like','%Học kỳ 1%')->get();

            $point2 = Point::join('users as u','u.id','=','point.user_id')
            ->join('student_class as sc', 'u.id', '=', 'sc.user_id')
            ->join('classes as c','point.class_id', 'c.id')
            ->join('subjects as s','point.subject_id','s.id')
            ->join('terms as t','point.term_id','t.id')
            ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
            'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
            ->where('t.status','0')->where('t.name_term','like','%Học kỳ 2%')->get();
            

            // $term1 = Term::select('*')->where('status','0')->where('name_term','like','%Học kỳ 1%')->get();
            // $term2 = Term::select('*')->where('status','0')->where('name_term','like','%Học kỳ 2%')->get();

            if ($request->isMethod('post')){
                $grade = $request->post('grade');
                $class = $request->post('class');
                $subject = $request->post('subject');
                
                if (($grade == null) && ($class == null)  && ($subject == null))
                {
                    return view('admindetail.point.point_year');
                }
                $codition = [];
                if ($class){
                    $codition_class = ['c.id',$class];
                    array_push($codition, $codition_class);
                   
                } 
                if($subject){
                    $codition_subject = ['s.id',$subject];
                    array_push($codition, $codition_subject);
                }

                $point1 = Point::join('users as u','u.id','=','point.user_id')
                    ->join('student_class as sc', 'u.id', '=', 'sc.user_id')
                    ->join('classes as c','point.class_id', 'c.id')
                    ->join('subjects as s','point.subject_id','s.id')
                    ->join('terms as t','point.term_id','t.id')
                    ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
                    'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
                    ->where($codition)->get();

                $point2 = Point::join('users as u','u.id','=','point.user_id')
                ->join('student_class as sc', 'u.id', '=', 'sc.user_id')
                ->join('classes as c','point.class_id', 'c.id')
                ->join('subjects as s','point.subject_id','s.id')
                ->join('terms as t','point.term_id','t.id')
                ->select('point.id','u.name','u.status','point.user_id','point.class_id','point.term_id','c.name_class','s.name_subject','t.name_term','t.status',
                'point.subject_id','point.dm','point.d15','point.d45','point.dhk','point.dtbhk')
                ->where($codition)->get();

                
                    return view('admindetail.point.point_year', ['point1'=>$point1,'point2'=>$point2,'class'=>$class,'subject'=>$subject]);                 
                }
                else {
                    return view('admindetail.point.point_year',['point1'=>$point1,'point2'=>$point2]);
                }
           } 
           else 
           {
                return Redirect::to("/admin/login");
           }
       }
       public function deleteStudentPoint($id)
       {
        if (Auth::guard("admins")->check()) {
            DB::table('point')->where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return Redirect::to("/admin/login");
        }
       }
        public function importExcel(Request $request)
        {
            $this->validate($request,[
                'select_file' => 'required|mimes:xls,xlsx'
            ],
            [
                'select_file.required' => "Chưa chọn file.",
                'select_file.mimes' => "Phải chọn file excel.",
            ]);

            $path = $request->file('select_file');
            $data = Excel::import(new PointImport(),$path);
          
            return redirect()->back()->with('notify', 'Nhập thành công');
           
        }
        public function updateExcel(Request $request)
        {
            $this->validate($request,[
                'select_update_file' => 'required|mimes:xls,xlsx'
            ],
            [
                'select_update_file.required' => "Chưa chọn file.",
                'select_update_file.mimes' => "Phải chọn file excel.",
            ]);

            $path = $request->file('select_update_file');
            // $data = Excel::import(new PointImport(),$path);

            $data = Excel::toCollection(new PointImport(),$path);
            foreach($data[0] as $dt)
            {
                Point::where([
                ['user_id',$dt['ma_hoc_sinh']],
                ['class_id',$dt['ma_lop']],
                ['subject_id',$dt['ma_mon_hoc']],
                ['term_id',$dt['ma_hoc_ky']]
                ])
                ->update([
                    // 'user_id' =>$dt['ma_hoc_sinh'],
                    // 'class_id' =>$dt['ma_lop'],
                    // 'subject_id' =>$dt['ma_mon_hoc'],
                    // 'term_id' =>$dt['ma_hoc_ky'],
                    'dm' => $dt['diem_mieng'],
                    'd15' => $dt['diem_15_phut'],
                    'd45' => $dt['diem_45_phut'],
                    'dhk' => $dt['diem_hoc_ky'],
                    'dtbhk' => $dt['diem_tbhk'],
                ]);
                //dd($dt['ma_hoc_sinh'].' '. $dt['ma_lop'].' '.$dt['ma_mon_hoc'].' '.$dt['ma_hoc_ky']);
            }
            return redirect()->back()->with('notify', 'Cập nhật thành công');
           
        }

    //    public function exportExcel()
    //    {
    //         return Excel::download(new PointExport,'points.xlsx');
    //    }  
    
       public function ajaxclass($idgrade)
       {
           if (Auth::guard("admins")->check())
           {
               $classes = Classes::where('grade_id',$idgrade)->get();
               foreach($classes as $cl) {
                   echo "<option value='".$cl->id."'>".$cl->name_class."</option>";
               }
           } 
           else {
                return Redirect::to("/admin/login");
           }
       }
   
       public function ajaxsubject($idclass)
       {
           if (Auth::guard("admins")->check())
           {
               
               $subjects = DB::table('subjects as sj')
                       ->join('subject_class as sc', 'sj.id', '=', 'sc.subject_id')
                       ->select('sj.id', 'sj.name_subject')
                       ->where('class_id', $idclass)->get();
               foreach($subjects as $sb) {
                   echo "<option value='".$sb->id."'>".$sb->name_subject."</option>";
               }
           } 
           else {
                return Redirect::to("/admin/login");
           }
       }
}
?>