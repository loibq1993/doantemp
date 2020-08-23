@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id = "left-search1">
	<div class="row">
		<h5>Thông tin cần tìm kiếm</h5>
		<div class="col-sm-12">
			@if(session()->has('message'))
			<div class="alert alert-danger">
				<span >{{ session()->get('message') }}</span>
			</div>
			@endif
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">
				{{ $error }}
			</div>
			@endforeach
			<form action="{{ route('studentinfo') }}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group-email" style="text-align: center;margin-top: 10px" >
					<span class="label-input100" style="color: #194d58;"><i class="fa fa-address-card" style="font-size: 20px;"></i> Mã học sinh</span>
					<input type="number" class="form-control placeholder-no-fix" name="user_id" placeholder="Mã học sinh" style=" margin-top: 8px;">
				</div>
				<div class="form-group-email" style="text-align: center;margin-top: 20px" >
					<span class="label-input100" style="color: #194d58;"><i class="fa fa-paper-plane-o" style="font-size: 20px"></i> Mật khẩu</span>
					<input type="password" class="form-control placeholder-no-fix" name="password" placeholder="Mật khẩu" style="margin-top: 8px;">
				</div>
				<div class="container-fluid" style="text-align: center;margin-top: 20px">
						<div class="col-xs-12 text-center form-register">
							<button type="submit" class="btn btn-primary" style="border-radius: 5px;">Xem</button>
						</div>
				</div>
				<div style="height: 20px;"></div>
				<div class="forget-password">
					<h4 style="font-family: Roboto">Bạn quên/muốn đổi mật khẩu?</h4>
					<p style="font-family: Roboto">  Nhấn <a href="{{'/forgetpass'}}">vào đây</a> để đổi/lấy lại mật khẩu. </p>
				</div>
			</form>
		</div>	
	</div>
</div>
<div id = "right-search">
	<h10>Thông tin học sinh</h10>
	<p style="color: #000000;font-size:12pt; font-family: Roboto">*Lưu ý: Trường hợp học sinh bị sai thông tin. Liên hệ phòng 6 - Khu A, hoặc gửi mail về địa chỉ: 
		<a href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-THPT-Nguy%E1%BB%85n-Khuy%E1%BA%BFn-V%C4%A9nh-B%E1%BA%A3o-H%E1%BA%A3i-Ph%C3%B2ng-Cs2-534273963261510/">tiepnhanhsthptnk@gmail.com</a></p>

		@if (@isset($student) && $student != null)
		<form style="margin-top: 25px" action="{{ route('getstudentinfo') }}" method="post" enctype="multipart/form-data" 
				id="studentinfo" class="form-horizontal">
				{{ csrf_field() }}
			<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
				<div class="form-group">
					<label class="control-label col-md-4">Mã học sinh: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" readonly value="{{$student->id}}" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Tên học sinh: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" readonly value="{{$student->name}}"/>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-4">Giới tính: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" @if($student->gender == 0) value="Nam"
						@elseif ($student->gender == 1) value="Nữ" @endif readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Ngày sinh</label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" 
						 value="{{Illuminate\Support\Carbon::parse($student->date_of_birth)->format('d-m-Y')}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Email: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->e_mail}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Địa chỉ: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->address}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Nơi sinh: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->born_place}}" readonly>
					</div>
				</div>
			</div>

			<div class="col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;"> 
				
				<div class="form-group">
					<label class="control-label col-md-4">Điện thoại bố(mẹ): </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->phone_of_parents}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Tên bố: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->name_of_dad}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Nghề nghiệp bố: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->father_job}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Tên mẹ: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->name_of_mom}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Nghề nghiệp mẹ: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" value="{{$student->mother_job}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Dân tộc: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" readonly value="{{$student->folk->name}}" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Con thương binh, liệt sĩ: </label>
					<div class="col-md-6">
						<input style="font-size: 12pt" class="form-control" @if($student->veteran == 0) value="Không"
						@elseif ($student->veteran == 1) value="Có" @endif readonly>
					</div>
				</div>
			</div>
		</form>
		
		@endif
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	