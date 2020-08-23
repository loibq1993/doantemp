@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id = "left-search">
	<!-- <div class="slider-container"> 
        <div class="register-container">
            <div class="container">-->
                <div class="row">
                	<h6>Chương trình Lớp 12</h6>
					<div class="col-sm-12">
						<ul>
								<span class="label-input100" style="color: #194d58;">
									<a href="{{ url('/toan12') }}">
										<li>
											<i class="fa fa-calculator" style="font-size: 20px"></i> 
											<h4 style="text-align: left; padding-left:0px;font-family: Roboto" >Toán 12</h4>
										</li>
									</a>
								</span>
								<span class="label-input100" style="color: #194d58;font-family: Roboto">
										<a href="{{ url('/nguvan12') }}">
											<li>
												<i class="fa fa-file-pdf-o" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto" >Ngữ Văn 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/tienganh12') }}">
											<li>
												<i class="fa fa-globe" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Tiếng anh 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/vatly12') }}">
											<li>
												<i class="fa fa-cogs" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Vật lý 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/hoahoc12') }}">
											<li>
												<i class="fa fa-flask" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Hóa học 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/sinhhoc12') }}">
											<li>
												<i class="fa fa-envira" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Sinh học 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/dialy12') }}">
											<li>
												<i class="fa fa-compass" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Địa lý 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/lichsu12') }}">
											<li>
												<i class="fa fa-institution" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Lịch sử 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/gdcd12') }}">
											<li>
												<i class="fa fa-handshake-o" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">GDCD 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/congnghe12') }}">
											<li>
												<i class="fa fa-cube" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Công nghệ 12</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/tinhoc12') }}">
											<li>
												<i class="fa fa-television" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Tin học 12</h4>
											</li>
										</a>
								</span>
						</ul>
					</div>
                </div>
</div><div id = "right-search">
<div id = "right-search">
	<h10>Tin học Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương I: Khái Niệm Về Hệ Cơ Sở Dữ Liệu</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Một số khái niệm cơ bản</li>
				<li>Bài 2: Hệ quản trị cơ sở dữ liệu</li>
				<li>Bài tập và thực hành 1: Tìm hiểu hệ cơ sở dữ liệu</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div id="document"></div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương II: Chương Trình Đơn Giản</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 3: Giới thiệu Microsoft Access</li>
				<li>Bài 4: Cấu trúc bảng</li>
				<li>Bài tập và thực hành 2: Tạo cấu trúc bảng</li>
				<li>Bài 5: Các thao tác cơ bản trên bảng</li>
				<li>Bài tập và thực hành 3: Thao tác trên bảng</li>
				<li>Bài 6: Biểu mẫu</li>
				<li>Bài tập và thực hành 4: Tạo biểu mẫu đơn giản</li>
				<li>Bài 7: Liên kết giữa các bảng</li>
				<li>Bài tập và thực hành 5: Liên kết giữa các bảng</li>
				<li>Bài 8: Truy vấn dữ liệu</li>
				<li>Bài tập và thực hành 6: Mẫu hỏi trên một bảng</li>
				<li>Bài tập và thực hành 7: Mẫu hỏi trên nhiều bảng</li>
				<li>Bài 9: Báo cáo và kết xuất báo cáo</li>
				<li>Bài tập và thực hành 8: Tạo báo cáo</li>
				<li>Bài tập và thực hành 9: Bài thực hành tổng hợp</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Hệ Cơ Sở Dữ Liệu Quan Hệ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 10: Cơ sở dữ liệu quan hệ</li>
				<li>Bài 11: Các thao tác với cơ sở dữ liệu quan hệ</li>
				<li>Bài tập và thực hành 10: Hệ cơ sở dữ liệu quan hệ</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương IV: Kiến Trúc Và Bảo Mật Các Hệ Cơ Sở Dữ Liệu</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 12: Các loại kiến trúc của hệ cơ sở dữ liệu</li>
				<li>Bài 13: Bảo mật thông tin trong các hệ cơ sở dữ liệu</li>
				<li>Bài tập và thực hành 11: Bảo mật cơ sở dữ liệu</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	