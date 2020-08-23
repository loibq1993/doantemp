<?php

namespace App\Http\Controllers\Admin;

use App\Mail\ForgetPasswordMail;
use App\Mail\RegisterMailAdmin;
use App\RoleAdminUser;
use App\Role;
use App\AdminUser;
use App\Course;
use App\Bonus;
use App\Certificate;
use App\Point;
use App\Classes;
use App\Student;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\FrontEnd\Controller;


class AdminController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function goToHomePageAdmin() {
        return Redirect::to("/admin/login");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginAdmin(Request $request)
    {
        if ($request->isMethod('post')) {
           $validatorEmpty = Validator::make($request->post(), [
               'email' => 'required',
                'password' => 'required'
            ]);

            if ($validatorEmpty->fails()) {
                return Redirect::to("/admin/login");
            } else {
                $adminUser = AdminUser::select('id', 'email', 'status')->where([['email', '=', $request->post('email')], ['status', '=', Config::get('constant.user_status.user_active')]])->first();
				
                if ($adminUser != null) {
                    if (Auth::guard("admins")->attempt(['email' => $request->post('email'), 'password' => $request->post('password')])) 
                    {
                        return $this->redirectAfterAuthAdmin();
                    } 
                    else
                        return Redirect::to("/admin/login")->withErrors(["login" => Config::get('constant.login_fails')]);
                } 
                else {
                    return Redirect::to("/admin/login")->withErrors(["login" => Config::get('constant.account_not_exist')]);
                }
            }
        } else {
            if (Auth::guard("admins")->check()) {
                return $this->redirectAfterAuthAdmin();
            } else {
                return view('admin.login_admin');
            }
        }
        return view('admin.login_admin');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forgetPasswordAdmin(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatorEmpty = Validator::make($request->post(), [
                'email' => 'required'
            ]);

            if ($validatorEmpty->fails()) {
                return Redirect::to("/admin/forget_password");
            } else {
                $email = $request->post('email');
                $adminUser = AdminUser::select('id', 'email', 'status')->where([['email', '=', $email], ['status', '=', Config::get('constant.user_status.user_active')]])->first();
                if ($adminUser == null) {
                    return Redirect::to("/admin/forget_password")->withErrors(["email" => Config::get('constant.account_not_exist')]);
                } else {
                    $token = mb_convert_encoding(md5($request->post("email") . rand()), 'UTF-8');
                    $adminUser->register_token = $token;
                    if ($adminUser->save()) {
                        $data = array(
                            'email' => $request->post('email'),
                            'register_token' => $token
                        );
                        Mail::to($request->post('email'))->send(new ForgetPasswordMail($data));
                        return Redirect::to("/admin/forget_password")->with(['data' => Config::get('constant.confirm_email')]);
                    }
                }
            }
        } else {
            return view('admin.mail_message_admin');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function resetForgetPassword(Request $request){
        $user = null;
        if($request->isMethod('post')) {
            $user = AdminUser::select('id', 'password', 'password_origin', 'register_token')->where('id', '=', $request->post('id'))->first();
            $validatorEmpty = Validator::make($request->post(), [
                'password'  => 'required',
                'rpassword' => 'required|required_with:password|same:password'
            ]);
            if($validatorEmpty->fails()) {
                return Redirect::to('/admin/forget_password/verify_password?register_token=' . $user->register_token);
            } else {
                $user->password = Hash::make($request->post('password'));
                $user->password_origin = $request->post('password');
                $user->register_token = '';
                if($user->save()) {
                    return view('admin.verify_account_admin');
                }
            }
        } else {
            $register_token = $request->get('register_token');
            $user = AdminUser::select('id', 'password', 'register_token')->where('register_token', '=', $register_token)->first();
            if($user != null) {
                return view('admin.verify_password_admin', [ 'data' => $user ]);
            } else {
                return Redirect::to('/admin');
            }
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerAdmin(Request $request)
    {         
        if ($request->isMethod('post')) {

            $validatorEmpty = Validator::make($request->post(), [
                'username' => 'required',
                'email' => 'required|regex:' . Config::get('constant.regex_email') . '|unique:admin_user,email',
                'password' => 'required',                
                'rpassword' => 'required|required_with:password|same:password'
            ], [
                'unique' => Config::get('constant.account_exist')
            ]);

           // dd($validatorEmpty); 
            if ($validatorEmpty->fails()) {
                return Redirect::to("/admin/register")->withErrors($validatorEmpty->getMessageBag())->withInput();
            } 
            else {
                try {
                    // insert data to admin_user table
                    $userAdmin = new AdminUser();
                    $userAdmin->email = $request->post("email");
                    $userAdmin->password = Hash::make($request->post("password"));
                    $userAdmin->password_origin = $request->post("password");
                    $userAdmin->user_name = ucwords($request->post("username"));
                    $token = mb_convert_encoding(md5($request->post("email") . rand()), 'UTF-8');
                    $userAdmin->register_token = $token;
                    $userAdmin->manage_place = Config::get('constant.admin_type.admin');
                    $userAdmin->status = Config::get('constant.user_status.user_active');
                    //dd($userAdmin);
                    // get role for member
                    $role = Role::select('id','name', 'slug')->where('name', '=', Config::get('constant.admin_type.admin'))->first();
                    if ($role == null)
                    {
                        return Redirect::to("/admin/register")->withErrors('Lỗi không lấy được dữ liệu từ bảng Role.');
                    }
                    $roleID = $role->id;
                    $roleName = $role->name; 
                    //dd("insert ok");        
                    $userAdmin->save();
                    $message = Config::get('constant.create_fail_mesg');    
                    if ($userAdmin->save()) {
                        $roleAdminUsers = new RoleAdminUser();
                        $roleAdminUsers->admin_user_id = $userAdmin->id;
                        $roleAdminUsers->role_id = $roleID;
                        $roleAdminUsers->save();
                        $data = array(
                            'email' => $request->post('email'),
                            'user_name' => $request->post('username'),
                            'password' =>  $request->post('password'),
                            'register_token' => $token,
                            'remember_token' => Str::random(10),
                        );
                        //Mail::to($request->post('email'))->send(new RegisterMailAdmin($data));
                        // return Redirect::to("/admin/mail_message");
                        $message = Config::get('constant.create_success_mesg');

                        
                    }
                    //dd($userAdmin);
                    return redirect()->back()->with('message', $message);
                     return Redirect::to("/admin/login");
                    
                } catch( Exception $e){
                    //dd($e);
                    return Redirect::to("/admin/register");
                }
            }
        } 
        else // TH là get
        {            
            return view('admin.register_admin');
        }        
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    
    public function registerManager(Request $request)
    {
		if (Auth::guard("admins")->check()) {
			if ($request->isMethod('post')) {
				$validatorEmpty = Validator::make($request->post(), [
					'username' => 'required',
					'email' => 'required|regex:' . Config::get('constant.regex_email') . '|unique:admin_user,email',
					'password' => 'required',                
					'rpassword' => 'required|required_with:password|same:password',
                    'phone' => 'required|regex:' . Config::get('constant.regex_phone'),
                    'birthday' => 'required',
				], [
					'unique' => Config::get('constant.account_exist')
				]);

				if ($validatorEmpty->fails()) {
					return Redirect::to("/admin/manager_register")->withErrors($validatorEmpty->getMessageBag())->withInput();
				} 
				else {
					try {
						// insert data to admin_user table
						$userAdmin = new AdminUser();
						$userAdmin->email = $request->post("email");
						$userAdmin->password = Hash::make($request->post("password"));
                        $userAdmin->password_origin = $request->post("password");
                        $userAdmin->phone = $request->post("phone");
                        $userAdmin->birthday = $request->post("birthday");
                        $userAdmin->gender = $request->post("gender");
                        $userAdmin->user_name = ucwords($request->post("username"));
						$token = mb_convert_encoding(md5($request->post("email") . rand()), 'UTF-8');
						$userAdmin->register_token = $token;
						
						//get role for member
						$roleID = $request->post("admin_role");
						$role = Role::select('name', 'slug')->where('id', '=', $roleID)->first();
						if ($role == null)
						{
							return Redirect::to("/admin/manager_register")->withErrors('Lỗi không lấy được dữ liệu từ bảng Role.');
						}
						$roleSlug = $role->slug;
						$manage_place = $roleSlug;

						
						if ($roleSlug != Config::get('constant.role_slug.manager'))  {
							$manage_place = $role->name;
                            
							// if ($manage_place == null){
							// 	return Redirect::to("/admin/manager_register")->withErrors('Chưa chọn khu vực quản lý.');
							// }
						}
                        else
                        {
                            $manage_place = $role->name;
                        }

						$message = Config::get('constant.create_fail_mesg');	
						// insert data to role_users table
						if ($userAdmin->save()) {
							$roleAdminUsers = new RoleAdminUser();
							$roleAdminUsers->admin_user_id = $userAdmin->id;
							$roleAdminUsers->role_id = $roleID;
							$roleAdminUsers->save();
                            $message = Config::get('constant.create_success_mesg');
                            return redirect()->back()->with('message', $message);
                            //dd($roleUsers);
							$data = array(
								'email' => $request->post('email'),
								'user_name' => $request->post('username'),
                                'password' =>  $request->post('password'),
								'register_token' => $token,
								'remember_token' => Str::random(10),
							);

							Mail::to($request->post('email'))->send(new RegisterMailAdmin($data));
						return Redirect::to("/admin/mail_message");
							
						}
						return redirect()->back()->with('message', $message);
						
					} catch( \Exception $e){
						return Redirect::to("/admin/manager_register");
					}
				}
			} else {
				$data = [];
		
				// admin's role
				$roles = Role::select('id', 'name', 'slug')->where('name', '<>', Config::get('constant.admin_type.admin'))->get();
				
				return view('admin.register_manager', ['dataPlace' => $data, 'roles' => $roles]);
			}
		}
		else {
            return Redirect::to("/admin/login");
        }
    }
    
	/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function listAdminManager(Request $request)
    {				
        if (Auth::guard("admins")->check()) {
			
            $list = DB::table(AdminUser::table)
                ->join(RoleAdminUser::table, AdminUser::table . '.id', '=', RoleAdminUser::table . '.admin_user_id')
                ->join(Role::table, Role::table . '.id', '=', RoleAdminUser::table . '.role_id')
                ->select(AdminUser::table . '.id', AdminUser::table . '.user_name', AdminUser::table . '.email', AdminUser::table . '.manage_place', AdminUser::table . '.status', Role::table . '.name')
                ->paginate(Config::get('constant.rows_per_page'));
					
			if ($request->isMethod('post')) {
				
				$id = $request->post('id_search');
				$user_name = $request->post('user_name_search');
				$manage_place = $request->post('manage_place_search');
				
				if (($id == null) && ($user_name == null) && ($manage_place == null))
				{
					return view('admin.admin_list_manager', ['list' => $list]);
				}
				
				$codition = [];
				
				if($id){
					$codition_id = ['admin_user.id', '=', $id];
					array_push($codition, $codition_id);					
				}
				if ($user_name){
					$codition_name = ['user_name', 'like', '%' . $user_name . '%'];
					array_push($codition, $codition_name);
				}
				if ($manage_place){
					$codition_place = ['roles.name', 'like', '%' . $manage_place . '%'];
					array_push($codition, $codition_place);
				}
							
				$list = DB::table(AdminUser::table)
                ->join(RoleAdminUser::table, AdminUser::table . '.id', '=', RoleAdminUser::table . '.admin_user_id')
                ->join(Role::table, Role::table . '.id', '=', RoleAdminUser::table . '.role_id')
                ->select(AdminUser::table . '.id', AdminUser::table . '.user_name', AdminUser::table . '.email', AdminUser::table . '.manage_place', AdminUser::table . '.status', Role::table . '.name')
                ->where($codition)
                ->paginate(Config::get('constant.rows_per_page'));
					
				return view('admin.admin_list_manager', ['list' => $list, 'id_search' => $id, 'user_name_search' => $user_name, 'manage_place_search' => $manage_place]);		
						
			}
			else {							
				return view('admin.admin_list_manager', ['list' => $list]);
			}
            
        } else {
            return Redirect::to("/admin/login");
        }
    }

    public function EditManager(Request $request)
    {               
        if (Auth::guard("admins")->check()) {                       
                    
            if ($request->isMethod('post')) {
                
                $userId = $request->post("manager_id");                            
                $userAdmin = AdminUser::where('id', "=", $userId)->first();
                $message = Config::get('constant.update_fail_mesg');
                
                if ($userAdmin != null){
                    $userAdmin->email = $request->post("email");
                    $userAdmin->user_name = ucwords($request->post("username"));                                
                    $birthday = $request->post("birthday");
                    
                    $message = Config::get('constant.format_number_day');
                    if ($birthday == '1970-01-01')
                    {
                        return redirect()->back()->with('message', $message);
                    }
                    $userAdmin->birthday = $request->post("birthday");
                    $userAdmin->manage_place = $request->post("admin_role");
                    $userAdmin->gender = $request->post("gender");
                    $userAdmin->phone = $request->post("phone"); 
                    $userAdmin->status = $request->post("status");           
                    
                    $userAdmin->save();
                    $userAdmin->push();              
                    
                    $message = Config::get('constant.update_success_mesg');                 
                }
                
                return redirect()->back()->with('message', $message);
            }
            else {
                $mngId = $request->get('id');
                        
                $mng = AdminUser::select('id', 'email','user_name', 'birthday', 'manage_place', 'password', 'phone', 'gender',
                                'status','created_at', 'updated_at')
                        ->where('id', '=', $mngId)->first();
                
                if ($mng == null)
                {
                    return Redirect::to("/admin/edit_manager")->withErrors(Config::get('constant.data_not_found'));    
                }
                
                $selected_role_object = RoleAdminUser::select('admin_user_id', 'role_id')->where('admin_user_id', $mng->id)->first();
                if ($selected_role_object == null)
                {
                    return Redirect::to("/admin/edit_manager")->withErrors(Config::get('constant.data_not_found'));
                }
                $selected_role_id = $selected_role_object->role_id;

                // admin's role
                $roles = Role::select('id', 'name', 'slug')->where('name', '<>', Config::get('constant.admin_type.admin'))->get();

                // $dataLv1 = PlaceLV1::select('id', 'place_name')->get();
                // $dataLv2 = PlaceLV2::select('id', 'place_name', 'place_lv1_id')->get();

         

                return view('admin.admin_edit_manager',['manager' => $mng, 'selected_role_id' => $selected_role_id, 'roles' => $roles]);
            }           
                
        } else {
            return Redirect::to("/admin/login");
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function registerVerifyAdmin(Request $request)
    {
        $user = AdminUser::select('id', 'status', 'register_token')->where('register_token', '=', $request->get("register_token"))->first();
        if ($user != null) {
            $user->register_token = "";
            $user->status = Config::get('constant.user_status.user_active');
            if ($user->save()) {
                return view('admin.verify_account_admin');
            }
        } else
            return Redirect::to("/admin");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    private function redirectAfterAuthAdmin()
    {
        //return Redirect::to("/admin/user_admin_detail");
		if (Auth::guard("admins")->user()->manage_place == Config::get('constant.admin_type.admin')) { 
			return Redirect::to("/admin/list_manager");
		}
		else if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)) { 
			return Redirect::to("/admin/list_teacher");
		}
		else
		{
			return Redirect::to("/admin/typingpoint");
		}
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logoutAdmin()
    {
        Auth::guard("admins")->logout();
        return Redirect::to("/admin");
    }
}
