<?php
namespace App\Http\Controllers\Admin;
use mysqli;
use Illuminate\Support\Facades\Hash;
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
use App\Rank;
use App\Folk;
use App\Studentclass;
use App\Subjectclass;
use App\Term;
use App\Transform;
use App\Transformschool;
use App\Studentaccount;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FrontEnd\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Pagination\LengthAwarePaginator;
use Excel;
use Exception;


class StudentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    // *************** tạo học sinh ******************
    public function createStudent(Request $request)
    {
        if (Auth::guard("admins")->check()) {
            
            $page = $request->get("page");
            $users = Student::select('*')
                ->orderBy('id', 'asc')
                ->paginate(Config::get('constant.rows_per_page'));
            $folk_id = Folk::all();

            return view('admindetail.student.admin_create_student', ['users' => $users,'folk_id'=>$folk_id, 'page' => $page]);
        } else {
            return Redirect::to("/admin/login");
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    // *************** tạo học sinh ******************
    public function createStudentSave(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatorEmpty = Validator::make($request->post(), [
                'id' =>'required|unique:users,id',
                'name' => 'required',
                'e_mail' => 'required|unique:users,e_mail|regex:' . Config::get('constant.regex_email'),
                'gender' => 'required',
                'date_of_birth' => 'required',
                'address' => 'required',
                'born_place' => 'required',
                'phone_of_parents' => 'required',
                'folk_id' => 'required',
            ], [
                'id.unique' => 'Mã học sinh đã tồn tại.',
                'e_mail.unique' => Config::get('constant.email_exist')
            ]);
            if ($validatorEmpty->fails()) {
                return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
            } 
            else 
            {
                $users = Student::create($request->all());

                $message = Config::get('constant.create_fail_mesg');
                if ($users->save()) {
                    //return view('admindetail.course.admin_create_course_succes');
                    $message = Config::get('constant.create_success_mesg');
                    return redirect()->back()->with('message', $message);
                }
            }
        } else {
            return redirect()->route('create_student');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function deleteStudent($id)
    {
    if (Auth::guard("admins")->check()) {
            DB::table('users')->where('id', '=', $id)->delete();
            return Redirect::to("/admin/list_student");
        } else {
            return Redirect::to("/admin/login");
        }
    }
    public function deleteStudentClass($id)
    {
    if (Auth::guard("admins")->check()) {

            DB::table('student_class')->where('user_id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return Redirect::to("/admin/login");
        }
    }

    // Danh sách học sinh
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function listStudent(Request $request)
    {
         if (Auth::guard("admins")->check()) {
            $users = Student::select('*')
                    ->paginate(Config::get('constant.rows_per_page'));
            if ($request->isMethod('post')) {
                
                $id = $request->post('id_student_search');
                $name = $request->post('name_search');
                
                if (($id == null) && ($name == null))
                {
                    return view('admindetail.student.admin_list_student', ['users' => $users]);
                }
                
                $codition = [];
                
                if($id){
                    $codition_id = ['id', '=', $id];
                    array_push($codition, $codition_id);                    
                }
                if ($name){
                    $codition_place = ['name', 'like', '%' . $name . '%'];
                    array_push($codition, $codition_place);
                }
                            
                $users = Student::select('*')->where($codition)
                    ->paginate(Config::get('constant.rows_per_page'));
                    
                return view('admindetail.student.admin_list_student', ['users' => $users, 'id_student_search' => $id,'name_search' => $name]);       
                        
            }
            else {                          
                return view('admindetail.student.admin_list_student', ['users' => $users]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }
    }

    /**
     * @param Request @request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
     public function editStudent(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'name' => 'required',
                'e_mail' => 'required|regex:' . Config::get('constant.regex_email'),
                'gender' => 'required',
                'date_of_birth' => 'required',
                'address' => 'required',
                'born_place' => 'required',
                'phone_of_parents' => 'required',
                'folk_id' => 'required', 
                ]);
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $usersId = $request->post("user_id");                            
                    $users = Student::where('id', "=", $usersId)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($users != null)
                    {
                        $users->name = ucwords($request->post("name"));
                        $users->e_mail = $request->post("e_mail");
                        $users->gender = $request->post("gender");
                        $users->date_of_birth = $request->post("date_of_birth");
                        $users->address = ucwords($request->post("address"));
                        $users->born_place = ucwords($request->post("born_place"));
                        $users->phone_of_parents = $request->post("phone_of_parents");
                        $users->name_of_dad = $request->post("name_of_dad");
                        $users->father_job = $request->post("father_job");
                        $users->name_of_mom = $request->post("name_of_mom");
                        $users->mother_job = $request->post("mother_job");
                        $users->folk_id = $request->post("folk_id");
                        $users->veteran = $request->post("veteran");
                        $users->new = $request->post("new");
                        $users->status = $request->post("status");
                        $users->save();
                        $users->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $usersId = $request->get('id');                        
                $users = Student::select('*')->where('id','=',$usersId)->first();
                $folk_id = Folk::all();

                return view('admindetail.student.admin_edit_student', ['users' => $users,'folk_id'=>$folk_id]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    } 

    //Tạo mới tài khoản cho học sinh
    public function Student_account(Request $request){
        $classes = Classes::select('id','name_class')-> where('classes.status_id' , '=' ,"1")->get();
        if ($request->isMethod('get')) 
            {               
                return view('admindetail.student_account.register_student_account', ['list_classes' => $classes]);
            }
        else{
            $cid = $request->get("class_name");
            //dd($cid);
            $hs_lop = Studentclass::where('class_id',$cid)->get();
            $student = DB::table('users as st')
                    ->join('student_class as sc', 'st.id', '=', 'sc.user_id')
                    ->leftJoin('student_account as sa', 'st.id', '=', 'sa.user_id')
                    ->select('st.id', 'st.name', 'st.gender', 'st.date_of_birth','sa.user_id' )
                    ->where('class_id', $cid)
                    ->orderBy('st.id','asc')->get();
            $classes = Classes::select('id','name_class')->where('classes.status_id' , '=' ,"1")->get();
            $option = ['class_name' => $request->post("class_name")
                ];
            return view('admindetail.student_account.register_student_account', ['list_classes' => $classes, 'list_student'=>$student, 'option' => $option]);
        }
    } 
    //Tạo tài khoản
    public function Addaccount(Request $request){
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                'user_id' => 'unique:student_account,user_id',
                'is_active' => 'required',
                'email'=>'required'
                ],
                [
                    'unique' => "Tài khoản đã tồn tại"
                ]
            );
                
                if ($validatorEmpty->fails()) {     
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $stc = new Studentaccount();
                    $stc->name_user = $request->post("name");
                    $stc->user_id = $request->post("user_id");
                    $stc->password = Hash::make($request->post("password"));
                    $stc->email = $request->post("email");
                    $stc->is_active = $request->post("is_active");
                    $message = Config::get('constant.create_fail_mesg');
                    if ($stc->save()) {
                        $message = Config::get('constant.create_success_mesg');
                        return redirect()->back()->with('message', $message);
                    }
                }
                
            } 
            else 
            {
                $stid = $request->get("stid");
                $users = Student::select('id', 'name', 'e_mail')->where('id','=',$stid)->first();
                return view('admindetail.student_account.add_student_account', ['users' => $users]);
            }
        } 
        
    }
    //Danh sách tài khoản student
    public function listStudentAccount(Request $request)
    {               
        if (Auth::guard("admins")->check()) {
            
            $list = Studentaccount::select('id', 'name_user','user_id', 'email', 'is_active')  
                ->paginate(Config::get('constant.rows_per_page'));
                    
            if ($request->isMethod('post')) {
                
                $user_id = $request->post('id_search');
                $user_name = $request->post('user_name_search');
                
                if (($user_id == null) && ($user_name == null))
                {
                    return view('admindetail.student_account.list_student_account', ['list' => $list]);
                }
                
                $codition = [];
                
                if($user_id){
                    $codition_id = ['user_id', '=', $user_id];
                    array_push($codition, $codition_id);                    
                }
                if ($user_name){
                    $codition_name = ['name_user', 'like', '%' . $user_name . '%'];
                    array_push($codition, $codition_name);
                }
                            
                $list = Studentaccount::select('id', 'name_user','user_id', 'email', 'is_active')         
                    ->where($codition)
                    ->paginate(Config::get('constant.rows_per_page'));
                    
                return view('admindetail.student_account.list_student_account', ['list' => $list, 'id_search' => $user_id, 'user_name_search' => $user_name]);       
                        
            }
            else {                          
                return view('admindetail.student_account.list_student_account', ['list' => $list]);
            }
            
        } else {
            return Redirect::to("/admin/login");
        }
    }
    public function editStudentaccount(Request $request)
    {
        if (Auth::guard("admins")->check()) {

            if ($request->isMethod('post')) {
                $validatorEmpty = Validator::make($request->post(), [
                ]);
                
                if ($validatorEmpty->fails()) {
                    
                    return Redirect::back()->withInput($request->input())->withErrors($validatorEmpty->getMessageBag());
                } 
                else 
                {
                    $accountId = $request->post("account_id");                         
                    $account = Studentaccount::where('id', "=", $accountId)->first();
                    $message = Config::get('constant.update_fail_mesg');
                    
                    if ($account != null)
                    {
                        $account->name_user = $request->post("name");
                        $account->user_id = $request->post("user_id");
                        $account->password = Hash::make($request->post("password"));
                        $account->email = $request->post("email");
                        $account->is_active = $request->post("is_active");
                        $account->save();
                        $account->push();              
                        
                        $message = Config::get('constant.update_success_mesg'); 
                    }
                    return redirect()->back()->with('message', $message);   
                }
                
            } 
            else 
            {
                $accountId = $request->get('user_id');                        
                $account = Studentaccount::select('*')
                        ->where('user_id','=',$accountId)->first();
                return view('admindetail.student_account.edit_student_account',['account'=>$account]);
            }
        } 
        else 
        {
            return Redirect::to("/admin/login");
        }
    }
    public function deleteStudentAccount($id)
    {
    if (Auth::guard("admins")->check()) {
            DB::table('student_account')->where('id', '=', $id)->delete();
            return Redirect::to("/admin/list_student_account");
        } else {
            return Redirect::to("/admin/login");
        }
    }
}

?>