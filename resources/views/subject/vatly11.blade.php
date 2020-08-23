@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id = "left-search">
	<!-- <div class="slider-container"> 
        <div class="register-container">
            <div class="container">-->
                <div class="row">
                	<h6>Chương trình Lớp 11</h6>
					<div class="col-sm-12">
						<ul>
								<span class="label-input100" style="color: #194d58;">
									<a href="{{ url('/chuongtrinh11') }}">
										<li>
											<i class="fa fa-calculator" style="font-size: 20px"></i> 
											<h4 style="text-align: left; padding-left:0px;font-family: Roboto" >Toán 11</h4>
										</li>
									</a>
								</span>
								<span class="label-input100" style="color: #194d58;font-family: Roboto">
										<a href="{{ url('/nguvan11') }}">
											<li>
												<i class="fa fa-file-pdf-o" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto" >Ngữ Văn 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/tienganh11') }}">
											<li>
												<i class="fa fa-globe" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Tiếng anh 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/vatly11') }}">
											<li>
												<i class="fa fa-cogs" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Vật lý 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/hoahoc11') }}">
											<li>
												<i class="fa fa-flask" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Hóa học 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/sinhhoc11') }}">
											<li>
												<i class="fa fa-envira" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Sinh học 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/dialy11') }}">
											<li>
												<i class="fa fa-compass" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Địa lý 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/lichsu10') }}">
											<li>
												<i class="fa fa-institution" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Lịch sử 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/gdcd11') }}">
											<li>
												<i class="fa fa-handshake-o" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">GDCD 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/congnghe11') }}">
											<li>
												<i class="fa fa-cube" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Công nghệ 11</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/tinhoc11') }}">
											<li>
												<i class="fa fa-television" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Tin học 11s</h4>
											</li>
										</a>
								</span>
						</ul>
					<!-- 
						<div class="form-group-email" style="text-align: center;margin-top: 10px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-calculator col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="https://chuabavang.com/">Toán 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-file-pdf-o col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="https://chuabavang.com/">Ngữ Văn 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-globe col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#">Tiếng Anh 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-cogs col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#">Vật Lý 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-flask col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#">Hóa học 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-envira col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#"> Sinh học 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-compass col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#"> Địa lý 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-institution col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#"> Lịch sử 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-handshake-o col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#"> GDCD 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-cube col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#"> Công nghệ 11</a>
							</span>
						</div>
						<div style="height: 10px;"></div>
						<div class="form-group-email" style="text-align: center;margin-top: 20px" >
							<span class="label-input100" style="color: #194d58;">
								<i class="fa fa-television col-md-4" style="text-align: right; font-size: 20px"></i> 
								<a class="control-label col-md-8" style="text-align: left; padding-left:0px;" href="#"> Tin học 11</a>
							</span>
						</div> -->
					</div>
                </div>
</div>
<div id = "right-search">
	<h10>Vật Lý Lớp 11</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">ĐIỆN HỌC - ĐIỆN TỪ HỌC</h8></strong>
			<h4>Chương 1: Điện Tích. Điện trường</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Điện tích và định luật Cu-lông</li>
				<li>Bài 2: Thuyết Êlectron và định luật bảo toàn điện tích</li>
				<li>Bài 3: Điện trường và cường độ điện trường và đường sức điện</li>
				<li>Bài 4: Công của lực điện</li>
				<li>Bài 5: Điện thế và hiệu điện thế</li>
				<li>Bài 6: Tụ điện</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Dòng Điện Không Đổi</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 7: Dòng điện không đổi và nguồn điện</li>
				<li>Bài 8: Điện năng và công suất điện</li>
				<li>Bài 9: Định luật Ôm đối với toàn mạch</li>
				<li>Bài 10: Ghép các nguồn điện thành bộ</li>
				<li>Bài 11: Phương pháp giải một số bài toán về toàn mạch</li>
				<li>Bài 12: Thực hành Xác định suất điện động và điện trở trong của một pin điện hoá</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Dòng Điện Trong Các Môi Trường</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 13: Dòng điện trong kim loại</li>
				<li>Bài 14: Dòng điện trong chất điện phân</li>
				<li>Bài 15: Dòng điện trong chất khí</li>
				<li>Bài 16: Dòng điện trong chân không</li>
				<li>Bài 17: Dòng điện trong chất bán dẫn</li>
				<li>Bài 18: Thực hành: Khảo sát đặc tính chỉnh lưu của điốt bán dẫn và đặc tính khuếch đại của Tranzito</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Từ Trường</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 19: Từ trường</li>
				<li>Bài 20: Lực từ và cảm ứng từ</li>
				<li>Bài 21: Từ trường của dòng điện chạy trong các dây dẫn có hình dạng đặc biệt</li>
				<li>Bài 22: Lực Lo-ren-xơ</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 5: Cảm Ứng Điện Từ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 23: Từ thông và cảm ứng điện từ</li>
				<li>Bài 24: Suất điện động cảm ứng</li>
				<li>Bài 25: Tự cảm</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">QUANG HÌNH HỌC</h8></strong>
			<h4>Chương 6: Khúc Xạ Ánh Sáng</h4>
		</div>
		<div id="noidung">
			<ul>
				<li style="margin-top: 50px; ">Bài 26: Khúc xạ ánh sáng</li>
				<li>Bài 27: Phản xạ toàn phần</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương 7: Mắt. Các Dụng Cụ Quang</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 28: Lăng kính</li>
					<li>Bài 29: Thấu kính mỏng</li>
					<li>Bài 30: Giải bài toán về hệ thấu kính</li>
					<li>Bài 31: Mắt</li>
					<li>Bài 32: Kính lúp</li>
					<li>Bài 33: Kính hiển vi</li>
					<li>Bài 34: Kính thiên văn</li>
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