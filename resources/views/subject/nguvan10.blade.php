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
	<h10>Ngữ Văn Lớp 10</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 1 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Tổng quan văn học Việt Nam</li>
				<li>Hoạt động giao tiếp bằng ngôn ngữ</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 2 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Khái quát văn học dân gian Việt Nam</li>
				<li>Hoạt động giao tiếp bằng ngôn ngữ (tiếp theo)</li>
				<li>Văn bản</li>
				<li>Viết bài làm văn số 1: Cảm nghĩ về một hiện tượng đời sống (hoặc một tác phẩm văn học)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 3 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Chiến thắng Mtao-Mxây</li>
				<li>Văn bản (Tiếp theo)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 4 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Truyện An Dương Vương và Mị Châu - Trọng Thủy</li>
				<li>Lập dàn ý bài văn tự sự</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 5 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Uy-Lít-Xơ trở về</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 6 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Ra-Ma buộc tội</li>
				<li>Miêu tả và biểu cảm trong văn tự sự</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 7 Ngữ Văn 10</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Tấm Cám</li>
				<li>Miêu tả và biểu cảm trong văn tự sự</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 8 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tam đại con gà</li>
					<li>Nhưng nó phải bằng hai mày</li>
					<li>Viết bài làm văn số 2: Văn tự sự</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 9 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Đặc điểm của ngôn ngữ nói và ngôn ngữ viết</li>
					<li>Ca dao than thân, yêu thương tình nghĩa</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 10 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ca dao hài hước</li>
					<li>Lời tiễn dặn</li>
					<li>Luyện viết đoạn văn tự sự</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 11 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập văn học dân gian Việt Nam</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 12 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Khái quát văn học Việt Nam từ thế kỉ X đến hết thế kỉ XIX</li>
					<li>Phong cách ngôn ngữ sinh hoạt</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 13 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tỏ lòng (Thuật hoài)</li>
					<li>Cảnh ngày hè - Nguyễn Trãi</li>
					<li>Tóm tắt văn bản tự sự</li>
					<li>Viết bài làm văn số 3 (bài làm ở nhà)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 14 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Phong cách ngôn ngữ sinh hoạt (Tiếp theo)</li>
					<li>Nhàn - Nguyễn Bỉnh Khiêm</li>
					<li>Độc Tiểu Thanh kí</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 15 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Thực hành phép tu từ Ẩn dụ và Hoán dụ</li>
					<li>Vận nước</li>
					<li>Cáo bệnh, bảo mọi người</li>
					<li>Hứng trở về</li>
					<li>Tại lầu Hoàng Hạc tiễn Mạnh Hạo Nhiên đi Quảng Lăng</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 16 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Cảm xúc mùa thu</li>
					<li>Trình bày về một vấn đề</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 17 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Lập kế hoạch cá nhân</li>
					<li>Thơ Hai-kư của Ba-sô</li>
					<li>Lầu Hoàng Hạc - Thôi Hiệu</li>
					<li>Nỗi oán của người phòng khuê</li>
					<li>Khe chim kêu - Vương Duy</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 18 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li style="margin-top: 40px">Các hình thức kết cấu của văn bản thuyết minh</li>
					<li>Lập dàn ý bài văn thuyết minh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 19 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Phú sông Bạch Đằng - Trương Hán Siêu</li>
					<li>Đại cáo bình Ngô - Phần 1: Tác giả Nguyễn Trãi</li>
					<li>Viết bài làm văn số 4: Văn thuyết minh (Bài làm ở nhà)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 20 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Đại cáo bình Ngô - Phần 2: Tác phẩm</li>
					<li>Tính chuẩn xác hấp dẫn của văn bản thuyết minh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 21 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Trích diễm thi tập - Hoàng Đức Lương</li>
					<li>Hiền tài là nguyên khí quốc gia - Thân Nhân Trung</li>
					<li>Khái quát lịch sử tiếng Việt</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 22 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Hưng Đạo đại vương Trần Quốc Tuấn - Ngô Sĩ Liên</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 23 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Thái sư Trần Thủ Độ - Ngô Sĩ Liên</li>
					<li>Phương pháp thuyết minh</li>
					<li>Viết bài làm văn số 5: Văn thuyết minh</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 24 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Chuyện chức phán sự đền Tản Viên - Nguyễn Dữ</li>
					<li>Luyện tập viết đoạn văn thuyết minh</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 25 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Những yêu cầu về sử dụng tiếng Việt</li>
					<li>Tóm tắt văn bản thuyết minh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 26 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Hồi trống Cổ Thành - La Quán Trung</li>
					<li>Tào Tháo uống rượu luận anh hùng - La Quán Trung</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 27 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tình cảnh lẻ loi của người chinh phụ - Đặng Trần Côn</li>
					<li>Lập dàn ý bài văn nghị luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 28 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Truyện Kiều - Phần 1: Tác giả Nguyễn Du</li>
					<li>Phong cách ngôn ngữ nghệ thuật</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 29 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Truyện Kiều - Phần 2 Trao Duyên</li>
					<li>Truyện Kiều - Phần Nỗi thương mình</li>
					<li>Lập luận trong văn nghị luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 30 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Chí khí anh hùng (trích Truyện Kiều)</li>
					<li>Thề nguyền (trích Truyện Kiều)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 31 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Văn bản văn học</li>
					<li>Thực hành các phép tu từ: phép điệp và phép đối</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 32 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					
				<li>Nội dung và hình thức của văn bản văn học</li>
				<li>Các thao tác nghị luận</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 33 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập phần Tiếng Việt</li>
					<li>Luyện tập viết đoạn văn nghị luận</li>
					■Viết quảng cáo

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 34 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tổng kết phần văn học</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 35 Ngữ Văn 10</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập phần làm văn</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
	</ul>
</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	