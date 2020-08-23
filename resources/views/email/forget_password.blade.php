<p>Trân trọng cảm ơn quý phật tử đã tham gia là thành viên của chùa ba vàng</p>
<p>Đây là thông tin link reset mật khẩu của tài khoản:</p>
<p>Tài khoản: {{ $data['email'] }}</p>
<p>Click vào link để đến trang reset mật khẩu: {{ url()->current()."/verify_password?register_token=".$data['register_token'] }} </p>
