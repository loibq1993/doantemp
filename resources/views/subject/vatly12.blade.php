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
</div>
<div id = "right-search">
	<h10>Vật Lý Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 1: Dao Động Cơ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Dao động điều hòa
				<li>Bài 2: Con lắc lò xo</li>
				<li>Bài 3: Con lắc đơn</li>
				<li>Bài 4: Dao động tắt dần và dao động cưỡng bức</li>
				<li>Bài 5: Tổng hợp hai dao động điều hòa cùng phương, cùng tần số và Phương pháp Fre-Nen</li>
				<li>Bài 6: Thực hành Khảo sát thực nghiệm các định luật dao động của con lắc đơn</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Sóng Cơ Và Sóng Âm</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 7: Sóng cơ và sự truyền sóng cơ</li>
				<li>Bài 8: Giao thoa sóng</li>
				<li>Bài 9: Sóng dừng</li>
				<li>Bài 10: Đặc trưng Vật lý của âm</li>
				<li>Bài 11: Đặc trưng sinh lí của âm</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Dòng Điện Xoay Chiều</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 12: Đại cương về dòng điện xoay chiều</li>
				<li>Bài 13: Các mạch điện xoay chiều</li>
				<li>Bài 14: Mạch có R, L, C mắc nối tiếp</li>
				<li>Bài 15: Công suất điện tiêu thụ của mạch điện xoay chiều và Hệ số công suất</li>
				<li>Bài 16: Truyền tải điện năng và máy biến áp</li>
				<li>Bài 17: Máy phát điện xoay chiều</li>
				<li>Bài 18: Động cơ không đồng bộ ba pha</li>
				<li>Bài 19: Thực hành Khảo sát đoạn mạch xoay chiều RLC</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Dao Động Và Sóng Điện Từ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 20: Mạch dao động</li>
				<li>Bài 21: Điện từ trường</li>
				<li>Bài 22: Sóng điện từ</li>
				<li>Bài 23: Nguyên tắc thông tin liên lạc bằng sóng vô tuyến</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 5: Sóng Ánh Sáng</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 24: Tán sắc ánh sáng</li>
				<li>Bài 25: Giao thoa ánh sáng</li>
				<li>Bài 26: Các loại quang phổ</li>
				<li>Bài 27: Tia hồng ngoại và tia tử ngoại</li>
				<li>Bài 28: Tia X</li>
				<li>Bài 29: Thực hành Đo bước sóng ánh sáng bằng phương pháp giao thoa</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 6: Lượng Tử Ánh Sáng</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 30: Hiện tượng quang điện và thuyết lượng tử ánh sáng</li>
				<li>Bài 31: Hiện tượng quang điện trong</li>
				<li>Bài 32: Hiện tượng quang - phát quang</li>
				<li>Bài 33: Mẫu nguyên tử Bo</li>
				<li>Bài 34: Sơ lược về laze</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 7: Hạt Nhân Nguyên Tử</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 35: Tính chất và cấu tạo hạt nhân</li>
					<li>Bài 36: Năng lượng liên kết của hạt nhân và phản ứng hạt nhân</li>
					<li>Bài 37: Phóng xạ</li>
					<li>Bài 38: Phản ứng phân hạch</li>
					<li>Bài 39: Phản ứng nhiệt hạch</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 8: Từ Vi Mô Đến Vĩ Mô</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 40: Các hạt sơ cấp</li>
					<li>Bài 41: Cấu tạo vũ trụ</li>


				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	