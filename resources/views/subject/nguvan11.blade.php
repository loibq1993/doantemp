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
	<h10>Ngữ Văn Lớp 11</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 1 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Vào phủ Chúa Trịnh(Trích Thượng kinh kí sự)</li>
				<li>Từ ngôn ngữ chung đến lời nói cá nhân</li>
				<li>Viết bài làm văn số 1: Nghị luận xã hội</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 2 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Tự tình của Hồ Xuân Hương</li>
				<li>Câu cá mùa thu (Thu điếu)</li>
				<li>Phân tích đề, lập dàn ý bài văn nghị luận</li>
				<li>Thao tác lập luận phân tích</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 3 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Thương vợ của Trần Tế Xương</li>
				<li>Khóc Dương Khuê - Nguyễn Khuyến</li>
				<li>Vịnh khoa thi Hương - Trần Tế Xương</li>
				<li>Từ ngôn ngữ chung đến lời nói cá nhân(tiếp theo)</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 4 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài ca ngất ngưởng - Nguyễn Công Trứ</li>
				<li>Bài ca ngắn đi trên bãi cát - Cao Bá Quát</li>
				<li>Luyện tập thao tác lập luận phân tích</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 5 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Lẽ ghét thương của Nguyễn Đình Chiểu</li>
				<li>Chạy giặc của Nguyễn Đình Chiểu</li>
				<li>Bài ca phong cảnh Hương Sơn - Chu Mạnh Trinh</li>
				<li>Viết bài làm văn số 2: Nghị luận văn học</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 6 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Văn tế nghĩa sĩ Cần Giuộc phần tác giả Nguyễn Đình Chiểu</li>
				<li>Văn tế nghĩa sĩ Cần Giuộc phần tác phẩm</li>
				<li>Thực hành về thành ngữ, điển cố</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 7 Ngữ Văn 11</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Chiếu cầu hiền của Ngô Thì Nhậm</li>
				<li>Xin lập khoa luật của Nguyễn Trường Tộ</li>
				<li>Thực hành về nghĩa của từ trong sử dụng</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 8 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập văn học trung đại Việt Nam</li>
					<li>Thao tác lập luận so sánh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 9 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Khái quát văn học Việt Nam từ đầu thế kỉ XX đến cách mạng tháng Tám 1945</li>
					<li>Viết bài làm văn số 3: Nghị luận văn học</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 10 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Hai đứa trẻ - Thạch Lam</li>
					<li>Ngữ cảnh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 11 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Chữ người tử tù - Nguyễn Tuân</li>
					<li>Luyện tập thao tác lập luận so sánh</li>
					<li>Luyện tập vận dụng kết hợp các thao tác lập luận phân tích và so sánh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 12 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Hạnh phúc một tang gia - Vũ Trọng Phụng</li>
					<li>Phong cách ngôn ngữ báo chí</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 13 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Một số thể loại văn học: thơ, truyện</li>
					<li>Chí Phèo: Tác giả Nam Cao</li>
					<li>Phong cách ngôn ngữ báo chí (tiếp theo)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 14 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Chí Phèo: Tác phẩm</li>
					<li>Thực hành về lựa chọn trật tự các bộ phận trong câu</li>
					<li>Bản tin</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 15 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Cha con nghĩa nặng - Hồ Biểu Chánh</li>
					<li>Vi hành - Nguyễn Ái Quốc</li>
					<li>Tinh thần thể dục - Nguyễn Công Hoan</li>
					<li>Luyện tập viết bản tin</li>
					<li>Phỏng vấn và trả lời phỏng vấn </li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 16 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Vĩnh biệt Cửu Trùng Đài - Nguyễn Huy Tưởng</li>
					<li>Thực hành về một số kiểu câu trong văn bản</li
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 17 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tình yêu và thù hận - Uy-li-am Sếch-xpia</li>
					<li>Ôn tập phần Văn học</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 18 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li style="margin-top: 40px">Luyện tập phỏng vấn và trả lời phỏng vấn</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 19 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Lưu biệt khi xuất dương - Phan Bội Châu</li>
					<li>Nghĩa của câu</li>
					<li>Viết bài làm văn số 5: Nghị luận văn học</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 20 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Hầu trời - Tản Đà/li>
					<li>Nghĩa của câu(tiếp theo)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 21 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Vội vàng - Xuân Diệu</li>
					<li>Thao tác lập luận bác bỏ</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 22 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tràng giang - Huy Cận</li>
					<li>Luyện tập thao tác lập luận bác bỏ</li>
					<li>Viết bài văn nghị luận số 6: Nghị luận xã hội</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 23 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Đây thôn Vĩ Dạ - Hàn Mặc Tử </li>
					<li>Chiều tối - Hồ Chí Minh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 24 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Từ ấy - Tố Hữu</li>
					<li>Lai tân - Hồ Chí Minh</li>
					<li>Nhớ đồng - Tố Hữu</li>
					<li>Tương tư - Nguyễn Bính</li>
					<li>Chiều xuân - Anh Thơ</li>
					<li>Tiểu sử tóm tắt</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 25 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Đặc điểm loại hình Tiếng việt</li>
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
					<li>Tôi yêu em - Pu-Skin</li>
					<li>Bài thơ số 28 - Ta-go</li>
					<li>Luyện tập viết tiểu sử tóm tắt</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 27 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Người trong bao - Sê-khốp</li>
					<li>Thao tác lập luận bình luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 28 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Người cầm quyền khôi phục uy quyền - V.Huy-Gô</li>
					<li>Luyện tập thao tác lập luận bình luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 29 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Về luân lí xã hội ở nước ta - Phan Châu Trinh</li>
					<li>Tiếng mẹ đẻ nguồn giải phóng các dân tộc bị áp bức - Nguyễn An Ninh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 30 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Về luân lí xã hội ở nước ta - Phan Châu Trinh</li>
					<li>Tiếng mẹ đẻ nguồn giải phóng các dân tộc bị áp bức - Nguyễn An Ninh</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 30 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ba cống hiến vĩ đại của Các Mác - Ph.Ăng-ghen</li>
					<li>Phong cách ngôn ngữ chính luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 31 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Một thời đại trong thi ca - Hoài Thanh</li>
					<li>Phong cách ngôn ngữ chính luận (tiếp theo)</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 32 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Một số thể loại văn học: kịch, văn nghị luận</li>
					<li>Luyện tập vận dụng kết hợp các thao tác lập luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 33 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập phần văn học (Kì 2)</li>
					<li>Tóm tắt văn bản nghị luận</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 34 Ngữ Văn 11</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập phần tiếng Việt lớp 11 học kì 2</li>
					<li>Luyện tập tóm tắt văn bản nghị luận</li>
					<li>Ôn tập phần làm văn lớp 11 học kì 2</li>
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