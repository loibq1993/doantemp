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
	<h10>Ngữ Văn Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 1 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Khái quát văn học Việt Nam từ đầu Cách mạng tháng Tám 1945 đến thế kỉ XX</li>
				<li>Nghị luận về một tư tưởng, đạo lý</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 2 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Tuyên ngôn độc lập - Hồ Chí Minh - Phần 1: Tác giả</li>
				<li>Giữ gìn sự trong sáng của tiếng Việt</li>
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
			<h4>Tuần 3 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Tuyên Ngôn Độc Lập - Hồ Chí Minh - Phần 2: Tác phẩm</li>
				<li>Giữ gìn sự trong sáng của tiếng Việt (tiếp theo)</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 4 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Nguyễn Đình Chiểu, ngôi sao sáng trong văn nghệ của dân tộc</li>
				<li>Mấy ý nghĩ về thơ - Nguyễn Đình Thi</li>
				<li>Đô-xtôi-ép-xki - X.Xvai-Gơ</li>
				<li>Nghị luận về một hiện tượng đời sống</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 5 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Phong cách ngôn ngữ khoa học</li>
				<li>Viết bài làm văn số 2: Nghị luận xã hội</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 6 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Thông điệp nhân ngày thế giới phòng chống AIDS 01/12/2003</li>
				<li>Nghị luận về một bài thơ, đoạn thơ</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Tuần 7 Ngữ Văn 12</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Tây Tiến của Quang Dũng</li>
				<li>Nghị luận về một ý kiến bàn về văn học</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 8 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Việt Bắc - Tố Hữu - Phần 1: Tác giả</li>
					<li>Luật thơ</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 9 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Việt Bắc - Tố Hữu - Phần 2: Tác phẩm</li>
					<li>Phát biểu theo chủ đề</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 10 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Đất Nước - Nguyễn Khoa Điềm</li>
					<li>Đất nước - Nguyễn Đình Thi</li>
					<li>Luật thơ (Tiếp theo)</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 11 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Thực hành một số phép tu từ ngữ âm</li>
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
				<h4>Tuần 13 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Sóng - Xuân Quỳnh</li>
					<li>Luyện tập vận dụng kết hợp các phương thức biểu đạt trong bài văn nghị luận</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 14 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Đàn ghi ta của Lor-ca - Thanh Thảo</li>
					<li>Bác ơi - Tố Hữu</li>
					<li>Tự do - P.Ê-luy-a</li>
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
				<h4>Tuần 15 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Quá trình văn học và phong cách văn học</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 16 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Người lái đò sông Đà - Nguyễn Tuân</li>
					<li>Chữa lỗi lập luận trong văn nghị luận</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 17 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ai đã đặt tên cho dòng sông - Hoàng Phủ Ngọc Tường</li>
					<li>Những ngày đầu của nước Việt Nam mới - Võ Nguyên Giáp</li>
					<li>Thực hành chữa lỗi lập luận trong văn nghị luận</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 18 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li style="margin-top: 40px">Ôn tập phần văn học</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 19 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Vợ chồng A Phủ - Tô Hoài</li>
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
				<h4>Tuần 20 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Nhân vật giao tiếp</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 21 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Vợ Nhặt - Kim Lân</li>
					<li>Nghị luận về một tác phẩm, một đoạn trích văn xuôi</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 22 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Rừng xà nu - Nguyễn Trung Thành</li>
					<li>Bắt sấu rừng U Minh Hạ - Sơn Nam</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 23 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Những đứa con trong gia đình - Nguyễn Thi</li>
					<li>Viết bài làm văn số 6: Nghị luận văn học</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 24 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Chiếc thuyền ngoài xa - Nguyễn Minh Châu</li>
					<li>Thực hành về hàm ý</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 25 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Mùa lá rụng trong vườn - Ma Văn Kháng</li>
					<li>Một người Hà Nội - Nguyễn Khải</li>
					<li>Thực hành về hàm ý (tiếp theo)</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 26 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Thuốc - Lỗ Tấn</li>
					<li>Rèn luyện kĩ năng mở bài, kết bài trong văn nghị luận</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 27 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Số phận con người - M. Sô-lô-khốp</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 28 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ông già và biển cả - Hê-Minh-Uê</li>
					<li>Diễn đạt trong văn nghị luận</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 29 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Hồn Trương Ba, da hàng thịt - Lưu Quang Vũ</li>
					<li>Diễn đạt trong văn nghị luận (tiếp theo)</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 30 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Nhìn về vốn văn hóa dân tộc - Trần Đình Hượu</li>
					<li>Phát biểu tự do</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 31 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Phong cách ngôn ngữ hành chính</li>
					<li>Văn bản tổng kết</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 32 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Tổng kết phần tiếng Việt: hoạt động giao tiếp bằng ngôn ngữ</li>
					<li>Ôn tập phần làm văn</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 33 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Giá trị văn học và tiếp nhận văn học</li>
					<li>Tổng kết phần tiếng Việt: Lịch sử, đặc điểm loại hình và các phong cách ngôn ngữ</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Tuần 34 Ngữ Văn 12</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Ôn tập phần văn học</li>
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