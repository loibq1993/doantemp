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
			<form action="{{ route('xemdiem') }}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group-email" style="text-align: center;margin-top: 10px" >
					<span class="label-input100" style="color: #194d58;"><i class="fa fa-address-card" style="font-size: 20px;"></i> Mã học sinh</span>
					<input type="number" class="form-control placeholder-no-fix" id="user_id" name="user_id" placeholder="Mã học sinh" style=" margin-top: 8px;">
				</div>
				<div class="form-group-email" style="text-align: center;margin-top: 20px" >
					<span class="label-input100" style="color: #194d58;"><i class="fa fa-paper-plane-o" style="font-size: 20px"></i> Mật khẩu</span>
					<input type="password" class="form-control placeholder-no-fix" id="password"  name="password" placeholder="Mật khẩu" style="margin-top: 8px;">
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
	<h10>Kết quả học tập</h10>
	<p style="color: #000000;font-size:12pt; font-family: Roboto">*Lưu ý: Trường hợp học sinh bị sai thông tin. Liên hệ phòng 6 - Khu A, hoặc gửi mail về địa chỉ: 
		<a href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-THPT-Nguy%E1%BB%85n-Khuy%E1%BA%BFn-V%C4%A9nh-B%E1%BA%A3o-H%E1%BA%A3i-Ph%C3%B2ng-Cs2-534273963261510/">tiepnhanhsthptnk@gmail.com</a></p>
		
		@if (@isset($point) && $point != null) 
		<form action="{{ route('getxemdiem') }}" method="post" enctype="multipart/form-data" id="studentpoint" class="form-horizontal">
				{{ csrf_field() }}
				<div>
					<h4 style="float: left; margin-left:10px">Học sinh : <strong style="text-transform:capitalize"> {{$student->name}}</strong></h4>
				</div>
				<br>
				<br>
				<div>
					<h4 style="float: left; margin-left:10px">Lớp : <strong> {{$student->name_class}}</strong></h4>
				</div>
				<br>
				<br>
				<div>
					<h4 style="float: left;margin-left:10px">Năm học: <strong>{{$academic->name_of_school_year}}</strong></h4>
				</div>
	
				<div style="margin-top: 35px; margin-left: 10px" class="box-body">
					<table class="table table-bordered">
						<thead >
							<tr>
								<th style="white-space: nowrap;text-align: center">Môn học</th>
								<th style="white-space: nowrap;text-align: center">Học kỳ</th>
								<th style="text-align: center">Điểm miệng</th>
								<th style="text-align: center">Điểm 15'</th>
								<th style="text-align: center">Điểm 45'</th>
								<th style="text-align: center">Điểm học kỳ</th>
								<th style="text-align: center">Điểm TBHK</th>
							</tr>
						</thead>
						<tbody>
							@foreach($point as $pt)
								<tr>
									<td style="white-space: nowrap">{{$pt->name_subject}}</td>
									<td style="white-space: nowrap">{{$pt->name_term}}</td>
									<td style="text-align: center">{{$pt->dm}}</td>
									<td style="text-align: center">{{$pt->d15}}</td>
									<td style="text-align: center">{{$pt->d45}}</td>
									<td style="text-align: center">{{$pt->dhk}}</td>
									<td style="text-align: center">{{$pt->dtbhk}}</td>
								</tr>
								@endforeach
						</tbody>
					</table>
				</div>
		</form>
		@endif	
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	