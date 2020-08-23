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
	<h10>Hóa Học Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 1: Este - Lipit</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Este</li>
				<li>Bài 2: Lipit</li>
				<li>Bài 3: Khái niệm về Xà phòng và Chất giặt rửa tổng hợp</li>
				<li>Bài 4: Luyện tập Este và Chất béo</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Cacbohiđrat</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 5: Glucozơ</li>
				<li>Bài 6: Saccarozơ, Tinh bột và Xenlulozơ</li>
				<li>Bài 7: Luyện tập Cấu tạo và tính chất của Cacbohiđrat</li>
				<li>Bài 8: Thực hành Điều chế, tính chất hóa học của Este và Cacbohiđrat</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Amin, Amino Axit Và Protein</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 9: Amin</li>
				<li>Bài 10: Amino axit</li>
				<li>Bài 11: Peptit và Protein</li>
				<li>Bài 12 Luyện tập Cấu tạo và tính chất của Amin, Amino axit và Protein</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Polime Và Vật Liệu Polime</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 13: Đại cương về polime</li>
				<li>Bài 14 Vật liệu polime</li>
				<li>Bài 15: Luyện tập Polime và vật liệu polime</li>
				<li>Bài 16: Thực hành Một số tính chất của protein và vật liệu polime</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 5: Đại Cương Về Kim Loại</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 17: Vị trí của kim loại trong bảng tuần hoàn và cấu tạo của kim loại</li>
				<li>Bài 18: Tính chất của kim loại và Dãy điện hóa của kim loại</li>
				<li>Bài 19 Hợp kim</li>
				<li>Bài 20: Sự ăn mòn kim loại</li>
				<li>Bài 21 Điều chế kim loại</li>
				<li>Bài 22: Luyện tập Tính chất của kim loại</li>
				<li>Bài 23 Luyện tập Điều chế kim loại và sự ăn mòn kim loại</li>
				<li>Bài 24: Thực hành Tính chất, điều chế kim loại, sự ăn mòn kim loại</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 6: Kim Loại Kiềm, Kim Loại Kiềm Thổ, Nhôm</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 25: Kim loại kiềm và hợp chất quan trọng của kim loại kiềm</li>
				<li>Bài 26: Kim loại kiềm thổ và hợp chất quan trọng của chúng</li>
				<li>Bài 27: Nhôm và hợp chất của nhôm</li>
				<li>Bài 28: Luyện tập Tính chất của kim loại kiềm, kim loại kiềm thổ và hợp chất của chúng</li>
				<li>Bài 29: Luyện tập Tính chất của nhôm và hợp chất của nhôm</li>
				<li>Bài 30: Thực hành Tính chất của natri, magie, nhôm và hợp chất của chúng</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 7: Hiđrocacbon Thơm. Nguồn Hiđrocacbon Thiên Nhiên. Hệ Thống Hóa Về Hiđrocacbon</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 35: Benzen và đồng đẳng. Một số hiđrocacbon thơm khác</li>
					<li>Bài 36: Luyện tập Hiđrocacbon thơm</li>
					<li>Bài 37: Nguồn hiđrocacbon thiên nhiên</li>
					<li>Bài 38: Hệ thống hóa về hiđrocacbon</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 8: Phân Biệt Một Số Chất Vô Cơ</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 40: Nhận biết một số ion trong dung dịch</li>
					<li>Bài 41: Nhận biết một số chất khí</li>
					<li>Bài 42: Luyện tập Nhận biết một số chất vô cơ</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 9: Hóa Học Và Vấn Đề Phát Triển Kinh Tế, Xã Hội, Môi Trường</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 43: Hóa học và vấn đề phát triển kinh tế</li>
					<li>Bài 44: Hóa học và vấn đề xã hội</li>
					<li>Bài 45: Hóa học và vấn đề môi trường</li>
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