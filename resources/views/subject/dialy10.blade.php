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
	<h10>Địa Lý Lớp 10</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">	ĐỊA LÝ TỰ NHIÊN</h8></strong>
			<h4>Chương I: Bản Đồ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Các phép chiếu hình bản đồ cơ bản</li>
				<li>Bài 2: Một số phương pháp biểu hiện các đối tượng địa lý trên bản đồ</li>
				<li>Bài 3: Sử dụng bản đồ trong học tập và đời sống</li>
				<li>Bài 4: Thực hành Xác định một số phương pháp biểu hiện các đối tượng địa lý trên bản đồ</li>
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
			<h4>Chương II: Vũ Trụ. Hệ Quả Các Chuyển Động Của Trái Đất</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 5: Vũ trụ. Hệ Mặt Trời và Trái Đất. Hệ quả chuyển động tự quay quanh trục của Trái Đất</li>
				<li>Bài 6: Hệ quả chuyển động xung quanh Mặt Trời của Trái Đất</li>
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
			<h4>Chương III: Cấu Trúc Của Trái Đất. Các Quyển Của Lớp Vỏ Địa Lý</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 7: Cấu trúc của Trái Đất. Thạch quyển. Thuyết kiến tạo mảng</li>
				<li>Bài 8: Tác động của nội lực đến địa hình bề mặt Trái Đất</li>
				<li>Bài 9: Tác động của ngoại lực đến địa hình bề mặt Trái Đất</li>
				<li>Bài 10: Thực hành Nhận xét về sự phân bố các vành đai động đất, núi lửa và vùng núi trẻ trên bản đồ</li>
				<li>Bài 11: Khí quyển. Sự phân bố nhiệt độ không khí trên Trái Đất</li>
				<li>Bài 12: Sự phân bố khí áp. Một số loại gió chính</li>
				<li>Bài 13: Sự ngưng đọng hơi nước trong khí quyển. Mưa</li>
				<li>Bài 14: Thực hành Đọc bản đồ sự phân hóa các đới và các kiểu khí hậu trên Trái Đất. Phân tích biểu đồ một số kiểu khí hậu</li>
				<li>Bài 15: Thủy quyển. Một số nhân tố ảnh hưởng tới chế độ nước sông. Một số sông lớn trên Trái Đất</li>
				<li>Bài 16: Sóng. Thủy triều. Dòng biển</li>
				<li>Bài 17: Thổ nhưỡng quyển. Các nhân tố hình thành thổ nhưỡng</li>
				<li>Bài 18: Sinh quyển. Các nhân tố ảnh hưởng tới sự phát triển và phân bố của sinh vật</li>
				<li>Bài 19: Sự phân bố sinh vật và đất trên Trái Đất</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương IV: Một Số Quy Luật Của Lớp Vỏ Địa Lý</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 20: Lớp vỏ địa lý. Quy luật thống nhất và hoàn chỉnh của lớp vỏ địa lí</li>
				<li>Bài 21: Quy luật địa đới và quy luật phi địa đới</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333; font-family: Tahoma">ĐỊA LÝ - KINH TẾ XÃ HỘI</h8></strong>
			<h4>Chương V: Địa Lý Dân Cư</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 22: Dân số và sự gia tăng dân số
				<li>Bài 23: Cơ cấu dân số</li>
				<li>Bài 24: Sự phân bố dân cư. Các loại hình quần cư và đô thị hóa</li>
				<li>Bài 25: Thực hành Phân tích bản đồ phân bố dân cư thế giới</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương VI: Cơ cấu nền kinh tế</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 26: Cơ cấu nền kinh tế
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương VII: Địa Lý Nông Nghiệp</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 27: Vai trò, đặc điểm, các nhân tố ảnh hưởng tới phát triển và phân bố nông nghiệp. Một số hình thức tổ chức lãnh thổ nông nghiệp</li>
				<li>Bài 28: Địa lí ngành trồng trọt</li>
				<li>Bài 29: Địa lí ngành chăn nuôi</li>
				<li>Bài 30: Thực hành Vẽ và phân tích biểu đồ về sản lượng lương thực, dân số của thế giới và một số quốc gia</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương VIII: Địa Lý Công Nghiệp</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 31: Vai trò và đặc điểm của công nghiệp. Các nhân tố ảnh hưởng tới phát triển và phân bố công nghiệp</li>
				<li>Bài 32: Địa lí các ngành công nghiệp</li>
				<li>Bài 33: Một số hình thức chủ yếu của tổ chức lãnh thổ công nghiệp</li>
				<li>Bài 34: Thực hành Vẽ biểu đồ tình hình sản xuất một số sản phẩm công nghiệp trên thế giới</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương IX: Địa Lý Dịch Vụ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 35: Vai trò, đặc điểm và các nhân tố ảnh hưởng phân bố các ngành dịch vụ</li>
				<li>Bài 36: Vai trò, đặc điểm và các nhân tố ảnh hưởng đến phát triển và phân bố ngành giao thông vận tải</li>
				<li>Bài 37: Địa lý các ngành giao thông vận tải</li>
				<li>Bài 38: Thực hành Viết báo cáo ngắn về kênh đào Xuyê và kênh đào Panama</li>
				<li>Bài 39: Địa lí ngành thông tin liên lạc</li>
				<li>Bài 40: Địa lý ngành thương mại</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương X: Môi Trường Và Sự Phát Triển Bền Vững</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 41: Môi trường và tài nguyên thiên nhiên</li>
				<li>Bài 42: Môi trường và sự phát triển bền vững</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	