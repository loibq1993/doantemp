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

	<h3 class="page-title"><strong>Chỉnh Sửa Hồ Sơ Giáo viên</strong></h3>
			@if(session()->has('message'))
				<div class="alert alert-info">
					<span style="color: blue">{{ session()->get('message') }}</span>
				</div>
			@endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $error }}</div>
                @endforeach
                @if (@isset($teacher) && $teacher != null)	
	                <form  action="{{ url('/admin/edit_teacher') }}" method="POST" class="form-horizontal">
						{{ csrf_field() }}
						<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
						<input type="hidden" name="teacher_id" value="{{$teacher->id}}">
							@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
							<div class="form-group"> 
								<label for="single" class="control-label col-md-3">ID: </label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="id" name="id" value="{{$teacher->id}}" readonly>
								</div>							
							</div>	
							@endif					
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Họ tên Giáo viên:</label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="name_teacher" name="name_teacher" value="{{$teacher->name_teacher}}" maxlength="50"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Địa chỉ:</label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="address" name="address" value="{{$teacher->address}}" maxlength="200"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> SĐT:</label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="phone_number" name="phone_number" value="{{$teacher->phone_number}}" maxlength="12"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Email:</label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="e_mail" name="e_mail" value="{{$teacher->e_mail}}" maxlength="190"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Giới Tính: </label>
								<div class="col-md-6">
									<select class="form-control" id="gender" name="gender">
										@foreach(Illuminate\Support\Facades\Config::get('constant.user_gender') as $index => $gender)
												<option value="{{ $gender }}"  @if($teacher->gender == $gender) selected @endif>
												{{$gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')? 'Nam':'Nữ'}}
												</option>
										@endforeach
								</select>
								</div>
							</div>
						</div>
						<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">	
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Ngày Sinh: </label>
								<div class="col-md-6">
									<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="{{$teacher->date_of_birth}}"maxlength="10"/>
								</div>							
							</div>	
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Tổ môn: </label>
								<div class="col-md-6">
									<select id="specialize" name="specialize_id" class="form-control">
									@foreach($specialize_id as $special)
									<option 
									@if($teacher->specialize->id == $special->id)
									{{"selected"}}
									@endif
									value="{{$special->id}}">{{$special->name}}</option>
									@endforeach
									</select>
								</div>				
							</div>										
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> CMND: </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="CMND" name="CMND" value="{{$teacher->CMND}}"  maxlength="12"/> 
								</div>				
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require"></i> Giáo viên chủ nhiệm</label>
								<div class="col-md-6">
									<select class="form-control" id="level" name="level">
										<option value="0" @if ($teacher->level == 0) selected @endif> Không</option>
										<option value="1" @if ($teacher->level == 1) selected @endif> Có</option>
									</select> 
								</div>		
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require"></i> Trạng thái </label>
								<div class="col-md-6">
									<select class="form-control" id="teacher_status" name="teacher_status">
										<option value="0" @if ($teacher->teacher_status == 0) selected @endif> Hoạt động</option>
										<option value="1" @if ($teacher->teacher_status == 1) selected @endif> Ngưng hoạt động</option>
										<option value="2" @if ($teacher->teacher_status == 2) selected @endif> Nghỉ hưu</option>
									</select> 
								</div>				
							</div>
						</div>							
						<div class="container-fluid">										
							<div class="col-xs-12 text-center form-register" style="margin-bottom: 10px;">
								<br style="clear: left;" />	
								<button type="submit" class="btn btn-warning">Cập nhật</button>
								&emsp;&emsp;
								<a href="{{ url('/admin/list_teacher')}}">
									<button type="button" class="btn btn-info" >Xem danh sách</button>
								</a>
							</div>
						</div>
						<br style="clear: left;" />
						<br style="clear: left;" />
						<br style="clear: left;" />
					</form>
				@endif
@endsection
