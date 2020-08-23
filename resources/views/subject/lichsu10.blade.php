@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id = "left-search">
	<!-- <div class="slider-container"> 
        <div class="register-container">
            <div class="container">-->
                <div class="row">
                	<h6>Chương trình Lớp 10</h6>
					<div class="col-sm-12">
						<ul>
								<span class="label-input100" style="color: #194d58;">
									<a href="{{ url('/toan10') }}">
										<li>
											<i class="fa fa-calculator" style="font-size: 20px"></i> 
											<h4 style="text-align: left; padding-left:0px;font-family: Roboto" >Toán 10</h4>
										</li>
									</a>
								</span>
								<span class="label-input100" style="color: #194d58;font-family: Roboto">
										<a href="{{ url('/nguvan10') }}">
											<li>
												<i class="fa fa-file-pdf-o" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto" >Ngữ Văn 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/tienganh10') }}">
											<li>
												<i class="fa fa-globe" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Tiếng anh 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/vatly10') }}">
											<li>
												<i class="fa fa-cogs" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Vật lý 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/hoahoc10') }}">
											<li>
												<i class="fa fa-flask" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Hóa học 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/sinhhoc10') }}">
											<li>
												<i class="fa fa-envira" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Sinh học 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/dialy10') }}">
											<li>
												<i class="fa fa-compass" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Địa lý 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/lichsu10') }}">
											<li>
												<i class="fa fa-institution" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Lịch sử 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/gdcd10') }}">
											<li>
												<i class="fa fa-handshake-o" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">GDCD 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/congnghe10') }}">
											<li>
												<i class="fa fa-cube" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Công nghệ 10</h4>
											</li>
										</a>
								</span>
								<span class="label-input100" style="color: #194d58;">
										<a href="{{ url('/tinhoc10') }}">
											<li>
												<i class="fa fa-television" style="font-size: 20px"></i> 
												<h4 style="text-align: left; padding-left:0px;font-family: Roboto">Tin học 10</h4>
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
	<h10>Lịch Sử Lớp 10</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">LỊCH SỬ THẾ GIỚI THỜI NGUYÊN THỦY, CỔ ĐẠI VÀ TRUNG ĐẠI</h8></strong>
			<h4>Chương I: Xã Hội Nguyên Thủy</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Sự xuất hiện loài người và bầy người nguyên thủy</li>
				<li>Bài 2: Xã hội nguyên thủy</li>
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
			<h4>Chương II: Xã Hội Cổ Đại</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 3: Các quốc gia cổ đại phương Đông</li>
				<li>Bài 4: Các quốc gia cổ đại phương Tây - Hi Lạp và Rô - Ma</li>
				<li>Ôn tập chương II</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Trung Quốc Thời Phong Kiến</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 5: Trung Quốc thời phong kiến
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương IV: Ấn Độ Thời Phong Kiến</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 6: Các quốc gia Ấn Độ và văn hóa truyền thống Ấn Độ</li>
				<li>Bài 7: Sự phát triển lịch sử và nền văn hóa đa dạng của Ấn Độ</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương V: Đông Nam Á Thời Phong Kiến</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 8: Sự hình thành và phát triển các vương quốc chính ở Đông Nam Á</li>
				<li>Bài 9: Vương quốc Cam-pu-chia và Vương quốc Lào</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương VI: Tây Âu Thời Trung Đại</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 10: Thời kì hình thành và phát triển của chế độ phong kiến Tây Âu (từ thế kỉ V đến thế kỉ XIV)</li>
				<li>Bài 11: Tây Âu thời kì trung đại</li>
				<li>Bài 12: Ôn tập lịch sử thế giới người nguyên thủy, cổ đại và trung đại</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">LỊCH SỬ VIỆT NAM TỪ NGUỒN GỐC ĐẾN GIỮA THẾ KỈ XIX</h8></strong>
			<h4>Chương I: Việt Nam Từ Thời Nguyên Thủy Đến Thế Kỉ X</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 13: Việt Nam thời kì nguyên thủy</li>
				<li>Bài 14: Các quốc gia cổ đại trên đất nước Việt Nam</li>
				<li>Bài 15: Thời Bắc thuộc và các cuộc đấu tranh giành độc lập dân tộc (từ thế kỉ II TCN đến đầu thế kỉ X)</li>
				<li>Bài 16: Thời Bắc thuộc và các cuộc đấu tranh giành độc lập dân tộc (từ thế kỉ II TCN đến đầu thế kỉ X) (Tiếp theo)</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương II: Việt Nam Từ Thế Kỉ X Đến Thế Kỉ XV</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 17: Quá trình hình thành và phát triển của nhà nước phong kiến (từ thế kỉ X đến thế kỉ XV)</li>
				<li>Bài 18: Công cuộc xây dựng và phát triển kinh tế trong các thế kỉ X-XV</li>
				<li>Bài 19: Những cuộc kháng chiến chống ngoại xâm ở các thế kỉ X-XV</li>
				<li>Bài 20: Xây dựng và phát triển văn hóa dân tộc trong các thế kỉ X-XV</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Việt Nam Từ Thế Kỉ XVI Đến Thế Kỉ XVIII</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 21: Những biến đổi của nhà nước phong kiến trong các thế kỉ XVI-XVIII</li>
				<li>Bài 22: Tình hình kinh tế ở các thế kỉ XVI-XVIII</li>
				<li>Bài 23: Phong trào Tây Sơn và sự nghiệp thống nhất đất nước, bảo vệ tổ quốc cuối thế kỉ XVIII</li>
				<li>Bài 24: Tình hình văn hóa ở các thế kỉ XVI-XVIII</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương IV: Việt Nam Ở Nửa Đầu Thế Kỉ XIX</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 25: Tình hình chính trị, kinh tế, văn hóa dưới triều Nguyễn (nửa đầu thế kỉ XIX)</li>
					<li>Bài 26: Tình hình xã hội ở nửa đầu thế kỉ XIX và phong trào đấu tranh của nhân dân</li>
					<li>Bài 27: Quá trình dựng nước và giữ nước</li>
					<li>Bài 28: Truyền thống yêu nước của dân tộc Việt Nam thời phong kiến</li>
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
				<h4>Chương IV: Việt Nam Ở Nửa Đầu Thế Kỉ XIX</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 25: Tình hình chính trị, kinh tế, văn hóa dưới triều Nguyễn (nửa đầu thế kỉ XIX)</li>
					<li>Bài 26: Tình hình xã hội ở nửa đầu thế kỉ XIX và phong trào đấu tranh của nhân dân</li>
					<li>Bài 27: Quá trình dựng nước và giữ nước</li>
					<li>Bài 28: Truyền thống yêu nước của dân tộc Việt Nam thời phong kiến</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương II: Các Nước Âu - Mĩ (Từ Giữa Thế Kỉ XVI Đến Cuối Thế Kỉ XVIII)</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 32: Cách mạng công nghiệp ở châu Âu</li>
					<li>Bài 33: Hoàn thành cách mạng tư sản ở châu Âu và Mĩ giữa thế kỉ XIX</li>
					<li>Bài 34: Các nước tư bản chuyển sang giai đoạn đế quốc chủ nghĩa</li>
					<li>Bài 35: Các nước Anh, Pháp, Đức, Mĩ và sự bành trướng thuộc địa</li>
					<li>Bài 36: Sự hình thành và phát triển của phong trào công nhân</li>
					<li>Bài 37: Mác và Ăng-ghen Sự ra đời của chủ nghĩa xã hội khoa học</li>
					<li>Bài 38: Quốc tế thứ nhất và công xã Pa-ri 1871</li>
					<li>Bài 39: Quốc tế thứ hai</li>
					<li>Bài 40: Lê-nin và phong trào công nhân Nga đầu thế kỉ XX</li>

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