<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reset mật khẩu</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/adminlte/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin-custom.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="register-logo">
        <a href="{{ url('/admin/forget_password') }}"><b>Quên Mật khẩu</b></a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Nhập Email xác nhận</p>
        @foreach ($errors->all() as $error)
            <span class="show-error-data">{{ $error }}</span>
        @endforeach
        <form action="{{ url('/admin/forget_password') }}" method="POST" id="forget-form">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="text" class="form-control" data-validation="required" placeholder="Tài khoản email"
                       id="email" name="email">
                @if($errors->has('email') and $errors->first("email") == Illuminate\Support\Facades\Config::get('constant.account_not_exist'))
                    <div style="color: red">{{ $errors->first("email") }}</div>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback" style="top:3px !important;"></span>
            </div>
            <div class=container-fluid">
                <div class="col-xs-12 text-center">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
                @if(session()->get( 'data' ) != NULL)
                    <p class="icon-require">{{ session()->get( 'data' ) }}</p>
                @endif
            </div>
        </form>

        <a href="{{ url('/admin/login') }}" class="text-center">Đăng nhập</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $("#forget-form").validate({
            rules: {
                email: {
                    required: true,
                }
            },
            messages: {
                email: {
                    required: "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}"
                }
            }
        });
    });
</script>
</body>
</html>
