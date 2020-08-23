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
	<h10>Sinh Học Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">DI TRUYỀN HỌC</h8></strong>
			<h4>Chương 1: Cơ Chế Di Truyền Và Biến Dị</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Gen, Mã di truyền và quá trình nhân đôi ADN</li>
				<li>Bài 2: Phiên mã và dịch mã</li>
				<li>Bài 3: Điều hòa hoạt động gen</li>
				<li>Bài 4: Đột biến gen</li>
				<li>Bài 5: Nhiễm sắc thể và đột biến cấu trúc nhiễm sắc thể</li>
				<li>Bài 6: Đột biến số lượng nhiễm sắc thể</li>
				<li>Bài 7: Thực hành Quan sát các dạng đột biến số lượng nhiễm sắc thể trên tiêu bản cố định và trên tiêu bản tạm thời</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Tính Quy Luật Của Hiện Tượng Di Truyền</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 8: Quy luật Menđen Quy luật phân li</li>
				<li>Bài 9: Quy luật phân li độc lập</li>
				<li>Bài 10: Tương tác gen và tác động đa hiệu của gen</li>
				<li>Bài 11: Liên kết gen và hoán vị gen</li>
				<li>Bài 12: Di truyền liên kết với giới tính và di truyền ngoài nhân</li>
				<li>Bài 13: Ảnh hưởng của môi trường lên sự Biểu hiện của gen</li>
				<li>Bài 15: Bài tập chương I và chương II</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Di Truyền Học Quần Thể</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 16: Cấu trúc di truyền của quần thể</li>
				<li>Bài 17: Cấu trúc di truyền và quần thể (tiếp theo)</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Ứng Dụng Di Truyền Học</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 18: Chọn giống vật nuôi và cây trồng dựa trên nguồn biến dị tổ hợp</li>
				<li>Bài 19: Tạo giống bằng phương pháp gây đột biến và công nghệ tế bào</li>
				<li>Bài 20: Tạo giống mới nhờ công nghệ gen</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 5: Di Truyền Học Người</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 21: Di truyền y học</li>
				<li>Bài 22: Bảo vệ vốn gen của loài người và một số vấn đề xã hội của di truyền học</li>
				<li>Bài 23: Ôn tập phần di truyền học</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">TIẾN HÓA</h8></strong>
			<h4>Chương 1: Bằng Chứng Và Cơ Chế Tiến Hóa</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 24: Các bằng chứng tiến hóa</li>
				<li>Bài 25: Học thuyết Lamac và học thuyết Đacuyn</li>
				<li>Bài 26: Học thuyết tiến hóa tổng hợp hiện đại</li>
				<li>Bài 27: Quá trình hình thành quần thể thích nghi</li>
				<li>Bài 28: Loài</li>
				<li>Bài 29: Quá trình hình thành loài</li>
				<li>Bài 30: Quá trình hình thành loài (tiếp theo)</li>
				<li>Bài 31: Tiến hóa lớn</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Sự Phát Sinh Và Phát Triển Của Sự Sống Trên Trái Đất</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 32: Nguồn gốc sự sống</li>
				<li>Bài 33: Sự phát triển của sinh giới qua các đại địa chất</li>
				<li>Bài 34: Sự phát sinh loài người</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<strong><h8 style ="margin-bottom: 30px; color: #333333">SINH THÁI HỌC</h8></strong>
			<h4>Chương 1: Cá Thể Và Quần Thể Sinh Vật</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 35: Môi trường sống và các nhân tố sinh thái</li>
				<li>Bài 36: Quần thể sinh vật và mối quan hệ giữa các cá thể trong quần thể</li>
				<li>Bài 37: Các đặc trưng cơ bản của quần thể sinh vật</li>
				<li>Bài 38: Các đặc trưng cơ bản của quần thể sinh vật (tiếp theo)</li>
				<li>Bài 39: Biến động số lượng cá thể của quần thể sinh vật</li>


			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Quần Xã Sinh Vật</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 40: Quần xã sinh vật và một số đặc trưng cơ bản của quần xã</li>
				<li>Bài 41: Diễn thế sinh thái</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Hệ Sinh Thái, Sinh Quyển Và Bảo Vệ Môi Trường</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 42: Hệ sinh thái</li>
				<li>Bài 43: Trao đổi vật chất trong hệ sinh thái</li>
				<li>Bài 44: Chu trình sinh địa hóa và sinh quyển</li>
				<li>Bài 45: Dòng năng lượng trong hệ sinh thái và hiệu suất sinh thái</li>
				<li>Bài 46: Thực hành Quản lí và sử dụng bền vững tài nguyên thiên nhiên</li>
				<li>Bài 47: Ôn tập phần tiến hóa và sinh thái học</li>

			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	