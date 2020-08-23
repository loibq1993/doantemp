<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form class="sidebar-search  " >
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
								<a href="javascript:;" class="btn submit">
									<i class="icon-magnifier"></i>
								</a>
							</span>
                        </div>
                    </form>
                </li>				
                <li class="nav-item start  {{ (Route::currentRouteName() == 'admin_detail')
                             ? 'start active open' : null }}">
                    <a href="{{ route('admin_detail') }}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                	@if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'admin_manager_register')  
								||(Route::currentRouteName() == 'admin_list_manager')
								||(Route::currentRouteName() == 'admin_edit_manager')								
                             ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-group"></i>
							<span class="title"><b>Thành viên BTQ</b></span>
							<span class="arrow {{ (Route::currentRouteName() == 'admin_manager_register')  
												||(Route::currentRouteName() == 'admin_list_manager')
												||(Route::currentRouteName() == 'admin_edit_manager')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item {{ (Route::currentRouteName() == 'admin_manager_register')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/manager_register') }}" class="nav-link ">
									<i class="fas fa-user-plus"></i>
									<span class="title">Thêm người quản lý</span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'admin_list_manager')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/list_manager') }}" class="nav-link ">
									<i class="fas fa-portrait"></i>
									<span class="title">List người quản lý</span>
								</a>
							</li>
						</ul>
					</li>
				@endif
				@if((Auth::guard("admins")->user()->can('show', App\AdminUser::class))
				||(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)))
					<li class="nav-item {{ (Route::currentRouteName() == 'student_account')  
								||(Route::currentRouteName() == 'add_account')	
								||(Route::currentRouteName() == 'listStudentAccount')
								||(Route::currentRouteName() == 'edit_studentaccount')
													
                             ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fas fa-user-graduate"></i>
							<span class="title"><b>Quản lý TK học sinh</b></span>
							<span class="arrow {{ (Route::currentRouteName() == 'student_account')  
								||(Route::currentRouteName() == 'add_account')	
								||(Route::currentRouteName() == 'listStudentAccount')
								||(Route::currentRouteName() == 'edit_studentaccount')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item {{ (Route::currentRouteName() == 'student_account')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/addstudentaccount') }}" class="nav-link ">
									<i class="fas fa-user-plus"></i>
									<span class="title">Tạo tài khoản</span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'listStudentAccount')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/list_student_account') }}" class="nav-link ">
									<i class="fas fa-portrait"></i>
									<span class="title">Danh sách tài khoản </span>
								</a>
							</li>
						</ul>
					</li>
				@endif

				@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'list_student')
										|| (Route::currentRouteName() == 'create_student')
										|| (Route::currentRouteName() == 'edit_student')
										|| (Route::currentRouteName() == 'admin_mail_confirm')
								 ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-graduation-cap"></i>
							<span class="title"><b>Quản lý Học Sinh </b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'list_student')
										|| (Route::currentRouteName() == 'create_student')
										|| (Route::currentRouteName() == 'edit_student')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">
								<li class="nav-item {{ (Route::currentRouteName() == 'create_student')
									? 'start active open' : null }} ">
									<a href="{{ url('/admin/create_student') }}" class="nav-link ">
										<i class="icon-bulb"></i>
										<span class="title">Tạo hồ sơ học sinh</span>
									</a>
								</li>
								<li class="nav-item {{ (Route::currentRouteName() == 'list_student')
								 	? 'start active open' : null }} ">
								<a href="{{ url('/admin/list_student') }}" class="nav-link ">
									<i class="fa fa-book"></i>
									<span class="title">Hồ sơ học sinh</span>
									<span class="selected"></span>
								</a>
								</li>					
								{{-- <li class="nav-item {{ (Route::currentRouteName() == 'admin_mail_confirm')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/mail_confirm') }}" class="nav-link ">
										<i class="fa fa-send"></i>
										<span class="title">Gửi email cho học sinh</span>
									</a>
								</li>  --}}
						</ul>
					</li>
				@endif
				@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'list_teacher')
										|| (Route::currentRouteName() == 'create_teacher')
										|| (Route::currentRouteName() == 'edit_teacher')
										|| (Route::currentRouteName() == 'create_specialize')
										|| (Route::currentRouteName() == 'edit_specialize')
								 ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-address-book"></i>
							<span class="title"><b>Quản lý Giáo viên </b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'list_teacher')
										|| (Route::currentRouteName() == 'create_teacher')
										|| (Route::currentRouteName() == 'edit_teacher')
										|| (Route::currentRouteName() == 'create_specialize')
										|| (Route::currentRouteName() == 'edit_specialize')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">			
							
								<li class="nav-item {{ (Route::currentRouteName() == 'create_specialize')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/create_specialize') }}" class="nav-link ">
										<i class="	fa fa-plus-square"></i>
										<span class="title">Tạo tổ môn</span>
									</a>
								</li>
								<li class="nav-item {{ (Route::currentRouteName() == 'create_teacher')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/create_teacher') }}" class="nav-link ">
										<i class="icon-bulb"></i>
										<span class="title">Tạo hồ sơ giáo viên</span>
									</a>
								</li>
								<li class="nav-item {{ (Route::currentRouteName() == 'list_teacher')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/list_teacher') }}" class="nav-link ">
									<i class="fa fa-book"></i>
									<span class="title">Hồ sơ giáo viên</span>
									<span class="selected"></span>
								</a>
							</li>		
							
						</ul>
					</li>
				@endif
				@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'admin_list_subject')
										|| (Route::currentRouteName() == 'admin_create_subject')
										|| (Route::currentRouteName() == 'admin_edit_subject')
										|| (Route::currentRouteName() == 'add_subject_class')
								 ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-server"></i>
							<span class="title"><b>Quản lý Môn học </b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'admin_list_subject')
										|| (Route::currentRouteName() == 'admin_create_subject')
										|| (Route::currentRouteName() == 'admin_edit_subject')
										|| (Route::currentRouteName() == 'add_subject_class')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">							
							<li class="nav-item {{ (Route::currentRouteName() == 'admin_create_subject')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/create_subject') }}" class="nav-link ">
										<i class="icon-bulb"></i>
										<span class="title">Tạo môn học</span>
									</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'admin_list_subject')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/subject_list') }}" class="nav-link ">
									<i class="fa fa-book"></i>
									<span class="title">Danh sách môn học</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'add_subject_class')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/addsubject') }}" class="nav-link ">
										<i class="fa fa-share-alt"></i>
										<span class="title">Phân môn học</span>
									</a>
							</li>
						</ul>
					</li>
					@endif
					
					<li class="nav-item {{ (Route::currentRouteName() == 'createclasses')
										|| (Route::currentRouteName() == 'listClasses')
										|| (Route::currentRouteName() == 'student_classsave')
										|| (Route::currentRouteName() == 'addschoolyear')
										|| (Route::currentRouteName() == 'addstudentclass')
										|| (Route::currentRouteName() == 'xetlenlop')
										|| (Route::currentRouteName() == 'edit_classes')
										|| (Route::currentRouteName() == 'addterm')
										|| (Route::currentRouteName() == 'edit_term')
										|| (Route::currentRouteName() == 'edit_academic')
										|| (Route::currentRouteName() == 'getHocSinhLop')
										|| (Route::currentRouteName() == 'getsubclass')
										|| (Route::currentRouteName() == 'student_report')
										|| (Route::currentRouteName() == 'getlophs')
								 ? 'start active open' : null }} ">
						@if((Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
						||(Auth::guard("admins")->user()->can('teacher', App\AdminUser::class)))
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-sitemap"></i>
							<span class="title"><b>Quản lý Lớp học </b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'createclasses')
										|| (Route::currentRouteName() == 'listClasses')
										|| (Route::currentRouteName() == 'student_classsave')
										|| (Route::currentRouteName() == 'addschoolyear')
										|| (Route::currentRouteName() == 'addstudentclass')
										|| (Route::currentRouteName() == 'xetlenlop')
										|| (Route::currentRouteName() == 'edit_classes')
										|| (Route::currentRouteName() == 'addterm')
										|| (Route::currentRouteName() == 'edit_term')
										|| (Route::currentRouteName() == 'edit_academic')
										|| (Route::currentRouteName() == 'getHocSinhLop')
										|| (Route::currentRouteName() == 'getsubclass')
										|| (Route::currentRouteName() == 'student_report')
										|| (Route::currentRouteName() == 'getlophs')
								 ? 'open' : null }}"></span>
						</a>
						@endif
						<ul class="sub-menu">					
								@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								<li class="nav-item {{ (Route::currentRouteName() == 'addschoolyear')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/addschoolyear') }}" class="nav-link ">
										<i class="fas fa-school"></i>
										<span class="title">Cập nhật năm học</span>
									</a>
								</li>
								@endif
								@if((Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								||(Auth::guard("admins")->user()->can('teacher', App\AdminUser::class)))
								<li class="nav-item {{ (Route::currentRouteName() == 'addterm')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/addterm') }}" class="nav-link ">
										<i class="	fa fa-paper-plane"></i>
										<span class="title">Cập nhật học kỳ</span>
									</a>
								</li>
								@endif
								@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								<li class="nav-item {{ (Route::currentRouteName() == 'createclasses')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/addclasses') }}" class="nav-link ">
										<i class="fas fa-chalkboard-teacher"></i>
										<span class="title">Tạo mới lớp học</span>
									</a>
								</li>
								@endif
								@if((Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								||(Auth::guard("admins")->user()->can('teacher', App\AdminUser::class)))
								<li class="nav-item {{ (Route::currentRouteName() == 'listClasses') || (Route::currentRouteName() == 'admin_detail')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_classes') }}" class="nav-link ">
										<i class="far fa-file-alt"></i>
										<span class="title">Danh sách lớp học</span>
									</a>
								</li>
								@endif
								@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								<li class="nav-item {{ (Route::currentRouteName() == 'addstudentclass')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/addstudentclass') }}" class="nav-link ">
										<i class="fa fa-child"></i>
										<span class="title">Phân lớp học sinh</span>
									</a>
								</li> 
								<li class="nav-item {{ (Route::currentRouteName() == 'xetlenlop')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/xetlenlop') }}" class="nav-link ">
										<i class="fa fa-group"></i>
										<span class="title">Xét lên lớp</span>
									</a>
								</li> 
								<li class="nav-item {{ (Route::currentRouteName() == 'student_report')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/student_report') }}" class="nav-link ">
										<i class="fa fa-graduation-cap"></i>
										<span class="title">Lịch sử học tập của học sinh</span>
									</a>
								</li>
								@endif
						</ul>
					</li>


					<li class="nav-item {{ (Route::currentRouteName() == 'listSchoolrecord')
										|| (Route::currentRouteName() == 'CreateStudentReport')
										|| (Route::currentRouteName() == 'listupdateSchoolrecord')
										|| (Route::currentRouteName() == 'Updateconduct')
										|| (Route::currentRouteName() == 'editConduct')
										|| (Route::currentRouteName() == 'Detailschoolreport')
										
								 ? 'start active open' : null }} ">
						@if((Auth::guard("admins")->user()->can('teacher', App\AdminUser::class))
						||(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)))
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-book"></i>
							<span class="title"><b>Quản lý Học bạ</b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'listSchoolrecord')
							|| (Route::currentRouteName() == 'CreateStudentReport')
							|| (Route::currentRouteName() == 'listupdateSchoolrecord')
							|| (Route::currentRouteName() == 'Updateconduct')
							|| (Route::currentRouteName() == 'editConduct')
							|| (Route::currentRouteName() == 'Detailschoolreport')
								 ? 'open' : null }}"></span>
						</a>
						@endif
						<ul class="sub-menu">
							@if((Auth::guard("admins")->user()->can('teacher', App\AdminUser::class))
							||(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)))
								<li class="nav-item {{ (Route::currentRouteName() == 'listSchoolrecord')
								|| (Route::currentRouteName() == 'admin_detail')
									? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_school_record') }}" class="nav-link ">
										<i class="fa fa-book"></i>
										<span class="title">Danh sách học bạ</span>
										<span class="selected"></span>
									</a>
								</li>					
							@endif
							@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								<li class="nav-item {{ (Route::currentRouteName() == 'CreateStudentReport')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_add_student_report') }}" class="nav-link ">
										<i class="icon-bulb"></i>
										<span class="title">Tạo học bạ</span>
									</a>
								</li>
								@endif
								@if((Auth::guard("admins")->user()->can('teacher', App\AdminUser::class))
								||(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)))
								<li class="nav-item {{ (Route::currentRouteName() == 'listupdateSchoolrecord')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_update_student_report') }}" class="nav-link ">
										<i class="fas fa-edit"></i>
										<span class="title">Cập nhật học bạ</span>
									</a>
								</li>
								@endif
								{{-- @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								<li class="nav-item {{ (Route::currentRouteName() == 'Updateconduct')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/create_conduct') }}" class="nav-link ">
										<i class="fas fa-book-reader"></i>
										<span class="title">Cập nhật hạnh kiểm</span>
									</a>
								</li>
								@endif --}}
						</ul>
					</li>
					

					
					<li class="nav-item {{ (Route::currentRouteName() == 'typingPoint')
										|| (Route::currentRouteName() == 'lockPoint')
										|| (Route::currentRouteName() == 'yearPoint')
								 ? 'start active open' : null }} ">
						@if((Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
						||(Auth::guard("admins")->user()->can('teacher', App\AdminUser::class)))
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-calculator"></i>
							<span class="title"><b>Quản lý Điểm</b></span>
							<span class="selected"></span>
							<span class="arrow {{(Route::currentRouteName() == 'typingPoint')
										|| (Route::currentRouteName() == 'lockPoint')
										|| (Route::currentRouteName() == 'yearPoint')
								 ? 'open' : null }}"></span>
						</a>
						@endif
						<ul class="sub-menu">
								@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))			
								<li class="nav-item {{ (Route::currentRouteName() == 'lockPoint')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/lockpoint') }}" class="nav-link ">
										<i class="fas fa-edit"></i>
										<span class="title">Mở/Khóa chức năng Nhập điểm</span>
									</a>
								</li>
								@endif
								@if((Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								||(Auth::guard("admins")->user()->can('teacher', App\AdminUser::class)))
								<li class="nav-item {{ (Route::currentRouteName() == 'typingPoint')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/typingpoint') }}" class="nav-link ">
										<i class="fas fa-bullhorn"></i>
										<span class="title">Cập nhật điểm học kỳ</span>
									</a>
								</li>
								@endif
								{{-- @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
								<li class="nav-item {{ (Route::currentRouteName() == 'yearPoint')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/point_year') }}" class="nav-link ">
										<i class="fas fa-bullhorn"></i>
										<span class="title">Cập nhật điểm cả năm</span>
									</a>
								</li>
								@endif --}}
						</ul>
					</li>
					@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'createBonus')
										|| (Route::currentRouteName() == 'listBonus')
								 ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-flash"></i>
							<span class="title"><b>Quản lý KTKL</b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'createBonus')
										|| (Route::currentRouteName() == 'listBonus')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">				
								<li class="nav-item {{ (Route::currentRouteName() == 'createBonus')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/create_bonus') }}" class="nav-link ">
										<i class="icon-bulb"></i>
										<span class="title">Tạo mới KTKL</span>
									</a>
								</li>
								<li class="nav-item {{ (Route::currentRouteName() == 'listBonus')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_bonus') }}" class="nav-link ">
										<i class="fas fa-print"></i>
										<span class="title">Danh sách KTKL</span>
									</a>
								</li>
								<li class="nav-item {{ (Route::currentRouteName() == 'listBonus')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_add_bodis') }}" class="nav-link ">
										<i class="fa fa-certificate"></i>
										<span class="title">Tạo KTKL học sinh</span>
									</a>
								</li>
								<li class="nav-item {{ (Route::currentRouteName() == 'listBonus')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_student_bodis') }}" class="nav-link ">
										<i class="fa fa-gavel"></i>
										<span class="title">Hồ sơ KTKL học sinh</span>
									</a>
								</li>
							</ul>
					</li>
					@endif
					@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'createCertificate')
										|| (Route::currentRouteName() == 'listCertificatetemp')
										|| (Route::currentRouteName() == 'addsct')	
										|| (Route::currentRouteName() == 'Manage_certificate')
										|| (Route::currentRouteName() == 'sctemp')	
								 ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-credit-card"></i>
							<span class="title"><b>Quản lý chứng nhận TN</b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'createCertificate')
										|| (Route::currentRouteName() == 'listCertificatetemp')
										|| (Route::currentRouteName() == 'addsct')	
										|| (Route::currentRouteName() == 'Manage_certificate')	
										|| (Route::currentRouteName() == 'sctemp')			
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">				
							
								<li class="nav-item {{ (Route::currentRouteName() == 'addsct')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/addsct') }}" class="nav-link ">
										<i class="far fa-sticky-note"></i>
										<span class="title">Tạo chứng nhận TN tạm thời</span>
									</a>
								</li> 
								<li class="nav-item {{ (Route::currentRouteName() == 'listCertificatetemp')
									 ? 'start active open' : null }} ">
									<a href="{{ url('/admin/list_certificate_temp') }}" class="nav-link ">
										<i class="fas fa-parachute-box"></i>
										<span class="title">Danh sách chứng nhận TN</span>
									</a>
								</li> 
						
						</ul>
					</li>
					@endif

					@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
					<li class="nav-item {{ (Route::currentRouteName() == 'addtransfer')
										|| (Route::currentRouteName() == 'dieuchuyenlop')
										|| (Route::currentRouteName() == 'list_transform')
										|| (Route::currentRouteName() == 'formdc')
										|| (Route::currentRouteName() == 'detail_transform')
										|| (Route::currentRouteName() == 'receive_student')
										|| (Route::currentRouteName() == 'transfer_school')
										|| (Route::currentRouteName() == 'form_transfer_school')
										|| (Route::currentRouteName() == 'list_transform_school')
										|| (Route::currentRouteName() == 'detail_transform_school')
										|| (Route::currentRouteName() == 'dieuchuyentruong')
								 ? 'start active open' : null }} ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-share"></i>
							<span class="title"><b>Quản lý Điều chuyển</b></span>
							<span class="selected"></span>
							<span class="arrow {{ (Route::currentRouteName() == 'addtransfer')
										|| (Route::currentRouteName() == 'dieuchuyenlop')
										|| (Route::currentRouteName() == 'list_transform')
										|| (Route::currentRouteName() == 'formdc')
										|| (Route::currentRouteName() == 'detail_transform')
										|| (Route::currentRouteName() == 'receive_student')
										|| (Route::currentRouteName() == 'transfer_school')
										|| (Route::currentRouteName() == 'form_transfer_school')
										|| (Route::currentRouteName() == 'list_transform_school')
										|| (Route::currentRouteName() == 'detail_transform_school')
										|| (Route::currentRouteName() == 'dieuchuyentruong')
								 ? 'open' : null }}"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item {{ (Route::currentRouteName() == 'addtransfer')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/addtransferstudent') }}" class="nav-link ">
									<i class="fa fa-plus-square"></i>
									<span class="title">Tạo phiếu điều chuyển lớp</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'list_transform')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/list_transform_student') }}" class="nav-link ">
									<i class="fas fa-paste"></i>
									<span class="title">Quản lý phiếu điều chuyển lớp</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'dieuchuyenlop')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/dieuchuyenlop') }}" class="nav-link ">
									<i class="fa fa-book"></i>
									<span class="title">Điều chuyển lớp học sinh</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'receive_student')
								 ? 'start active open' : null }} ">
								<a href="{{ url('/admin/tiepnhanhs') }}" class="nav-link ">
									<i class="fa fa-mail-forward"></i>
									<span class="title">Học sinh chuyển đến</span>
									<span class="selected"></span>
								</a>
							</li>					
							<li class="nav-item {{ (Route::currentRouteName() == 'transfer_school')
								? 'start active open' : null }} ">
								<a href="{{ url('/admin/transfer_student_school') }}" class="nav-link ">
									<i class="fa fa-bank"></i>
									<span class="title">Tạo phiếu điều chuyển trường</span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'list_transform_school')
									? 'start active open' : null }} ">
								<a href="{{ url('/admin/list_transform_school') }}" class="nav-link ">
									<i class="fa fa-clone"></i>
									<span class="title">Quản lý phiếu điều chuyển trường</span>
								</a>
							</li>
							<li class="nav-item {{ (Route::currentRouteName() == 'dieuchuyentruong')
									? 'start active open' : null }} ">
								<a href="{{ url('/admin/dieuchuyentruong') }}" class="nav-link ">
									<i class="fas fa-atom"></i>
									<span class="title">Điều chuyển trường</span>
								</a>
							</li>
						</ul>
					</li>
				@endif
				@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
				<li class="nav-item {{ (Route::currentRouteName() == 'createpost')
                                    ||(Route::currentRouteName() == 'admin_list_posts')                                    
                             ? 'start active open' : null }} ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-files-o"></i>
                        <span class="title"><b>Quản lý Bài viết </b></span>
                        <span class="selected"></span>
                        <span class="arrow {{ (Route::currentRouteName() == 'admin_list_posts')
                                    ||(Route::currentRouteName() == 'createpost')
                             ? 'open' : null }}"></span>
                    </a>
                    <ul class="sub-menu">
						<li class="nav-item {{ (Route::currentRouteName() == 'admin_list_posts')
							 ? 'start active open' : null }} ">
							<a href="{{ url('/admin/posts/list') }}" class="nav-link nav-toggle">
								<i class="icon-docs"></i>
								<span class="title">Danh Sách bài viết </span>                                                
							</a>                   
						</li>									
						<li class="nav-item {{ (Route::currentRouteName() == 'createpost')
							 ? 'start active open' : null }} ">
							<a href="{{ url('/admin/posts/create') }}" class="nav-link ">
								<i class="fas fa-marker"></i>
								<span class="title">Tạo mới bài viết</span>
							</a>
						</li>                 
                    </ul>
                </li>
				@endif
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            @include('admindetail.layouts.pagebar')
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
