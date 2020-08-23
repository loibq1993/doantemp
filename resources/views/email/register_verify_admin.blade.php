<p>Bạn đã đăng ký tài khoản thành công trên hệ thống:</p>
<p>Đây là thông tin tài khoản:</p>
<p>Email: {{ $data['email'] }}</p>
<p>Tên: {{ $data['user_name'] }}</p>
<p>Password: {{ $data['password'] }}</p>
<p>Click vào link để active tài khoản: {{ url()->current()."/verify_account?register_token=".$data['register_token'] }} </p>
