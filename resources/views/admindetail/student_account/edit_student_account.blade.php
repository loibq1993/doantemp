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
            <div>
                <p style="font-size: 15pt"><b>CHỈNH SỬA TÀI KHOẢN HỌC SINH</b></p>
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
				@if (@isset($account) && $account != null)	
                <form  action="{{ url('/admin/edit_studentaccount') }}" method="POST" class="register-form">
					{{ csrf_field() }}
					<input type="hidden" name="account_id" value="{{$account->id}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label">Tên học sinh: </label>
                            <div class="input-icon">
                                <i class=" far fa-id-badge"></i>
                                <input type="text" class="form-control" id="name" name="name" value="{{$account->name_user}}" readonly>
                            </div>                          
						</div>
                        <div class="form-group"> 
                            <label for="single" class="control-label">Mã tài khoản: </label>
                            <div class="input-icon">
                                <i class="fas fa-user-circle"></i>
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{$account->user_id}}" readonly>
                            </div>                          
						</div>
                        <div class="form-group">
                            <label class="control-label">Password:</label>
                            <div class="input-icon">
                                <i class="fa fa-key"></i>
                                <input class="form-control" type="password" id="password" name="password" value="123456" /> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email:</label>
                            <div class="input-icon">
                                <i class="far fa-envelope"></i>
                                <input class="form-control" type="text" id="email" name="email" value="{{$account->email}}" maxlength="100" /> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Trạng thái: </label>
                            <div class="input-icon">
                                <i class="far fa-grin-beam"></i>
								<select class="form-control" id="is_active" name="is_active">
									<option value="1" @if ($account->is_active == 1) selected @endif>Hoạt động</option>
									<option value="0" @if ($account->is_active == 0) selected @endif>Không hoạt động</option>
								</select>
                            </div>          
                        </div>                       
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-right"> Cập nhật </button>
                        </div>
				</form>
				@endif
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection
