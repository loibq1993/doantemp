<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>THPTNguyenKhuyen Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('/assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="{{ url('/admin/register') }}" method="post" style="display: block !important;">
        {{ csrf_field() }}
        <h3>Đăng Kí Tài Khoản Admin</h3>
        @if(session()->has('message'))
			<div class="alert alert-info">
				<span style="color: blue">{{ session()->get('message') }}</span>
			</div>
		@endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span> {{ $error }} </span>
            </div>
        @endforeach
        <div class="form-group">
			<label class="control-label"><i class="icon-require">*</i> Username:</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control" type="text" id="username" name="username" maxlength="100"/> 
			</div>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label"><i class="icon-require">*</i> Email:</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control" type="text" id="email" name="email" maxlength="190"/> 
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><i class="icon-require">*</i> Password:</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control" type="password" id="register_password" name="password" maxlength="70" /> 
			</div>
		</div>
		<div class="form-group">
			<label class="control-label"><i class="icon-require">*</i> Nhập lại Password:</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control" type="password" id="rpassword" name="rpassword" maxlength="70"/> 
				</div>
			</div>
		</div>			
		<div class="form-actions">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button type="submit" class="btn btn-primary pull-right" 
            style="color: rgb(255, 255, 255) ;background-color: #3265d2 ; border-color: #3265d2">Đăng Ký</button>
			<a href="{{route('admin_home')}}">
                <button type="button" name="login" class="btn btn-transparent"
                style="color: rgb(255, 255, 255) ;background-color: #3265d2 ; border-color: #3265d2">Đăng nhập</button>
            </a>
		</div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">  THPT Nguyen Khuyen - Admin. </div>
<!-- END COPYRIGHT -->
<!--[if lt IE 9]>
<script src="{{ asset('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{ asset('/assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('/assets/pages/scripts/login-4.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>