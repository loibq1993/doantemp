<?php

namespace App\Http\Controllers\Admin;
use mysqli;
use Illuminate\Support\Facades\Hash;
use App\AdminUser;
use App\Student;
use App\MemberCourse;
use App\PlaceLV1;
use App\PlaceLV2;
use App\User;
use App\Subject;
use App\Teacher;
use App\Specialize;
use App\Certificate;
use App\Course;
use App\Classes;
use App\Point;
use App\Bonus;
use App\Conduct;
use App\Rank;
use App\Folk;
use App\Studentclass;
use App\Subjectclass;
use App\Term;
use App\Transform;
use App\Transformschool;
use App\Studentaccount;
use App\SchoolCertificateTemp;
use App\Schoolrecord;
use App\Schoolrecordetail;
use App\Studentbodis;

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
use PDF;
use Exception;

//Điều chuyển
if(isset($_GET['arr']) && isset($_GET["vlct"]) && isset($_GET["notect"]))
{
    ?>
    <?php
     $str= $_GET['arr'];
     $arr=explode(",",$str);
     $lopct=$_GET["vlct"];
     $note= $_GET["notect"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doantotnghiep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 $sql = "SELECT * FROM classes where name_class='$lopct'";
    $result = $conn->query($sql);
    $iddc;
    $row = $result->fetch_assoc();
    $iddc=$row['id'];

     foreach ($arr as $hs) {
         

         $sql="update student_class set is_enable='0',note='$note'  where user_id='$hs'and class_id='$iddc' ";
        
         if($conn->query($sql))
         {
           
         }
         else
         {

         }
     }
     ?>
     <script type="text/javascript">alert("Điều chuyển trường thành công!");</script>
 <?php
}
//Phân lớp học sinh
if(isset($_GET['arr'])&& isset($_GET['vlsl']))
    { 

            $str= $_GET['arr'];
            $arr=explode(",",$str);
            $vl=$_GET['vlsl'];
           

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

if(isset($_GET['atc']))
{
    $sql= "select * from student_class";

$result = $conn->query($sql);

 if ($result->num_rows > 0) {
  // output data of each row
    
  while($row = $result->fetch_assoc()) {
  ?>
    <script type="text/javascript"> var i=0;</script>
    <?php
    for($i=0;$i<count($arr);$i++)
    {
         if(intval($row["user_id"])==intval($arr[$i])&& intval($row["class_id"])==intval($id))
         {

            ?>

                <script > 
                     var arr= document.getElementsByClassName("cbclass");
                        arr[i].click();
                </script>
            <?php
    
            break;
         }
         ?>
     <script type="text/javascript"> i++;</script>
     <?php
        }

 
  }
} else {
  echo "0 results";
}
}
//Điều chuyển học sinh
if(isset($_GET['note']) && isset($_GET['vldc']))
{

    $note=$_GET['note'];
    $vldc=$_GET['vldc'];

    $sql = "SELECT * FROM classes where name_class='$vldc'";
    $result = $conn->query($sql);
    $iddc;
    $row = $result->fetch_assoc();
    $iddc=$row['id'];
   
     for($i=0;$i<count($arr);$i++)
    {
        

            $sql="SELECT count(*) as sum from student_class where user_id='$arr[$i]' and class_id='$id'";
                $result= $conn->query($sql);
                $row= $result->fetch_assoc();
                if( intval($row["sum"])>0)
                {

                ?>
                 <script type="text/javascript">alert("Học sinh này đã tồn tại trong lớp!");</script>

                <?php
                break;
                }
                else
                {
                             $update_st= "UPDATE student_class set is_enable='0' where user_id='$arr[$i]' and class_id=".$iddc;
                          
                                $file=fopen("test1.txt", "w");
                            fwrite($file, $update_st);

                                fclose($file);
                                

                                $conn->query($update_st);

                           // $sql="SELECT id from student_class where user_id='$arr[$i]' and is_enable='1'";
                           
                           // $r=$conn->query($sql);
                           // if($r->num_rows>0)
                           // {

                           //      while ($row=$r->fetch_assoc()) 
                           //      {
                           //          $update_st= "UPDATE student_class set is_enable='0' where id=".$row['id'];
                           //          $conn->query($update_st);
                           //      }
                           // }


                    $sql = "INSERT INTO student_class (user_id,class_id,is_enable,note)
                    VALUES ($arr[$i],$id,'1','$note')";

                    
                    if($conn->query($sql))
                    {

                        if($i==(count($arr)-2)) 
                        {
                            ?>
                          <script type="text/javascript">alert("Điều chuyển học sinh thành công!");</script>

                        <?php
                        break;
                        }
                    }
           
                }
    }
}
else
{
    for($i=0;$i<count($arr);$i++)
    {

        $sql="SELECT count(*) as sum from student_class where user_id='$arr[$i]' and class_id='$id'";
            $result= $conn->query($sql);
            $row= $result->fetch_assoc();
            if( intval($row["sum"])>0)
            {

                ?>
                 <script type="text/javascript">alert("Học sinh này đã tồn tại trong lớp!");</script>

                <?php
                break;
            }
            else
            {

                       // $sql="SELECT id from student_class where user_id='$arr[$i]' and is_enable='1'";
                       
                       $r=$conn->query($sql);
                       // if($r->num_rows>0)
                       // {

                       //      while ($row=$r->fetch_assoc()) {
                                
                       //          $update_st= "UPDATE student_class set is_enable='0' where id=".$row['id'];
                       //          $conn->query($update_st);
                       //      }
                       // }


                $sql = "INSERT INTO student_class (user_id,class_id,is_enable)
                VALUES ($arr[$i],$id,'1')";

                if($conn->query($sql))
                {

                    if($i==(count($arr)-2)) 
                    {
                        ?>
                      <script type="text/javascript">alert("Thêm học sinh thành công!");</script>

                    <?php
                    break;
                    }
                }
            }   
    }
}
     $conn->close();  
}

                                                                                                               


class AdminDetail extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function createAdminDetail()
    {
        if (Auth::guard("admins")->check()) {
            $countStudent = Student::select('id')->get()->count();
            $countTeacher = Teacher::select('id')->get()->count();
            $countClasses = Classes::select('id')->get()->count();

            return view('admindetail.admin_detail', ['countStudent' => $countStudent,'countTeacher'=>$countTeacher,'countClasses'=>$countClasses]);
        } else {
            return Redirect::to("/admin/login");
        }
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */

    //Thêm chứng chỉ
    public function Sct(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"2")-> where('classes.grade_id' , '=' ,"2")->get();
        $option = ['class_name' => $request->post("class_name")
                ];
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.certificate.addschoolcertificate', ['list_classes' => $classes, 'option' => $option]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->leftJoin('school_certificate_temp', 'st.id', '=', 'school_certificate_temp.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth','school_certificate_temp.user_id')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"2")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.certificate.addschoolcertificate', ['list_classes' => $classes, 'list_student'=>$student, 'option' => $option]);
        }
    }
    //Save chứng chỉ
    public function Savecerschooltemp(Request $request){
       if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'testcouncil' => 'required',
                'year' =>'required',
                'SBD'=>'required',
                'ĐTB12'=>'required',
                'math' => 'required',
                'literature' => 'required',
                'BTTH' => 'required',
                'tenBTTH' => 'required',
                'DKK' => 'required',
                'ĐXTN' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $schollct = new SchoolCertificateTemp();
                    $schollct->user_name = ($request->post("user_name"));
                    $schollct->user_id = ($request->post("user_id"));
                    $schollct->DOB = ($request->post("dob"));
                    $schollct->folk = ($request->post("folk"));
                    $schollct->gender = ($request->post("gender"));
                    $schollct->address = ($request->post("address"));
                    $schollct->year = ($request->post("year"));
                    $schollct->council_test = ($request->post("testcouncil"));
                    $schollct->SBD = ($request->post("SBD"));
                    $schollct->ĐTN = ($request->post("ĐXTN"));
                    $schollct->ĐTB12 = ($request->post("ĐTB12"));
                    $schollct->math = ($request->post("math"));
                    $schollct->liter = ($request->post("literature"));
                    $schollct->other_languague = ($request->post("otherlang"));
                    $schollct->BTTH = ($request->post("BTTH"));
                    $schollct->name_of_BTTH = ($request->post("tenBTTH"));
                    $schollct->ĐKK = ($request->post("DKK"));
                    $schollct->DXTN = ($request->post("DXTN"));
                    $schollct->note = ($request->post("note"));
                    $message = Config::get('constant.create_fail_mesg');
                    if ($schollct->save()) {
                        //return view('admindetail.course.admin_create_course_succes');
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
                
            } 
            else 
            {
                $stid = $request->get("stid");
                $users = Student::select('id', 'name', 'date_of_birth', 'gender', 'address','folk_id')->where('id','=',$stid)->first();
                return view('admindetail.certificate.school_certificate_temp', ['users' => $users]);
            }
        } 
    }
    //Danh sách chứng chỉ tốt nghiệp tạm thời
    public function listCertificatetemp(Request $request)
    {               
        if (Auth::guard("admins")->check()) {
            
            $list = DB::table(SchoolCertificateTemp::table)
                ->select(SchoolCertificateTemp::table . '.id', SchoolCertificateTemp::table . '.user_name',SchoolCertificateTemp::table . '.user_id', SchoolCertificateTemp::table . '.created_at')
                ->paginate(Config::get('constant.rows_per_page'));
                    
            if ($request->isMethod('post')) {
                
                $id_st = $request->post('id_student_search');
                $user_name = $request->post('name_student_search');
                $id_p = $request->post('id_phieu');
                
                if (($id_st == null) && ($user_name == null)&& ($id_p == null))
                {
                    return view('admindetail.certificate.list_certificate_temp', ['list' => $list]);
                }
                
                $codition = [];
                
                if($id_st){
                    $codition_id = ['user_id', '=', $id_st];
                    array_push($codition, $codition_id);                    
                }
                if ($user_name){
                    $codition_name = ['user_name', 'like', '%' . $user_name . '%'];
                    array_push($codition, $codition_name);
                }
                if ($id_p){
                    $codition_name = ['id', 'like', '%' . $id_p . '%'];
                    array_push($codition, $codition_name);
                }
                            
                $list = SchoolCertificateTemp::select('id', 'user_id','user_name', 'created_at')         
                    ->where($codition)
                    ->paginate(Config::get('constant.rows_per_page'));
                    
                return view('admindetail.certificate.list_certificate_temp', ['list' => $list, 'id_student_search' => $id_st, 'name_student_search' => $user_name, 'id_phieu' => $id_p]);       
                        
            }
            else {                          
                return view('admindetail.certificate.list_certificate_temp', ['list' => $list]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }
    }
    public function createCertificate(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_certificate' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $certificate = new Certificate();
                    $certificate->name = ucwords($request->post("name_certificate"));
                    $certificate->type = ($request->post("type"));
                    $certificate->note = ucwords($request->post("note"));                    
                    $message = Config::get('constant.create_fail_mesg');
                    if ($certificate->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }
            } 
            else 
            {
                return view('admindetail.certificate.create_certificate');
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    //Danh sách chứng chỉ
    public function listCertificate()
    {
        if (Auth::guard("admins")->check()) {
            $certificate = Certificate::select(['id', 'name', 'type'])
                    ->where('type', '<', 3)
                    ->paginate(Config::get('constant.rows_per_page'));
            //dd($songs);
            return view('admindetail.certificate.listcertificate', ['list_certificate' => $certificate]);
        } else {
            return Redirect::to("/admin/login");
        }
    }
    //Chi tiết chứng chỉ tốt nghiệp tạm thời
    public function detailCertificatetemp(Request $request){
        $ctid = $request->get("ctid");
        $ctt = SchoolCertificateTemp::select('id','user_name', 'DOB', 'folk', 'gender', 'address', 'year', 'council_test',
        'SBD', 'ĐTN', 'ĐTB12','math','liter','other_languague','BTTH','name_of_BTTH','ĐKK','DXTN','note','created_at')
        ->where('id','=',$ctid)->get();
        return view('admindetail.certificate.detail_school_certificate_temp',['ctt' => $ctt] );
    }
    //Xóa chứng chỉ tốt nghiệp tạm thời
    public function deleteSchoolreporttemp($id)
    {
    if (Auth::guard("admins")->check()) {
            DB::table('school_certificate_temp')->where('id', '=', $id)->delete();
            return Redirect::to("/admin/list_certificate_temp");
        } else {
            return Redirect::to("/admin/login");
        }
    }
    //Quản lý chứng chỉ học sinh
    public function Manage_certificate(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"2")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.certificate.manage_student_certificate', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"2")->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->where('is_enable', '=', '1')
                    ->orderBy('st.name','asc')->get();
            $certificate = Certificate::select('id','name')->get();
            return view('admindetail.certificate.manage_student_certificate', ['list_certificate' => $certificate, 'list_student'=>$student, 'list_classes' => $classes]);
        }
    }
    //Chưng chỉ
    public function Detailcertificate(Request $request){
        return view('admindetail.certificate.detail_school_certificate_temp');
    }
    //Thêm mới năm học
    public function Addschoolyear(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            if ($request->isMethod('post')) 
            {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_school_year' => 'required|unique:academic_years,name_of_school_year',
                    'start_time' => 'required',
                    'end_time' => 'required',
                    'status'=>'required'
                ],[
                    'unique' => Config::get('constant.academic_exist')
                ]);
                if ($validatorEmpty->fails()) 
                {                
                    return redirect()->back()->withErrors($validatorEmpty->getMessageBag());
                } 
                else {               

                    
                    $course = new Course();
                    $course->name_of_school_year = ucwords($request->post("name_school_year"));
                    $course->start_time = $request->post("start_time");
                    $course->end_time = $request->post("end_time");   
                    $course->status = $request->post("status");

                    if ($course->save()) {
                        //return view('admindetail.course.admin_create_course_succes');
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
            } else 
            {
                $page = $request->get("page");
                $course = Course::select(['id', 'name_of_school_year', 'start_time', 'end_time','status'])
                    ->orderBy('start_time', 'asc')
                    ->paginate(Config::get('constant.rows_per_page'));
               return view('admindetail.classes.addschoolyear', ['courses' => $course, 'page' => $page]);
            }
        }
    }
    public function editSchoolyear(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_school_year' => 'required',
                    'start_time' => 'required',
                    'end_time' => 'required',
                    'status'=>'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $academicId = $request->post("academic_id");                            
                    $academic = Course::where('id', "=", $academicId)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($academic != null)
                    {
                        $academic->name_of_school_year = ucwords($request->post("name_school_year"));
                        $academic->start_time = $request->post("start_time");
                        $academic->end_time = $request->post("end_time");   
                        $academic->status = $request->post("status");
                        $academic->save();
                        $academic->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $academicId = $request->get('id');                        
                $academic = Course::select('*')
                        ->where('id','=',$academicId)->first();

                return view('admindetail.classes.edit_academic_year', ['academic'=>$academic]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    //Thêm Lớp Học
    public function createClasses(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {

                // $x = $request->post("academicyears");
                // dd($x);
                $validatorEmpty = Validator::make($request->post(), [
                    'name_class' => 'required|unique:classes,name_class',
                    'name_teacher' => 'required',
                    'grade' => 'required',
                    'academicyears' => 'required',
                    'status' => 'required'
                    ],
                    [
                        'unique' => "Tên lớp đã tồn tại."
                    ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $classes = new Classes();
                    $classes->name_class = ($request->post("name_class"));
                    $classes->grade_id = ucwords($request->post("grade"));
                    $classes->academic_year_id  = ($request->post("academicyears"));
                    $classes->status_id = ($request->post("status"));
                    $classes->name_teacher = ucwords($request->post("name_teacher"));
                    $message = Config::get('constant.create_fail_mesg');
                    if ($classes->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }

            } 
            else 
            {
                $academicsyear = Course::select('id','name_of_school_year')->get();
                $teacher = Teacher::select('id', 'name_teacher')->where('teacher.level','=','1')->get();
                $subject_id = Subject::select('id','name_subject')->get();
                //dd($academicsyear);
                return view('admindetail.classes.add_classes', ['list_course' => $academicsyear, 'list_teacher'=>$teacher,'subject_id'=>$subject_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    //// Phân lớp học sinh
    public function Addstudentclass(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())){
            //$student = DB::table('users')->select('*')->paginate(Config::get('constant.rows_per_page'));
            $student = DB::table('users as u')
                        ->leftJoin('student_class as sc', 'u.id', '=', 'sc.user_id')
                        ->whereNull('sc.user_id')
                        ->select('u.name', 'u.gender', 'u.address','u.date_of_birth', 'u.id','sc.user_id' )
                        ->paginate(Config::get('constant.rows_per_page'));
            //dd($student);
            $classes = Classes::select('id','name_class')-> where('classes.grade_id', '=', "0")->get(); 
            $page = $request->get("page");
            if ($request->isMethod('post')){
                $id = $request->post('id_search');
                $name = $request->post('name_search');
                if (($id == null) && ($name == null))
                {
                    return view('admindetail.classes.add_student_into_class', ['users' => $student],['list_classes'=>$classes]);
                }
                $codition = [];
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }
                if ($name){
                    $codition_name = ['name', 'like', '%' . $name . '%'];
                    array_push($codition, $codition_name);
                }
                $student = Student::select('id','name','date_of_birth','gender')
                ->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));
                
                //$classes = Classess::select('id','name_class')->get(); 
                return view('admindetail.classes.add_student_into_class', ['users' => $student, 'list_classes' => $classes, 'id_search' => $id, 'name_search' => $name]);
                             
            }
            else { 
                                       
                return view('admindetail.classes.add_student_into_class', ['users' => $student,'list_classes' => $classes]);
            }
        }else{
            return Redirect::to("/admin/addstudentclass");
        }
    }
    //Hiển thị danh sách lớp học
    public function listClasses()
    {
        if (Auth::guard("admins")->check()) {
            $classes = Classes::select(['id', 'name_class', 'academic_year_id', 'status_id','name_teacher','grade_id'])
                    ->where('grade_id', '<=', 3)
                    ->paginate(Config::get('constant.rows_per_page'));
            //dd($songs);
            return view('admindetail.classes.list_classes', ['list_classes' => $classes]);
        } else {
            return Redirect::to("/admin/login");
        }
    }
    public function editClasses(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_class' => 'required',
                    'name_teacher' => 'required',
                    'grade' => 'required',
                    'academicyears' => 'required',
                    'status' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $classesId = $request->post("classes_id");                            
                    $classes = Classes::where('id', "=", $classesId)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($classes != null)
                    {
                        $classes->name_class = ($request->post("name_class"));
                        $classes->grade_id = ucwords($request->post("grade"));
                        $classes->academic_year_id  = ($request->post("academicyears"));
                        $classes->status_id = ($request->post("status"));
                        $classes->name_teacher = ucwords($request->post("name_teacher"));
                        $classes->save();
                        $classes->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $classesId = $request->get('id');                        
                $classes = Classes::select('*')
                        ->where('id','=',$classesId)->first();
                $academicsyear = Course::select('id','name_of_school_year')->get();
                $subject_id = Subject::select('id','name_subject')->get();
                $teacher = Teacher::select('id', 'name_teacher')->where('teacher.level','=','1')->get();
                return view('admindetail.classes.edit_classes', ['classes' => $classes,'academicsyear'=>$academicsyear,'subject_id'=>$subject_id,'teacher'=>$teacher]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    // Hiển thị học sinh theo lớp
    public function getHocSinhLop(Request $request){
        $cid = $request->get("cid");
        $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->join('classes as cl','sc.class_id','=','cl.id')
                    ->select('sc.user_id', 'st.name', 'st.gender', 'st.date_of_birth','cl.id','cl.name_class', 'st.status')
                    ->where([['class_id', $cid], ['is_enable', '=', '1'],['st.status', '=', '0']])
                    ->orderBy('sc.user_id','asc')->get();
        $classes = Classes::select('id','name_class')->where('id',$cid)->first();
        return view ('admindetail.classes.liststudentclass',  ['list_student' => $student,'classes'=>$classes]);
    }
    //Lấy ra các lớp học sinh đã theo học
    public function Getlophs(Request $request){
        $stid = $request->get("stid");
        //dd($cid);
        $hs_lop = Studentclass::where('user_id',$stid)->get();
        // dd($hs_lop);
        $classes = DB::table('classes as cl')
                    ->join('student_class as sc', 'cl.id', '=', 'sc.class_id')
                    ->select('cl.id', 'cl.name_class', 'cl.name_teacher', 'cl.academic_year_id', 'sc.note')
                    ->where('user_id',$stid)
                    ->orderBy('cl.id','asc')->get();
        //dd($student);
        return view ('admindetail.schoolrecord.show_student_report',  ['list_classes' => $classes]);
    }
     //Xét lên lớp học sinh
     public function Xetlenlop(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.classes.xetlenlop', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            return view('admindetail.classes.xetlenlop', ['list_classes' => $classes, 'list_student'=>$student]);
        }
    }
    public function addTerm(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'academic_id' => 'required',
                    'name_term' => 'required',
                    'status' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $term = Term::create($request->all());
        
                    $message = Config::get('constant.create_fail_mesg');
                    if ($term->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }

            } 
            else 
            {
                $academic_id = Course::select('id','name_of_school_year','status')->where('status','=',0)->get();
                $term = Term::join('academic_years as ac','academic_id','=','ac.id')
                ->select(['terms.id', 'name_term','name_of_school_year', 'academic_id','terms.status'])
                    ->orderBy('id', 'asc')
                    ->paginate(Config::get('constant.rows_per_page'));
                return view('admindetail.classes.add_term', ['term'=> $term,'academic_id' => $academic_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    public function editTerm(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'academic_id' =>'required',
                    'name_term' => 'required',
                    'status' => 'required',
                ]);
                
                if ($validatorEmpty->fails()) {
                    
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $termId = $request->post("term_id");                            
                    $term = Term::where('id', "=", $termId )->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($term != null)
                    {
                        $term->academic_id = $request->post("academic_id");
                        $term->name_term = ucwords($request->post("name_term"));
                        $term->status = $request->post("status");
                        $term->save();
                        $term->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $termId = $request->get('id');                        
                $term = Term::select('*')->where('id','=',$termId)->first();
                $academic_id = Course::select('id','name_of_school_year','status')->where('status','=',0)->get();

              return view('admindetail.classes.edit_term',['term'=>$term,'academic_id'=>$academic_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }

    //Điều chuyển lớp học sinh
    public function Dieuchuyenhocsinh(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.transfer_student.dieuchuyenlop', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->where('is_enable', '=', '1')
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.transfer_student.dieuchuyenlop', ['list_classes' => $classes, 'list_student'=>$student, 'option' => $option]);
        }
    }
    //Học sinh chuyển trường
    public function Chuyentruonghocsinh(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.transfer_student.hschuyentruong', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->where('is_enable', '=', '1')
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.transfer_student.hschuyentruong', ['list_classes' => $classes, 'list_student'=>$student, 'option' => $option]);
        }
    }
    //Học sinh chuyển đến trường
    public function Receivestudent(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())){
            
            $student = DB::table('users')->select('*')-> where('users.new', '=', "1")-> where('users.status', '=', "0")->paginate(Config::get('constant.rows_per_page'));
            $classes = Classes::select('id','name_class')->where('classes.status_id', '=', '1')->get(); 
            $page = $request->get("page");
            if ($request->isMethod('post')){
                $id = $request->post('id_search');
                $name = $request->post('name_search');
                if (($id == null) && ($name == null))
                {
                    return view('admindetail.classes.add_student_into_class', ['users' => $student],['list_classes'=>$classes]);
                }
                $codition = [];
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }
                if ($name){
                    $codition_name = ['name', 'like', '%' . $name . '%'];
                    array_push($codition, $codition_name);
                }
                $student = Student::select('id','name','date_of_birth','gender')->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));
                
                return view('admindetail.transfer_student.hschuyendentruong', ['users' => $student, 'list_classes' => $classes, 'id_search' => $id, 'name_search' => $name]);
                             
            }
            else { 
                                       
                return view('admindetail.transfer_student.hschuyendentruong', ['users' => $student,'list_classes' => $classes]);
            }
        }else{
            return Redirect::to("/admin/addstudentclass");
        }
    }
    //Tạo mới phiếu điều chuyển lớp
    public function Transfer_student(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.transfer_student.addtransferform', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.transfer_student.addtransferform', ['list_classes' => $classes, 'list_student'=>$student, 'option' => $option]);
        }
    }
    // điều chuyển trường
    public function Transfer_student_school(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.transfer_student.addtransferformschool', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.transfer_student.addtransferformschool', ['list_classes' => $classes, 'list_student'=>$student],['option' => $option]);
        }
    }
    //Form điều chuyển trường
    public function Formdctruong(Request $request){
       if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'lopht' => 'required',
                'name_school_transfer'=>'required',
                'add_new_school'=>'required',
                'reason_of_transform' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $transformschool = new Transformschool();
                    $transformschool->name_user = ($request->post("user_name"));
                    $transformschool->user_id = $request->post("user_id");
                    $transformschool->class_id_current = ($request->post("lopht"));
                    $transformschool->name_of_new_school = $request->post("name_school_transfer");
                    $transformschool->address_of_new_school = $request->post("add_new_school");
                    $transformschool->reason_of_transform = $request->post("reason_of_transform");
                    $message = Config::get('constant.create_fail_mesg');
                    if ($transformschool->save()) {
                        //return view('admindetail.course.admin_create_course_succes');
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
                
            } 
            else 
            {
                $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
                $stid = $request->get("stid");
                $users = Student::select('id', 'name')
                                ->where('id','=',$stid)->first();
                return view('admindetail.transfer_student.formdctruong', ['list_classes' => $classes, 'users' => $users]);
            }
        } 
    }
    //Form điều chuyển lớp
    public function Formdc(Request $request){
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'lopht' => 'required',
                'lopdc' => 'required',
                'reason_of_transform' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $transform = new Transform();
                    $transform->name_user = ($request->post("user_name"));
                    $transform->user_id = $request->post("user_id");
                    $transform->class_id_old = ($request->post("lopht"));
                    $transform->class_id_new = $request->post("lopdc");
                    $transform->reason_of_transform = $request->post("reason_of_transform");
                    $message = Config::get('constant.create_fail_mesg');
                    if ($transform->save()) {
                        //return view('admindetail.course.admin_create_course_succes');
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
                
            } 
            else 
            {
                $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
                $stid = $request->get("stid");
                $users = Student::select('id', 'name')
                                ->where('id','=',$stid)->first();
                return view('admindetail.transfer_student.formdc', ['list_classes' => $classes, 'users' => $users]);
            }
        } 
        
    }
    //Nhập học bạ
    public function listupdateSchoolrecord(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        $option = ['class_name' => $request->post("class_name")
                ];
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.schoolrecord.add_list_update_sc', ['list_classes' => $classes, 'option' => $option]);
            }
        else{
            $cid = $request->get("class_name");
            $student = DB::table('users as st')
                    // ->leftJoin('school_record_detail as sd', 'st.id', '=', 'sd.user_id')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->join('classes as cl','sc.class_id','=','cl.id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth','sc.class_id','cl.name_class')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();
            $check = DB::table('users as u') -> leftJoin('school_record_detail as sd', 'u.id', '=', 'sd.user_id')->select('sd.*')->first();
           // $classes = DB::table('classes as cl')->leftJoin('school_record_detail as sd', 'cl.id', '=', 'sd.class_id')->select('id', 'name_class')->where('classes.status_id' , '=' ,"1")->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $cid = $request->get("cid");
            $option = ['class_name' => $request->post("class_name")];
            return view('admindetail.schoolrecord.add_list_update_sc', ['list_classes' => $classes, 'list_student'=>$student, 'option' => $option, 'check'=>$check, 'check'=>$check]);
        }
    }
    //Chi tiết khen thưởng - kỷ luật học sinh
    public function Detailbodisstudent(Request $request){
        $tid = $request->get("tid");
        //dd($tid);
        $lsbd = DB::table('student_bodis as sd')
                    ->join('classes as c', 'c.id', '=', 'sd.class_id')
                    ->select('sd.*', 'c.name_class', 'c.academic_year_id')
                    ->where('user_id',$tid)->get();
        return view('admindetail.bonus_discipline.detail_student_bodis',['lsbd' => $lsbd]);
    }
    //Chi tiết học bạ
    public function Detailschoolreport(Request $request){
        $tid = $request->get("tid");
        //dd($tid);
        $lsc = Schoolrecord::select('id','name_student', 'gender', 'dob', 'placeborn','folk','address',
        'name_of_fa','name_of_mo','job_of_fa','job_of_mo','name_of_op','job_of_op', 'created_at')->where('id','=',$tid)->get();

        $hs_lop = Studentclass::where('user_id',$tid)->get();
        // dd($hs_lop);
        $classes = DB::table('classes as cl')
                    ->join('student_class as sc', 'cl.id', '=', 'sc.class_id')
                    ->select('cl.id', 'cl.name_class', 'cl.name_teacher', 'cl.academic_year_id', 'sc.note')
                    ->where('user_id',$tid)
                    ->where('sc.is_enable', '=', '1')
                    ->orderBy('cl.id','asc')->get();
        return view('admindetail.schoolrecord.detail_school_record',['lsc' => $lsc, 'classes'=>$classes] );
    }
    //Chi tiết trang học bạ ghi nhận quá trình học tập
    public function Wactchreportschool(Request $request){
        // $cid = $request->get("cid");
        $usid = $request->get("usid");
       
        $wsc = DB::table('school_record_detail as sd')
                    ->join('users as u', 'u.id', '=', 'sd.user_id')
                    ->join('classes as c', 'c.id', '=', 'sd.class_id')
                    ->select('sd.*', 'u.name', 'c.name_class')
                    ->where('user_id','=',$usid)
                    ->get(); 
        //dd($wsc);

        return view('admindetail.schoolrecord.watch_school_report',['wsc' => $wsc] );
    }
    public function DownloadPDF(Request $request)
    {	
        $tid = $request->get("tid");

        $lsc = Schoolrecordetail::select('id','name_student', 'gender', 'dob', 'placeborn','folk','address',
        'name_of_fa','name_of_mo','job_of_fa','job_of_mo','name_of_op','job_of_op', 'created_at')->where('id','=',$tid)->get();
        
        $classes = Classes::join('student_class as sc', 'classes.id', '=', 'sc.class_id')
                    ->select('classes.id', 'classes.name_class', 'classes.name_teacher', 'classes.academic_year_id', 'sc.note')
                    ->where('user_id',$tid)
                    ->where('sc.is_enable', '=', '1')
                    ->get();
        set_time_limit(3000);
        $pdf = PDF::loadView('admindetail.schoolrecord.detail_school_record',['lsc'=>$lsc,'classes'=> $classes]);
        return $pdf->download('schoolrecord.pdf');
   
    }
    

    //Danh sách học bạ
    public function listSchoolrecord(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {
                      
            $listsc = Schoolrecord::select('*')->orderBy('id', 'desc')
                    ->paginate(Config::get('constant.rows_per_page'));                          
                    
            $page = $request->get("page");
            
            if ($request->isMethod('post')) {
                
                $id = $request->post('id_search');        
                if (($id == null))
                {
                    return view('admindetail.schoolrecord.list_school_record', ['listsc' => $listsc]);
                }
                
                $codition = [];
                $id = $request->post('id_search');
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }                    
                $listsc = Schoolrecord::select('*')->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));  
                    
                return view('admindetail.schoolrecord.list_school_record', ['listsc' => $listsc, 'id_search' => $id, 'page' => $page]);      
                        
            }
            else {                          
                return view('admindetail.schoolrecord.list_school_record', ['listsc' => $listsc, 'page' => $page]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }

    }
    //Nhập học bạ
    public function UpdateSR(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'toan1' => 'required',
                'toan2' => 'required',
                'toanCN' => 'required',
                'giaovientoan'=>'required',
                'ly1' => 'required',
                'ly2' => 'required',
                'lycn' => 'required',
                'giaovienly' => 'required',
                'hoa1' => 'required',
                'hoa2' => 'required',
                'hoacn' => 'required',
                'giaovienhoa' =>'required',
                'sinh1'=> 'required',
                'sinh2'=> 'required',
                'sinhcn'=> 'required',
                'giaoviensinh'=> 'required',
                'tin1'=>'required',
                'tin2'=>'required',
                'tincn'=>'required',
                'giaovientin'=>'required',
                'nguvan1' => 'required',
                'nguvan2' => 'required',
                'nguvancn' => 'required',
                'lichsu1' => 'required',
                'lichsu2' => 'required',
                'lichsucn' => 'required',
                'giaovienlichsu' => 'required',
                'diali1' => 'required',
                'diali2' => 'required',
                'dialicn' => 'required',
                'giaoviendiali' => 'required',
                'ngoaingu1'=> 'required',
                'ngoaingu2'=> 'required',
                'ngoaingucn'=> 'required',
                'giaovienngoaingu'=> 'required',
                'congnghe1' => 'required',
                'congnghe2' => 'required',
                'congnghecn' => 'required',
                'giaoviencongnghe' => 'required',
                'qp1' => 'required',
                'qp2' => 'required',
                'qpcn' => 'required',
                'gvqp' => 'required',
                'td1' => 'required',
                'td2' => 'required',
                'tdcn' => 'required',
                'giaoviencongnghe'=> 'required',
                'giaoduccd1' => 'required',
                'giaoduccd2' => 'required',
                'giaoduccdcn' => 'required',
                'gvgiaoduccd' => 'required',
                'ĐTB1' => 'required',
                'ĐTB2' => 'required',
                'ĐTBcn' => 'required',
                'GVCN' => 'required'

                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $scd = new Schoolrecordetail();
                    $scd->user_id = $request->post("user_id");
                    $scd->class_id = $request->post("class_id");
                    $scd->school_year_id = $request->post("academic_year_id");
                    $scd->toan_1 = $request->post("toan1");
                    $scd->toan_2 = $request->post("toan2");
                    $scd->toan_CN = $request->post("toanCN");
                    $scd->toan_L = $request->post("toanlai");
                    $scd->ly_1 = $request->post("ly1");
                    $scd->ly_2 = $request->post("ly2");
                    $scd->ly_CN = $request->post("lycn");
                    $scd->ly_L = $request->post("lylai");
                    $scd->hoa_1 = $request->post("hoa1");
                    $scd->hoa_2 = $request->post("hoa2");
                    $scd->hoa_cn = $request->post("hoacn");
                    $scd->hoa_l = $request->post("hoalai");
                    $scd->sinh_1 = $request->post("sinh1");
                    $scd->sinh_2 = $request->post("sinh2");
                    $scd->sinh_CN = $request->post("sinhcn");
                    $scd->sinh_L = $request->post("sinhlai");
                    $scd->tin_1 = $request->post("tin1");
                    $scd->tin_2 = $request->post("tin2");
                    $scd->tin_CN = $request->post("tincn");
                    $scd->tin_L = $request->post("tinlai");
                    $scd->van_1 = $request->post("nguvan1");
                    $scd->van_2 = $request->post("nguvan2");
                    $scd->van_cn = $request->post("nguvancn");
                    $scd->van_l = $request->post("nguvanlai");
                    $scd->su_1 = $request->post("lichsu1");
                    $scd->su_2 = $request->post("lichsu2");
                    $scd->su_cn = $request->post("lichsucn");
                    $scd->su_l = $request->post("lichsulai");
                    $scd->dia_1 = $request->post("diali1");
                    $scd->dia_2 = $request->post("diali2");
                    $scd->dia_cn = $request->post("dialicn");
                    $scd->dia_l = $request->post("dialilai");

                    $scd->tienganh_1 = $request->post("ngoaingu1");
                    $scd->tienganh_2 = $request->post("ngoaingu2");
                    $scd->tienganh_cn = $request->post("ngoaingucn");
                    $scd->tienganh_lai = $request->post("ngoaingulai");
                    $scd->cn_1 = $request->post("congnghe1");
                    $scd->cn_2 = $request->post("congnghe2");
                    $scd->cn_cn = $request->post("congnghecn");
                    $scd->cn_l = $request->post("congnghelai");
                    $scd->qp_1 = $request->post("qp1");
                    $scd->qp_2 = $request->post("qp2");
                    $scd->qp_cn = $request->post("qpcn");
                    $scd->qp_l = $request->post("qplai");
                    $scd->tc_1 = $request->post("td1");
                    $scd->tc_2 = $request->post("td2");
                    $scd->tc_cn = $request->post("tdcn");
                    $scd->tc_l = $request->post("tdlai");
                    $scd->nghe_1 = $request->post("nghe1");
                    $scd->nghe_2 = $request->post("nghe2");
                    $scd->nghe_cn = $request->post("nghecn");
                    $scd->nghe_l = $request->post("nghelai");
                    $scd->congdan_1 = $request->post("giaoduccd1");
                    $scd->congdan_2	 = $request->post("giaoduccd2");
                    $scd->cd_cn = $request->post("giaoduccdcn");
                    $scd->cd_l = $request->post("giaoduccdlai");
                    $scd->DTBHK1 = $request->post("ĐTB1");
                    $scd->DTBHK2 = $request->post("ĐTB2");
                    $scd->DTBHLCN = $request->post("ĐTBcn");
                    $scd->DTBL = $request->post("ĐTBlai");
                    $scd->HL1 = $request->post("hocluc1");
                    $scd->HL2 = $request->post("hocluc2");
                    $scd->HLCN = $request->post("hocluccn");

                    $scd->HLL = $request->post("hocluclai");
                    $scd->HK1 = $request->post("hanhkiem1");
                    $scd->HK2 = $request->post("hanhkiem2");
                    $scd->HKCN = $request->post("hanhkiemcn");
                    $scd->HKL = $request->post("name_giamho");
                    $scd->chungchi = $request->post("certificate_job");
                    $scd->giaithuong = $request->post("name_bodis");
                    $scd->KTDB = $request->post("name_bodis");
                    $scd->NXGV = $request->post("cmt_gv");
                    $scd->NXHT = $request->post("cmt_ht");
                     $scd->gvtoan = $request->post("giaovientoan");
                    $scd->gvvan = $request->post("giaovienvan");
                    $scd->gvanh = $request->post("giaovienngoaingu");
                    $scd->gvly = $request->post("giaovienly");
                    $scd->gvhoa = $request->post("giaovienhoa");
                    $scd->gvsinh = $request->post("giaoviensinh");
                    $scd->gvsu = $request->post("giaovienlichsu");
                    $scd->gvdia = $request->post("giaoviendiali");

                    $scd->gvtin = $request->post("giaovientin");
                    $scd->gvgdcd = $request->post("gvgiaoduccd");
                    $scd->gvtd = $request->post("giaovientd");
                    $scd->gvqpan = $request->post("gvqp");
                    $scd->qvcongnghe = $request->post("giaoviencongnghe");
                    $scd->gvnghe = $request->post("giaoviennghe");
                    $scd->gvcn = $request->post("GVCN");
                    // Mức khen thưởng kỷ luật
					$scd->value_giaithuong = $request->post("award");

					


                    $message = Config::get('constant.create_fail_mesg');
                    if ($scd->save()) {
                        
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
                
            }
            else{ 
                $cid = $request->get("cid");
                $usid = $request->get("usid");
                $bodis = Bonus::select('id', 'name')->get();
                $conduct = Conduct::select('id', 'name')->get();
                $class = Student::leftJoin('student_class as sc', 'users.id', '=', 'sc.user_id')
                ->join('classes as cl','sc.class_id','=','cl.id')
                ->join('academic_years as ay', 'ay.name_of_school_year', '=', 'cl.academic_year_id')
                ->select('sc.user_id','cl.id', 'cl.academic_year_id')
                ->where('cl.id','=',$cid)
                ->where('users.id','=',$usid)
                ->first();
                return view('admindetail.schoolrecord.detail_record', ['class' => $class, 'conduct'=>$conduct, 'bodis'=>$bodis]);
            }
        }
        
    }

    //Thêm học bạ học sinh
    public function Addschoolreport(Request $request){
      if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'noisinh' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $schoolrecord = new Schoolrecord();
                    $schoolrecord->name_student = ($request->post("user_name"));
                    $schoolrecord->user_id = ($request->post("user_id"));
                    $schoolrecord->gender = $request->post("user_gender");
                    $schoolrecord->dob = ($request->post("user_dob"));
                    $schoolrecord->placeborn = $request->post("noisinh");
                    $schoolrecord->folk = $request->post("user_folk");
                    $schoolrecord->address = $request->post("user_address");
                    $schoolrecord->name_of_fa = $request->post("user_namefa");
                    $schoolrecord->name_of_mo = $request->post("user_namema");
                    $schoolrecord->job_of_fa = $request->post("user_jf");
                    $schoolrecord->job_of_mo = $request->post("mother_job");
                    $schoolrecord->name_of_op = $request->post("name_giamho");
                    $schoolrecord->job_of_op = $request->post("nghe_giamho");
                    $message = Config::get('constant.create_fail_mesg');
                    if ($schoolrecord->save()) {
                        //return view('admindetail.course.admin_create_course_succes');
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
                
            } 
            else 
            {
                $usid = $request->get("usid");
               //dd($stid);
                $users = Student::select('id', 'name','gender', 'date_of_birth', 'address', 'name_of_dad', 'name_of_mom', 'mother_job', 'father_job','folk_id' )
                    ->where('id','=',$usid)->first();
                // dd($student);
                return view('admindetail.schoolrecord.add_school_report', ['users' => $users]);
            }
        }
    }
    //Quản lý phiếu điều chuyển lớp
    public function listTransferform(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {
                      
            $transfer_student = Transform::select('*')->orderBy('id', 'desc')
                    ->paginate(Config::get('constant.rows_per_page'));                          
                    
            $page = $request->get("page");
            
            if ($request->isMethod('post')) {
                
                $id = $request->post('id_search');        
                if (($id == null))
                {
                    return view('admindetail.transfer_student.list_transform_student', ['transfer_student' => $transfer_student]);
                }
                
                $codition = [];
                $id = $request->post('id_search');
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }                    
                $transfer_student = Transform::select('*')->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));  
                    
                return view('admindetail.transfer_student.list_transform_student', ['transfer_student' => $transfer_student, 'id_search' => $id, 'page' => $page]);      
                        
            }
            else {                          
                return view('admindetail.transfer_student.list_transform_student', ['transfer_student' => $transfer_student, 'page' => $page]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }

    }

    //Quản lý phiếu điều chuyển trường
    public function listTransferformschool(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {
                      
            $transfer_school = Transformschool::select('*')->orderBy('id', 'desc')
                    ->paginate(Config::get('constant.rows_per_page'));                          
                    
            $page = $request->get("page");
            
            if ($request->isMethod('post')) {
                
                $id = $request->post('id_search');        
                if (($id == null))
                {
                    return view('admindetail.transfer_student.list_transform_school', ['transfer_school' => $transfer_school]);
                }
                
                $codition = [];
                $id = $request->post('id_search');
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }                    
                $transfer_student = Transform::select('*')->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));  
                    
                return view('admindetail.transfer_student.list_transform_school', ['transfer_school' => $transfer_school, 'id_search' => $id, 'page' => $page]);      
                        
            }
            else {                          
                return view('admindetail.transfer_student.list_transform_school', ['transfer_school' => $transfer_school, 'page' => $page]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }

    }
    //Chi tiết phiếu đc trường
    public function detailTransferformschool(Request $request){
        $tid = $request->get("tid");
        //dd($tid);
        $tfs = Transformschool::select('id','user_id','name_user', 'class_id_current', 'name_of_new_school', 'address_of_new_school', 'created_at', 'reason_of_transform')->where('id','=',$tid)->get();
        //dd($tf);
        // $tf = DB::table('transform_form as tf')
        //             ->join('classes as cl', [['tf.class_id_old', '=', 'cl.id'], ['tf.class_id_new', '=', 'cl.id']])
        //             ->select('tf.id', 'tf.name_user', 'tf.reason_of_transform', 'tf.class_id_old', 'tf.class_id_new', 'tf.created_at', 'cl.id', 'cl.name_class')
        //             ->where('tf.id','=',$tid)->get();
        return view('admindetail.transfer_student.detailtransformschool',['tfs' => $tfs] );
    }
    //Chi tiết phiếu đc lớp
    public function detailTransferform(Request $request){
        $tid = $request->get("tid");
        //dd($tid);
        $tf = Transform::select('id','user_id','name_user', 'class_id_old', 'class_id_new', 'reason_of_transform', 'created_at')->where('id','=',$tid)->get();
        //dd($tf);
        // $tf = DB::table('transform_form as tf')
        //             ->join('classes as cl', [['tf.class_id_old', '=', 'cl.id'], ['tf.class_id_new', '=', 'cl.id']])
        //             ->select('tf.id', 'tf.name_user', 'tf.reason_of_transform', 'tf.class_id_old', 'tf.class_id_new', 'tf.created_at', 'cl.id', 'cl.name_class')
        //             ->where('tf.id','=',$tid)->get();
        return view('admindetail.transfer_student.detailtransform',['tf' => $tf] );
    }

    //Nhận xét của Gv
    public function Comment_teacher(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.schoolrecord.comment_teacher', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();

            $classes = Classes::select('id','name_class','status_id')->where('status_id' , '=' ,1)->get();
            return view('admindetail.schoolrecord.comment_teacher', ['list_classes' => $classes, 'list_student'=>$student]);
        }
    }
   //Thêm loại xếp hạng
   public function Addrank(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            $page = $request->get("page");

            if ($request->isMethod('post')) {

                // $x = $request->post("academicyears");
                // dd($x);
                $validatorEmpty = Validator::make($request->post(), [
                    'name_rank' => 'required',
                    'value_rank' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $rank = new Rank();
                    $rank->name_of_rank = ($request->post("name_rank"));
                    $rank->value_range = ($request->post("value_rank"));
                    $message = Config::get('constant.create_fail_mesg');
                    if ($rank->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }

            } 
            else 
            {
                $rank = Rank::select(['id', 'name_of_rank', 'value_range'])
                ->orderBy('id', 'asc')
                ->paginate(Config::get('constant.rows_per_page'));
                return view('admindetail.schoolrecord.add_rank', ['rank' => $rank, 'page' => $page]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
  
    //Học bạ học sinh
    public function CreateStudentReport(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())){
            
            $student = DB::table('users')
                        ->leftJoin('schoolrecord', 'users.id', '=', 'schoolrecord.user_id')
                        ->select('users.*', 'schoolrecord.user_id')
                        ->paginate(Config::get('constant.rows_per_page'));
            //dd($student);
            $page = $request->get("page");
            if ($request->isMethod('post')){
                $id = $request->post('id_search');
                $name = $request->post('name_search');
                if (($id == null) && ($name == null))
                {
                    return view('admindetail.schoolrecord.addstudentreport', ['users' => $student]);
                }
                $codition = [];
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }
                if ($name){
                    $codition_name = ['name', 'like', '%' . $name . '%'];
                    array_push($codition, $codition_name);
                }
                $student = DB::table('users')
                        ->leftJoin('schoolrecord', 'users.id', '=', 'schoolrecord.user_id')
                        ->select('users.*', 'schoolrecord.user_id')
                        ->where($codition)
                        ->orderBy('id', 'desc')
                        ->paginate(Config::get('constant.rows_per_page'));

                // $student = Student::select('id','name','date_of_birth','gender')->where($codition)->orderBy('id', 'desc')
                //         ->paginate(Config::get('constant.rows_per_page'));
                
                //$classes = Classess::select('id','name_class')->get(); 
                return view('admindetail.schoolrecord.addstudentreport', ['users' => $student, 'id_search' => $id, 'name_search' => $name]);
                             
            }
            else { 
                                       
                return view('admindetail.schoolrecord.addstudentreport', ['users' => $student]);
            }
        }else{
            return Redirect::to("/admin/addstudentclass");
        }
    }
    //Quá trình học tập
     public function StudentReport(Request $request)
    {
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())){
            
            $student = DB::table('users')->select('*')->paginate(Config::get('constant.rows_per_page'));
            $classes = Classes::select('id','name_class')-> where('classes.grade_id', '=', "0")->get(); 
            $page = $request->get("page");
            if ($request->isMethod('post')){
                $id = $request->post('id_search');
                $name = $request->post('name_search');
                if (($id == null) && ($name == null))
                {
                    return view('admindetail.classes.add_student_into_class', ['users' => $student]);
                }
                $codition = [];
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }
                if ($name){
                    $codition_name = ['name', 'like', '%' . $name . '%'];
                    array_push($codition, $codition_name);
                }
                $student = Student::select('id','name','date_of_birth','gender')->where($codition)->orderBy('id', 'desc')
                        ->paginate(Config::get('constant.rows_per_page'));
                
                //$classes = Classess::select('id','name_class')->get(); 
                 return view('admindetail.schoolrecord.student_report_in_school', ['users' => $student,'list_classes' => $classes]);
                             
            }
            else { 
                                       
                return view('admindetail.schoolrecord.student_report_in_school', ['users' => $student,'list_classes' => $classes]);
            }
        }else{
            return Redirect::to("/admin/login");
        }
    }


    //Cập nhật hạnh kiểm
    public function Updateconduct(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            if ($request->isMethod('post')) 
            {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_conduct' => 'required'
                ]);

                if ($validatorEmpty->fails()) 
                {                
                    return redirect()->back()->withErrors($validatorEmpty->getMessageBag());
                } 
                else {               

                    //dd('test');
                    $conduct = new Conduct();
                    $conduct->name = ucwords($request->post("name_conduct"));
                    $conduct->note = ($request->post("note"));
                    //jdd($course);
                    if ($conduct->save()) {
                        //return view('admindetail.course.admin_create_course_succes');
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
            } else 
            {
                $page = $request->get("page");
                $conduct = Conduct::select(['id', 'name', 'note'])
                    ->paginate(Config::get('constant.rows_per_page'));
               return view('admindetail.schoolrecord.add_conduct', ['conduct' => $conduct, 'page' => $page]);
            }
        }
    }
    //Cập nhật hạnh kiểm
    //Cập nhật xếp loại học lực
    public function editConduct(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'name' => 'required']);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $conductsid = $request->post("conduct_id");                            
                    $conducts = Conduct::where('id', "=", $conductsid)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($conducts != null)
                    {
                        $conducts->name = ($request->post("name"));
                        $conducts->save();
                        $conducts->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $conductsid = $request->get('cdid');                        
                $conducts = Conduct::select('*')->where('id','=',$conductsid)->first();

                return view('admindetail.schoolrecord.edit_conduct', ['conducts' => $conducts]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    } 
    //Khen thưởng - Kỷ Luật
    //Danh sách khen thưởng - kỷ luật
    public function listStudentbodis(Request $request){
        if ((Auth::guard("admins")->check()) || (Auth::guard("editors")->check())) {
                      
            $studentbodis = Studentbodis::select('*')->orderBy('id', 'desc')
                    ->paginate(Config::get('constant.rows_per_page'));                          
                    
            $page = $request->get("page");
            
            if ($request->isMethod('post')) {
                
                $id = $request->post('id_search');        
                if (($id == null))
                {
                    return view('admindetail.bonus_discipline.list_student_bodis', ['studentbodis' => $studentbodis]);
                }
                
                $codition = [];
                $id = $request->post('id_search');
                if ($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);
                }                    
                $studentbodis = Studentbodis::select('*')->where($codition)->orderBy('id', 'asc')
                        ->paginate(Config::get('constant.rows_per_page'));  
                    
                return view('admindetail.bonus_discipline.list_student_bodis', ['studentbodis' => $studentbodis, 'id_search' => $id, 'page' => $page]);      
                        
            }
            else {                          
                return view('admindetail.bonus_discipline.list_student_bodis', ['studentbodis' => $studentbodis, 'page' => $page]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }

    }
    //Form khen thưởng
    public function FormKTKL(Request $request){
        if (Auth::guard("admins")->check()) {
 
             if ($request->isMethod('post')) {
                 $validatorEmpty = Validator::make($request->post(), [
                 'lopht' => 'required',
                 'content_bodis'=>'required',
                 'value_bodis'=>'required',
                 ]);
                 
                 if ($validatorEmpty->fails()) {     
                     return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                 } 
                 else 
                 {
                     $student_bodis = new Studentbodis();
                     $student_bodis->name_student = ($request->post("user_name"));
                     $student_bodis->user_id = $request->post("user_id");
                     $student_bodis->class_id = ($request->post("lopht"));
                     $student_bodis->type = $request->post("type");
                     $student_bodis->content = $request->post("content_bodis");
                     $student_bodis->hinhthuc = $request->post("hinhthuc");
                     $student_bodis->rate = $request->post("value_bodis");
                     $message = Config::get('constant.create_fail_mesg');
                     if ($student_bodis->save()) {
                         //return view('admindetail.course.admin_create_course_succes');
                         $message = Config::get('constant.create_success_mesg');
                         return redirect()->back()->with('message', $message);
                     }
                 }
                 
             } 
             else 
             {
                 $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
                 $stid = $request->get("stid");
                 $users = Student::select('id', 'name')
                                 ->where('id','=',$stid)->first();
                 return view('admindetail.bonus_discipline.form_bodis_student', ['list_classes' => $classes, 'users' => $users]);
             }
            $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
                 $stid = $request->get("stid");
                 $users = Student::select('id', 'name')
                                 ->where('id','=',$stid)->first();
                 return view('admindetail.bonus_discipline.form_bodis_student', ['list_classes' => $classes, 'users' => $users]);
         } 
     }
    //Tạo khen thưởng - kỷ luật học sinh
    public function Listaddbodis (Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.bonus_discipline.list_add_student_bodis', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth')
                    ->where('class_id', $cid)
                    ->orderBy('st.name','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.bonus_discipline.list_add_student_bodis', ['list_classes' => $classes, 'list_student'=>$student],['option' => $option]);
        }
    }
    //Thêm khen thưởng - kỷ luật
    public function createBonus(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name_bonus' => 'required',
                    'type' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $bonus = new Bonus();
                    $bonus->name = ucwords($request->post("name_bonus"));
                    $bonus->type = ucwords($request->post("type"));                    
                    $message = Config::get('constant.create_fail_mesg');
                    if ($bonus->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }
            } 
            else 
            {
                return view('admindetail.bonus_discipline.create_bonus_dis');
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    // Hiển thị danh sách KT-KL
    public function listBonus()
    {
        if (Auth::guard("admins")->check()) {
            $bonus = Bonus::select(['id', 'name', 'type'])
                    ->where('type', '<', 2)
                    ->paginate(Config::get('constant.rows_per_page'));
            //dd($songs);
            return view('admindetail.bonus_discipline.list_bonus', ['list_bonus' => $bonus]);
        } else {
            return Redirect::to("/admin/login");
        }
    }
	
	
	
    //PDF
    public function getPdf(Request $request){
        $ctt = SchoolCertificateTemp::all();
        $pdf=PDF::loadView('admindetail.certificate.detail_school_certificate_temp', ['ctt'=>$ctt]);
        return $pdf->stream('certificatetemp.pdf');

    }       
}

?>