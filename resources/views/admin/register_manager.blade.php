@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_place.js')}}"></script>
    <div class="col-md-10">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Đăng Kí Tài Khoản Manager</span>
                </div>
            </div>
			@if(session()->has('message'))
				<div class="alert alert-info">
					<span style="color: blue">{{ session()->get('message') }}</span>
				</div>
			@endif
            <div class="portlet-body form">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $error }}</div>
                @endforeach
                <form  action="{{ url('/admin/manager_register') }}" method="POST" class="register-form">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="single" class="control-label">Chọn Role:</label>						
						<select id="admin_role" name="admin_role" class="form-control">
							@foreach($roles as $index => $role)
								<option value="{{ $role->id }}">
									{{ $role->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="control-label"><i class="icon-require">*</i> Họ Tên:</label>
						<div class="input-icon">
							<i class="fa fa-user"></i>
							<input class="form-control" type="text" id="username" name="username" style="text-transform: capitalize;" maxlength="100"/> 
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
							<input class="form-control" type="password" id="register_password" name="password" maxlength="70"/> 
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
					<div class="form-group">
						<label class="control-label"><i class="icon-require">*</i> Số Phone: </label>
						<div class="input-icon">
							<i class="fas fa-phone"></i>
							<input class="form-control" type="text" id="phone" name="phone" maxlength="12"/> 
						</div>
										
					</div>					
					<div class="form-group">
						<label class="control-label"><i class="icon-require">*</i> Ngày Sinh: </label>
						<div class="input-icon">
							<i class="fas fa-calendar-alt"></i>
							<input class="form-control" type="date" id="birthday" name="birthday" maxlength="10"/> 
						</div>											
					</div>					
					<div class="form-group">
						<label class="control-label">Giới Tính: </label>
						<div class="input-icon">
							<i class="fas fa-restroom"></i>
							<select class="form-control" id="gender" name="gender">
								@foreach(Illuminate\Support\Facades\Config::get('constant.user_gender') as $index => $gender)
										<option value="{{ $gender }}"  @if(@isset(session()->get( 'data' )['gender']) && session()->get( 'data' )['gender'] == $gender) selected @endif>
												{{$gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')? 'Nam':'Nữ'}}
										</option>
								@endforeach
						</select>
						</div>
					</div>	
					<div class="form-actions">
						<button type="submit" class="btn btn-primary pull-right"> Đăng Ký </button>
					</div>
				</form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection