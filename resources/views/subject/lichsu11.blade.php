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
    <!--         </div>
        </div>
    </div> -->
	

		<!-- <ul>
			<li>
				<i class="fa fa-address-card">Mã học sinh </i>
				<input type="text" class="form-control" id="user_name" name="user_name" style="text-transform: capitalize;" maxlength="190">
			
			</li>
			<li><a href="">
				<p> <i class="fa fa-keyboard-o"> </i> Mật khẩu </p>
				<input type="text" class="form-control" id="user_name" name="user_name" style="text-transform: capitalize;" maxlength="190">
			</a></li>
			<button>Tìm kiếm</button>
		</ul> -->
</div>
<div id = "right-search">
	<h10>Lịch Sử Lớp 11</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">LỊCH SỬ THẾ GIỚI CẬN ĐẠI</h8></strong>
			<h4>Chương I: Các Nước Châu Á, Châu Phi Và Khu Vực Mĩ Latinh (Thế Kỉ XIX - Đầu Thế Kỉ XX)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Nhật Bản</li>
				<li>Bài 2: Ấn Độ</li>
				<li>Bài 3: Trung Quốc</li>
				<li>Bài 4: Các nước Đông Nam Á (Cuối thế kỉ XIX-đầu thế kỉ XX)</li>
				<li>Bài 5: Châu Phi và khu vực Mĩ Latinh (Thế kỉ XIX-đầu thế kỉ XX)</li>
				<li>Ôn tập chương I</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương II: Chiến Tranh Thế Giới Thứ Nhất (1914 - 1918)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 6: Chiến tranh thế giới thứ nhất (1914-1918)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Những Thành Tựu Văn Hóa Thời Cận Đại</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 7: Những thành tựu văn hoá thời Cận đại</li>
				<li>Bài 8: Ôn tập lịch sử thế giới cận đại</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">LỊCH SỬ THẾ GIỚI CẬN ĐẠI</h8></strong>
			<h4>Chương I: Cách Mạng Tháng Mười Nga Năm 1917 Và Công Cuộc Xây Dựng Chủ Nghĩa Xã Hội Ở Liên Xô (1921 - )</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 9: Cách mạng tháng Mười Nga năm 1917 và cuộc đấu tranh bảo vệ cách mạng (1917-1921)</li>
				<li>Bài 10: Liên Xô xây dựng chủ nghĩa xã hội (1921 - 1941)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương II: Các Nước Tư Bản Chủ Nghĩa Giữa Hai Cuộc Chiến Tranh Thế Giới (1918 - 1939)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 11: Tình hình các nước tư bản giữa hai cuộc chiến tranh thế giới (1918-1939)</li>
				<li>Bài 12: Nước Đức giữa hai cuộc chiến tranh thế giới (1918-1939)</li>
				<li>Bài 13: Nước Mĩ giữa hai cuộc chiến tranh thế giới (1918-1939)</li>
				<li>Bài 14: Nhật Bản giữa hai cuộc chiến tranh thế giới (1918-1939)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Các Nước Châu Á Giữa Hai Cuộc Chiến Tranh Thế Giới (1918 - 1939)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li style="margin-top: 50px; ">Bài 15: Phong trào cách mạng ở Trung Quốc và Ấn Độ (1918-1939)</li>
				<li>Bài 16: Các nước Đông Nam Á giữa hai cuộc chiến tranh thế giới (1918-1939)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương IV: Chiến Tranh Thế Giới Thứ Hai (1939 - 1945)</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 17: Chiến tranh thế giới thứ hai (1939-1945)</li>
					<li>Bài 18: Ôn tập lịch sử thế giới hiện đại (phần từ năm 1917 đến năm 1945)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<!-- <div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">LỊCH SỬ VIỆT NAM</h8></strong>
			<h4>Chương I: Việt Nam Từ Năm 1858 Đến Cuối Thế Kỉ XIX</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 19: Nhân dân Việt Nam kháng chiến chống Pháp xâm lược (Từ năm 1858 đến trước năm 1873)</li>
				<li>Bài 20: Chiến sự lan rộng ra cả nước Cuộc kháng chiến của nhân dân ta từ năm 1873 đến năm 1884 Nhà Nguyễn đầu hàng</li>
				<li>Bài 21: Phong trào yêu nước chống Pháp của nhân dân Việt Nam trong những năm cuối thế kỉ XIX</li>
			</ul>
		</div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương II: Việt Nam Từ Đầu Thế Kỉ XX Đến Hết Chiến Tranh Thế Giới Thứ Nhất (1918)</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 22: Xã hội Việt Nam trong cuộc khai thác lần thứ nhất của thực dân Pháp</li>
					<li>Bài 23: Phong trào yêu nước và cách mạng ở Việt Nam từ đầu thế kỉ XX đến chiến tranh thế giới thứ nhất (1914)</li>
					<li>Bài 24: Việt Nam trong những năm chiến tranh thế giới thứ nhất (1914-1918)</li>
					<li>Bài 25: Sơ kết lịch sử Việt Nam (1858-1918)</li>
				</ul>
			</div>
		</div> -->
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	