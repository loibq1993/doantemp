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
	<h10>Công nghệ Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 1: Linh Kiện Điện Tử</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Vai trò và triển vọng phát triển của ngành kĩ thuật điện tử trong sản xuất và đời sống</li>
				<li>Bài 2: Điện trở - Tụ điện - Cuộn cảm</li>
				<li>Bài 3: Thực hành Điện trở - Tụ điện - Cuộn cảm</li>
				<li>Bài 4: Linh kiện bán dẫn và IC</li>
				<li>Bài 5: Thực hành Điôt - Tirixto - Triac</li>
				<li>Bài 6: Thực hành Tranzito</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Một Số Mạch Điện Tử Cơ Bản</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 7: Khái niệm về mạch điện tử - chỉnh lưu - nguồn một chiều</li>
				<li>Bài 8: Mạch khuếch đại - Mạch tạo xung</li>
				<li>Bài 9: Thiết kế mạch điện tử đơn giản</li>
				<li>Bài 10: Mạch nguồn điện một chiều</li>
				<li>Bài 11: Thực hành Lắp mạch nguồn chỉnh lưu cầu có biến áp nguồn và tụ lọc</li>
				<li>Bài 12: Thực hành điều chỉnh các thông số của mạch tạo xung đa hài dùng tranzito</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Một Số Mạch Điện Tử Điều Khiển Đơn Giản</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 13: Khái niệm về mạch điện tử điều khiển</li>
				<li>Bài 14: Mạch điều khiển tín hiệu</li>
				<li>Bài 15: Mạch điều khiển tốc độ động cơ xoay chiều một pha
				<li>Bài 16: Thực hành mạch điều khiển tốc độ động cơ điện xoay chiều một pha

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Một Số Thiết Bị Điện Tử Dân Dụng</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 17: Khái niệm về hệ thống thông tin và viễn thông</li>
				<li>Bài 18: Máy tăng âm</li>
				<li>Bài 19: Máy thu thanh</li>
				<li>Bài 20: Máy thu hình</li>
				<li>Bài 21: Thực hành Mạch khuếch đại âm tần</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 5: Mạch Điện Xoay Chiều Ba Pha</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 22: Hệ thống điện quốc gia</li>
				<li>Bài 23: Mạch điện xoay chiều ba pha</li>
				<li>Bài 24: Thực hành nối tải ba pha hình sao và hình tam giác</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 6: Mạng Điện Sản Xuất Quy Mô Nhỏ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 25: Máy điện xoay chiều ba pha - máy biến áp ba pha</li>
				<li>Bài 26: Động cơ không đồng bộ ba pha</li>
				<li>Bài 27: Thực hành quan sát và mô tả cấu tạo của động cơ không đồng bộ ba pha</li>
				<li>Bài 28: Mạng điện sản xuất quy mô nhỏ</li>
				<li>Bài 29: Thực hành tìm hiểu một mạng điện sản xuất quy mô nhỏ</li>
				<li>Bài 30: Ôn tập</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	