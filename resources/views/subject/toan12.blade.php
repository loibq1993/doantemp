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
	<h10>Toán Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-top: 30px; color: #333333">	GIẢI TÍCH LỚP 12</h8></strong>
			<h4>Chương 1: Ứng Dụng Đạo Hàm Để Khảo Sát Và Vẽ Đồ Thị Của Hàm Số</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Sự đồng biến, nghịch biến của hàm số</li>
				<li>Bài 2: Cực trị của hàm số</li>
				<li>Bài 3: Giá trị lớn nhất và giá trị nhỏ nhất của hàm số</li>
				<li>Bài 4: Đường tiệm cận</li>
				<li>Bài 5: Khảo sát sự biến thiên và vẽ đồ thị của hàm số</li>
				<li>Ôn tập chương 1 Ứng dụng đạo hàm để khảo sát và vẽ đồ thị hàm số</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Hàm Số Lũy Thừa Hàm Số Mũ Và Hàm Số Lôgarit</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Lũy thừa</li>
				<li>Bài 2: Hàm số lũy thừa</li>
				<li>Bài 3: Lôgarit</li>
				<li>Bài 4: Hàm số mũ Hàm số lôgarit</li>
				<li>Bài 5: Phương trình mũ và phương trình lôgarit</li>
				<li>Bài 6: Bất phương trình mũ và bất phương trình lôgarit</li>
				<li>Ôn tập chương 2 Hàm số lũy thừa, Hàm số mũ và Hàm số Lôgarit</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Nguyên Hàm - Tích Phân Và Ứng Dụng</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Nguyên hàm</li>
				<li>Bài 2: Tích phân</li>
				<li>Bài 3: Ứng dụng của tích phân trong hình học</li>
				<li>Ôn tập chương 3 Nguyên hàm, Tích phân và Ứng dụng</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Số Phức</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Số phức</li>
				<li>Bài 2: Cộng, trừ và nhân số phức</li>
				<li>Bài 3: Phép chia số phức</li>
				<li>Bài 4: Phương trình bậc hai với hệ số thực</li>
				<li>Ôn tập chương 4 Số phức</li>
				<li>Ôn tập cuối năm phần Giải tích</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">HÌNH HỌC LỚP 12</h8></strong>
			<h4>Chương 1: Khối Đa Diện</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Khái niệm về khối đa diện</li>
				<li>Bài 2: Khối đa diện lồi và khối đa diện đều</li>
				<li>Bài 3: Khái niệm về thể tích của khối đa diện</li>
				<li>Ôn tập chương 1 Khối đa diện</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 2: Mặt Nón, Mặt Trụ, Mặt Cầu</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 1: Khái niệm về mặt tròn xoay</li>
					<li>Bài 2: Mặt cầu</li>
					<li>Ôn tập chương 2 Mặt nón, Mặt trụ, Mặt cầu</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 3: Phương Pháp Tọa Độ Trong Không Gian</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 1: Hệ tọa độ trong không gian</li>
					<li>Bài 2: Phương trình mặt phẳng</li>
					<li>Bài 3: Phương trình đường thẳng trong không gian</li>
					<li>Ôn tập chương 3 Phương pháp toạ độ trong không gian</li>
					<li>Ôn tập cuối năm phần Hình học</li>

				</ul>
			</div>
			<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
	</div>
</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	