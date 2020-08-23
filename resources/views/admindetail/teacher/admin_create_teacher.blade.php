@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

	<h3 class="page-title"><strong>Tạo Hồ Sơ Giáo viên</strong></h3>
			@if(session()->has('message'))
				<div class="alert alert-info">
					<span style="color: blue">{{ session()->get('message') }}</span>
				</div>
			@endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $error }}</div>
                @endforeach
                <form  action="{{ url('/admin/create_teacher_save') }}" method="POST" enctype="multipart/form-data"  class="form-horizontal">
					{{ csrf_field() }}
					<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Mã Giáo Viên:</label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="id" name="id" maxlength="100"/> 
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Họ Tên Giáo Viên:</label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="name_teacher" name="name_teacher" style="text-transform: capitalize;" maxlength="100"/> 
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Địa chỉ:</label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="address" name="address" style="text-transform: capitalize;" maxlength="200"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> SĐT:</label>
							<div class="col-md-6">
								<input class="form-control" type="number" id="phone_number" name="phone_number" maxlength="10"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Email:</label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="e_mail" name="e_mail" maxlength="190"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Giới Tính: </label>
							<div class="col-md-6">
								<select class="form-control" id="gender" name="gender" style="text-transform: capitalize;">
									@foreach(Illuminate\Support\Facades\Config::get('constant.user_gender') as $index => $gender)
											<option value="{{ $gender }}"  @if(@isset(session()->get( 'data' )['gender']) && session()->get( 'data' )['gender'] == $gender) selected @endif>
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
								<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" maxlength="10">
							</div>							
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Tổ môn: </label>
							<div class="col-md-6">
								<select id="specialize" name="specialize_id" style="text-transform: capitalize;" class="form-control">
								@foreach($specialize_id as $special)
								<option value="{{$special->id}}">{{$special->name}}</option>
								@endforeach
								</select>
							</div>			
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> CMND</label>
							<div class="col-md-6">
								<input class="form-control" type="number" name="CMND" id="CMND" maxlength="12">
							</div>
						</div>								
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require"></i> Giáo viên chủ nhiệm: </label>
							<div class="col-md-6">
								<select class="form-control" id="level" name="level">
									<option value="0">Không</option>
									<option value="1">Có</option>
								</select>
							</div>			
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require"></i> Trạng thái: </label>
							<div class="col-md-6">
								<select class="form-control" id="teacher_status" name="teacher_status">
									<option value="0">Hoạt động</option>
									<option value="1">Ngưng hoạt động</option>
									<option value="2">Nghỉ hưu</option>
								</select>
							</div>
						</div>
					</div>							
					<div class="container-fluid">										
						<div class="col-xs-12 text-center form-register" style="margin-bottom: 10px;">
							<br style="clear: left;" />	
							<button type="submit" class="btn btn-info">Thêm mới</button>
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
@endsection
