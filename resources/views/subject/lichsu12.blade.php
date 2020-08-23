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
	<h10>Lịch Sử Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">LỊCH SỬ THẾ GIỚI HIỆN ĐẠI TỪ NĂM 1945 ĐẾN NĂM 2000</h8></strong>
			<h4>Chương I: Sự Hình Thành Trật Tự Thế Giới Mới Sau Chiến Tranh Thế Giới Thứ Hai (1945 - 1949)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Sự hình thành trật tự thế giới mới sau chiến tranh thế giới thứ hai ( 1945 – 1949)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương II: Liên Xô Và Các Nước Đông Âu (1945 - 1991). Liên Bang Nga (1991 - 2000)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 2: Liên Xô và các nước Đông Âu (1945 - 2000) Liên Bang Nga (1991 - 2000)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Các Nước Á, Phi và Mĩ Latinh (1945 - 2000)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 3: Các nước Đông Bắc Á</li>
				<li>Bài 4: Các nước Đông Nam Á và Ấn Độ</li>
				<li>Bài 5: Các nước Châu Phi và Mĩ Latinh</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương V: Quan Hệ Quốc Tế (1945 - 2000)</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 9: Quan hệ quốc tế trong và sau thời kì chiến tranh lạnh</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương VI: Cách mạng khoa học - công nghệ và xu thế toàn cầu hoá</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 10: Cách mạng khoa học-công nghệ và xu hướng toàn cầu hóa nửa sau thế kỉ XX</li>
				<li>Bài 11: Tổng kết lịch sử thế giới hiện đại từ năm 1945 đến năm 2000</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333;">LỊCH SỬ VIỆT NAM TỪ NĂM 1919 ĐẾN NĂM 2000</h8></strong>
			<h4>Chương I: Việt Nam Từ Năm 1919 Đến Năm 1930</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 12: Phong trào dân tộc dân chủ ở Việt Nam từ năm 1919 đến năm 1925</li>
				<li>Bài 13: Phong trào dân tộc dân chủ ở Việt Nam từ năm 1925 đến năm 1930</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương II: Việt Nam Từ Năm 1930 Đến Năm 1945</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 14: Phong trào cách mạng 1930-1935</li>
				<li>Bài 15: Phong trào dân chủ 1936-1939</li>
				<li>Bài 16: Phong trào giải phóng dân tộc và tổng khởi nghĩa tháng Tám (1939-1945) Nước Việt Nam Dân chủ Cộng hòa ra đời</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương III: Việt Nam Từ Năm 1945 Đến Năm 1954</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 17: Nước Việt Nam Dân chủ Cộng hòa từ sau ngày 2-9-1945 đến trước ngày 19-12-1946</li>
				<li>Bài 18: Những năm đầu của cuộc kháng chiến toàn quốc chống thực dân Pháp (1946-1950)</li>
				<li>Bài 19: Bước phát triển của cuộc kháng chiến toàn quốc chống thực dân Pháp (1951-1953)</li>
				<li>Bài 20: Cuộc kháng chiến toàn quốc chống thực dân Pháp kết thúc (1953-1954)</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương IV: Việt Nam Từ Năm 1954 Đến Năm 1975</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 21: Xây dựng xã hội chủ nghĩa ở miền Bắc, đấu tranh chống đế quốc Mĩ và chính quyền Sài Gòn ở miền Nam (1954-1965)</li>
					<li>Bài 22: Nhân dân hai miền trực tiếp chiến đấu chống đế quốc Mĩ xâm lược, nhân dân miền bắc vừa chiến đấu vừa sản xuất (1965-1973)</li>
					<li>Bài 23: Khôi phục và phát triển kinh tế-xã hội ở miền Bắc, giải phóng hoàn toàn miền Nam (1973-1975)</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Chương V: Việt Nam Từ Năm 1975 Đến Năm 2000</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Bài 24: Việt Nam trong năm đầu sau thắng lợi của cuộc kháng chiến chống Mĩ, cứu nước năm 1975</li>
					<li>Bài 25: Việt Nam xây dựng chủ nghĩa xã hội và đấu tranh bảo vệ tổ quốc (1976-1986)</li>
					<li>Bài 26: Đất nước trên đường đổi mới đi lên chủ nghĩa xã hội (1986-2000)</li>
					<li>Bài 27: Tổng kết lịch sử Việt Nam từ năm 1919 đến năm 2000</li>


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