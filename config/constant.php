<?php
/**
 * Created by PhpStorm.
 * User: tungpham
 * Date: 12/02/2019
 * Time: 20:57
 */
return [
    'user_status' => [
        'user_active' => 1,
        'user_inactive' => 2
    ],
    'is_active' => [
        'is_active' => 0,
        'is_active' => 1
    ],

    'image_size' => [
        'width' => 450,
        'height' => 600,
        'max_size' => 307200
    ],
	
	'member_status' => [
        'act' => 'Hoạt động',
        'stop' => 'Ngưng hoạt động'
    ],

    'admin_type' => [
        'admin' => 'Admin',
        'manager'=>'Manager',
        'teacher' => 'Teacher'
    ],

    'role_slug' => [
        'admin' => 'admins',
        'manager'=>'managers',
        'teacher' => 'teachers'
    ],

    'join_in_course_status' => [
        'active' => 1,
        'inactive0' => 2,
        'inactive1' => 3,
    ],
    'join_in_course_status_text' => [
        'active' => 'Đã tham gia khóa học',
        'inactive0' => 'Chưa tham gia khóa học',
        'inactive1' => 'Sẽ tham gia khóa học',
    ],

    'course_status_text' => [
        'active' => 'Còn hiệu lực',
        'inactive' => 'Hết hiệu lực',
    ],

    'user_gender' => [
        'male' => 0,
        'female' => 1
    ],

    'course_type' => [
        'normal' => 1,
        'summer_course' => 2        
    ],

    'course_type_name' => [
        'normal' => 'Ngắn hạn',
        'summer_course' => 'Mùa hè',
        'not_define' => 'Chưa xác định'
    ],

    'export_data_course' => [
        'all' => 'Toàn Bộ',
        'place_lv1' => 'Theo Tỉnh',
        'place_lv2' => 'Theo Địa Điểm',
    ],

	'post_type' => [
		'post' => 1,
		'notify' => 2
    ],
    'post_type_name' => [
        'post' => 'Bài viết',
        'notify' => 'Thông báo'
    ],
	'post_status' => [
		'show' => 0,
		'hidden' => 1
    ],
	'post_status_name' => [
        'show' => 'Đăng',
        'hidden' => "Ẩn"
    ],
	'export_diligent_user' => [
        'yearly' => 'Theo Năm',
        'monthly' => 'Theo Tháng',
        'quarterly' => 'Theo Quý',
    ],
	'member_join_status' => [
        'joined' => 'Đã đăng ký',
        'not_join' => "Chưa đăng ký"
    ],

    'vehicle_type' => [
        '45' => '45 chỗ',
        '35' => "35 chỗ",
        '29' => '29 chỗ',
        '16' => '16 chỗ',
        '7'  => '7 chỗ'
    ],

    'vehicle_is_share' => [
        'share' => 1,
        'not_share' => 0
    ],
    'vehicle_share_status' => [
        'share' => "Ghép xe",
        'not_share' => "Không ghép"
    ],
    'place2_master' => [
        'yes' => 1,
        'no' => 0
    ],
    'confirm_join' => [
        'first_ok' => 1,
        'second_ok' => 1,
        'third_ok' => 1,
        'cancel_no' => 0,
        'cancel_ok' => 1
    ],

    'is_by_yourself_text' => [
        'no' => "Đi cùng CLB",
        'yes' => "Đi tự túc"
    ],

    'move_type_text' => [
        'two_way' => "2 chiều: cả đi và về",
        'one_way1' => "1 chiều: từ nhà lên chùa",
        'one_way2' => "1 chiều: từ chùa về nhà"
    ],

    'pick_point_not_regis_id' => 'pick100',

	'from_email' => 'thptnguyenkhuyen@gmail.com',
	
    'regex_email' => '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',

    'regex_phone' => '/^\+?\d{0,13}/',
	
	'rows_per_page' => 30,
    'total_post_master' => 680,

    'confirm_email' => 'Vui lòng kiểm tra email xác nhận.',

    'login_fails' => 'Sai mật khẩu hoặc tài khoản',

    'account_not_exist' => 'Tài khoản không tồn tại',

    'place_not_exist' => 'Địa điểm khu vực chưa tồn tại. Vui lòng liên hệ với Admin.',

    'account_exist' => 'Tài khoản đã tồn tại',

    'email_exist' => 'Email đã tồn tại',

    'academic_exist' => ' Năm học này đã tồn tại',

    'validate_required' => '* Đây là trường bắt buộc',

    'format_email_invalid' => '* Định dạng email chưa chính xác',

    'format_phone_invalid' => 'Bạn cần nhập số điện thoại hợp lệ',

    'avatar_invalid' => 'Ảnh đại diện chưa được chọn',

    'format_number_invalid' => 'Vui lòng chỉ nhập số',

    'password_invalid' => 'Xác nhận mật khẩu không chính xác',

    'select_invalid' => 'Giá trị không đúng',

    'validate_date' => 'Chỉ nhập kiểu ngày tháng',

    'check_date_now' => 'Vui lòng chỉ chọn lớn hơn ngày hiện tại',

    'greaterThan' => 'Vui lòng chọn ngày kết thúc lớn hơn ngày bắt đầu.',

    'place_exist' => 'Tên địa điểm đã tồn tại.',

    'maxlength20' => 'Không nhập quá 20 ký tự',

	'no_data' => 'Chưa có thông tin',

    'format_number_day' => 'Vui lòng nhập ngày đúng',

    'format_number_month' => 'Vui lòng nhập tháng đúng',

    'format_number_year' => 'Năm sinh chưa phù hợp với khóa tu',

    'dang_ky_ktmh' => 'Đăng Ký Khóa Tu',

    'remove_fail' => 'Không tìm thấy thông tin phù hơp với bạn. Hãy thử lại',

    'remove_inactive' => 'thông tin của bạn đã hủy',
	
	'data_not_found' => 'Không tìm thấy dữ liệu phù hợp.',
	
	'create_success_mesg' => 'Đăng ký thông tin thành công.',
	'create_fail_mesg' => 'Đăng ký thông tin thất bại.',
	'update_success_mesg' => 'Cập nhật thông tin thành công.',
	'update_fail_mesg' => 'Cập nhật thông tin thất bại.',
    'register_duplicate_mesg' => "Bạn đã đăng ký tham gia khóa tu này rồi.",
    'process_error__mesg' => 'Đã xảy ra lỗi trong quá trình xử lý. Vui lòng thử lại.',
    'cancel_join_course_mesg_success' => 'Bạn đã hủy thành công. Hẹn gặp lại bạn ở các khóa tu tiếp theo của CLB !',

    'not_found_course_valid' => 'Chưa tìm thấy khóa tu hợp lệ.',
    'check_required_data_not_input' => 'Kiểm tra lại các dữ liệu bắt buộc.',
];
