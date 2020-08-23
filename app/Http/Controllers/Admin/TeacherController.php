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
use App\SubjectTeacher;
use App\Imports\PointImport;
use App\Exports\PointExport;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FrontEnd\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Config;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Middleware\CommonFunctions;
use App\Repositories\CourseMemberRepository;
use App\Repositories\UserRepository;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;
use Excel;
use Exception;




class TeacherController extends Controller
{
    //**********Teacher*********//
    public function createTeacher(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            
            $page = $request->get("page");

            $teacher = Teacher::select(['id', 'name_teacher', 'address', 'phone_number','e_mail', 'gender', 'date_of_birth', 'specialize_id', 'CMND', 'teacher_status'])
                ->orderBy('id', 'asc')
                ->paginate(Config::get('constant.rows_per_page'));
            $specialize_id = Specialize::select('id','name')->get(); 
            return view('admindetail.teacher.admin_create_teacher', ['teacher' => $teacher,'specialize_id'=>$specialize_id,'page' => $page]);
        } else {
            return Redirect::to("/admin/login");
        }
    }
    public function createTeacherSave(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatorEmpty = Validator::make($request->post(), [
                'id' => 'required|unique:teacher,id',
                'name_teacher' => 'required',
                'address' => 'required',
                'phone_number' => 'required|regex:' . Config::get('constant.regex_phone'),
                'e_mail' => 'required|unique:teacher,e_mail|regex:' . Config::get('constant.regex_email'),
                'gender' => 'required',
                'date_of_birth' => 'required',
                'specialize_id' => 'required',
                'CMND' => 'required|unique:teacher,CMND',
            ],
            [
                'id.unique' => 'Mã giáo viên đã tồn tại', 
                'name_teacher.required'=>'Nhập tên giáo viên',
                'address.required'=>'Nhập địa chỉ',
                'phone_number.required'=>'Nhập số điện thoại',
                'e_mail.required'=>'Nhập email',
                'date_of_birth.required'=>'Nhập ngày sinh',
                'CMND.required'=>'Nhập số CMND',
                'CMND.unique'=>'Số CMND đã tồn tại',
                'e_mail.unique'=>'Email đã tồn tại'
            ]);

            if ($validatorEmpty->fails()) {
                return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
            } 
            else 
            {
                $teacher = Teacher::create($request->all());

                $message = Config::get('constant.create_fail_mesg');
                if ($teacher->save()) {
                    $message = Config::get('constant.create_success_mesg');
                    return redirect()->back()->with('message', $message);
                }
            }
        } else {
            return redirect()->route('create_teacher');
        }
    }
    public function listTeacher(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            $teacher = Teacher::select(['id', 'name_teacher','address','phone_number', 'e_mail', 'gender', 'date_of_birth', 'specialize_id', 'CMND', 'level','teacher_status'])
                    ->where('teacher_status','<', 3)
                    ->paginate(Config::get('constant.rows_per_page'));
            if ($request->isMethod('post')) {
                
                $id = $request->post('id_teacher_search');
                $name_teacher = $request->post('teacher_name_search');
                $specialize = $request->post('specialize_search');
                
                if (($id == null) && ($name_teacher == null) && ($specialize == null))
                {
                    return view('admindetail.teacher.admin_list_teacher', ['teacher' => $teacher]);
                }
                
                $codition = [];
                
                if($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);                    
                }
                if ($name_teacher){
                    
                    $codition_name = ['name_teacher', 'like', '%' . $name_teacher . '%'];
                    array_push($codition, $codition_name);
                }
                if ($specialize){
                    $codition_email = ['specialize_id', 'like', '%' . $specialize . '%'];
                    array_push($codition, $codition_email);
                }
                            
                $teacher = Teacher::select('id', 'name_teacher','address','phone_number', 'e_mail', 'gender', 'date_of_birth', 'specialize_id', 'CMND', 'level', 'teacher_status')         
                    ->where($codition)
                    ->paginate(Config::get('constant.rows_per_page'));
                
                return view('admindetail.teacher.admin_list_teacher', ['teacher' => $teacher, 'id_teacher_search' => $id, 'teacher_name_search' => $name_teacher, 'specialize_search' => $specialize]);       
                        
            }
            else {                          
                return view('admindetail.teacher.admin_list_teacher', ['teacher' => $teacher]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }

    }
    public function editTeacher(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'name_teacher' => 'required',
                'address' => 'required',
                'phone_number' => 'required|regex:' . Config::get('constant.regex_phone'),
                'e_mail' => 'required|regex:' . Config::get('constant.regex_email'),
                'gender' => 'required',
                'date_of_birth' => 'required',
                'specialize_id' => 'required',
                'CMND' => 'required', 
                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {

                    $teacherId = $request->post("teacher_id");
                    $teacher = Teacher::where('id', "=", $teacherId)->first(); 
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($teacher != null)
                    {
                        $teacher->name_teacher = ucwords($request->post("name_teacher"));
                        $teacher->address = $request->post("address");
                        $teacher->phone_number = $request->post("phone_number");
                        $teacher->e_mail = $request->post("e_mail");
                        $teacher->gender = $request->post("gender");
                        $teacher->date_of_birth = $request->post("date_of_birth");
                        $teacher->specialize_id = $request->post("specialize_id");    
                        $teacher->CMND = $request->post("CMND");
                        $teacher->level = $request->post("level");
                        $teacher->teacher_status = $request->post("teacher_status");
                        $teacher->save();
                        $teacher->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $teacherId = $request->get('id');
                $teacher = Teacher::select('id', 'name_teacher','address','phone_number', 'e_mail', 'gender', 'date_of_birth', 'specialize_id', 'CMND', 'level', 'teacher_status')->where('id','=',$teacherId)->first();

                $specialize_id = Specialize::all();
                return view('admindetail.teacher.admin_edit_teacher', ['teacher' => $teacher,'specialize_id'=>$specialize_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    
    public function deleteTeacher($id)
    {
    if (Auth::guard("admins")->check()) {
            DB::table('teacher')->where('id', '=', $id)->delete();
            return Redirect::to("/admin/list_teacher");
        } else {
            return Redirect::to("/admin/login");
        }
    }

    public function createSpecialize(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            
            $page = $request->get("page");

            $specialize = Specialize::select(['id', 'name', 'note'])
                ->orderBy('id', 'asc')
                ->paginate(Config::get('constant.rows_per_page'));

            return view('admindetail.teacher.admin_create_specialize', ['specialize' => $specialize, 'page' => $page]);
        } else {
            return Redirect::to("/admin/login");
        }
    }

    public function createSpecializeSave(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name' => 'required',
                ]);
                
                if ($validatorEmpty->fails()) {
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $specialize = new Specialize();
                    $specialize->name = ucwords($request->post("name"));
                    $specialize->note = $request->post("note");              
                    //dd($song);                    
                    $message = Config::get('constant.create_fail_mesg');
                    if ($specialize->save()) {     
                        $message = Config::get('constant.create_success_mesg');                 
                    }
                    return redirect()->back()->with('message', $message);   
                }
            } 
            else 
            {
                return view('admindetail.teacher.admin_create_specialize');
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }

    public function editSpecialize(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                    'name' => 'required'
                ]);
                
                if ($validatorEmpty->fails()) {
                    
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $specializeId = $request->post("specialize_id");                            
                    $specialize = Specialize::where('id', "=", $specializeId)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($specialize != null)
                    {
                        $specialize->name = ucwords($request->post("name")); 
                        $specialize->note = $request->post("note");
                        $specialize->save();
                        $specialize->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $specializeId = $request->get('id');                        
                $specialize = Specialize::select('id', 'name', 'note')
                        ->where('id','=',$specializeId)->first();

                return view('admindetail.teacher.admin_edit_specialize', ['specialize' => $specialize]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    public function deleteSpecialize($id)
    {
    if (Auth::guard("admins")->check()) {
            DB::table('specialize')->where('id', '=', $id)->delete();
            return Redirect::to("/admin/create_specialize");
        } else {
            return Redirect::to("/admin/login");
        }
    }
}
