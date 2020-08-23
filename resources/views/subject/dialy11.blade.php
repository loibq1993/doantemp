@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<h10>Địa Lý Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Địa Lý Việt Nam</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Việt Nam trên đường đổi mới và hội nhập</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Vị Trí Địa Lí Và Lịch Sử Phát Triển Lãnh Thổ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 2: Vị trí địa lí, phạm vi lãnh thổ</li>
				<li>Bài 3: Thực hành Vẽ lược đồ Việt Nam</li>
				<li>Bài 4: Lịch sử hình thành và phát triển lãnh thổ</li>
				<li>Bài 5: Lịch sử hình thành và phát triển lãnh thổ (tt)</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Đặc Điểm Chung Của Tự Nhiên</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 6: Đất nước nhiều đồi núi</li>
				<li>Bài 7: Đất nước nhiều đồi núi (tt)</li>
				<li>Bài 8: Thiên nhiên chịu ảnh hưởng sâu sắc của biển</li>
				<li>Bài 9: Thiên nhiên nhiệt đới ẩm gió mùa</li>
				<li>Bài 10: Thiên nhiên nhiệt đới ẩm gió mùa (tt)</li>
				<li>Bài 11: Thiên nhiên phân hóa đa dạng (hết phần phân hóa Bắc Nam và Đông Tây)</li>
				<li>Bài 12: Thiên nhiên phân hóa đa dạng (tt)</li>
				<li>Bài 13: Thực hành - Đọc bản đồ địa hình, điền vào lược đồ trống một số dãy núi và đỉnh núi</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Vấn Đề Sử Dụng Và Bảo Vệ Tự Nhiên</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 14: Sử dụng và bảo vệ tài nguyên thiên nhiên</li>
				<li>Bài 15: Bảo vệ môi trường và phòng chống thiên tai</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Địa Lí Dân Cư</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 16: Đặc điểm dân số và phân bố dân cư nước ta</li>
				<li>Bài 17: Lao động và việc làm</li>
				<li>Bài 18: Đô thị hóa</li>
				<li>Bài 19: Thực hành - Vẽ biểu đồ và phân tích địa lý các ngành kinh tế</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Địa Lý Kinh Tế</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 20: Chuyển dịch cơ cấu kinh tế</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Địa Lý Kinh Tế</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 21: Đặc điểm nền nông nghiệp nước ta</li>
				<li>Bài 22: Vấn đề phát triển nông nghiệp</li>
				<li>Bài 23: Thực hành - Phân tích sự chuyển dịch cơ cấu ngành trồng trọt</li>
				<li>Bài 24: Vấn đề phát triển ngành thủy sản và lâm nghiệp</li>
				<li>Bài 25: Tổ chức lãnh thổ nông nghiệp</li>
				<li>Bài 26: Cơ cấu ngành công nghiệp</li>
				<li>Bài 27: Vấn đề phát triển một số ngành công nghiệp trọng điểm</li>
				<li>Bài 28: Vấn đề tổ chức lãnh thổ công nghiệp</li>
				<li>Bài 29: Thực hành - Vẽ biểu đồ, nhận xét và giải thích sự chuyển dịch cơ cấu công nghiệp</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Một Số Vấn Đề Phát Triển Và Phân Bố Công Nghiệp</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 30: Vấn đề phát triển ngành giao thông vận tải và thông tin liên lạc</li>
				<li>Bài 31: Vấn đề phát triển thương mại, du lịch</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Điạ Lý Các Vùng Kinh Tế</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 32: Vấn đề khai thác thế mạnh ở trung du và miền núi Bắc Bộ</li>
				<li>Bài 33: Vấn đề chuyển dịch cơ cấu kinh tế theo ngành ở đồng bằng sông Hồng</li>
				<li>Bài 34: Thực hành - Phân tích mối quan hệ giữa dân số với việc sản xuất lương thực ở đồng bằng Sông Hồng</li>
				<li>Bài 35: Vấn đề phát triển kinh tế - xã hội ở Bắc Trung Bộ</li>
				<li>Bài 36: Vấn đề phát triển kinh tế - xã hội ở duyên hải Nam Trung Bộ</li>
				<li>Bài 37: Vấn đề khai thác thế mạnh ở Tây Nguyên</li>
				<li>Bài 38: Thực hành - So sánh về cây công nghiệp lâu năm và chăn nuôi gia súc lớn giữa vùng Tây Nguyên với trung du và miền núi Bắc Bộ</li>
				<li>Bài 39: Vấn đề khai thác lãnh thổ theo chiều sâu ở Đông Nam Bộ</li>
				<li>Bài 40: Thực hành - Phân tích tình hình phát triển công nghiệp ở Đông Nam Bộ</li>
				<li>Bài 41: Vấn đề sử dụng hợp lý và cải tạo tự nhiên ở đồng bằng sông Cửu Long</li>
				<li>Bài 42: Vấn đề phát triển kinh tế, an ninh quốc phòng ở biển Đông và các đảo, quần đảo</li>
				<li>Bài 43: Các vùng kinh tế trọng điểm</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Địa Lý Địa Phương</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 44,45: Tìm hiểu địa lý tỉnh, thành phố</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	