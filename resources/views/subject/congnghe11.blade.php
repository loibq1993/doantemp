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
	<h10>Công nghệ Lớp 11</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 1: Trồng Trọt Lâm Nghiệp Đại Cương</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 1: Bài mở đầu</li>
				<li>Bài 2: Khảo nghiệm giống cây trồng</li>
				<li>Bài 3: Sản xuất giống cây trồng</li>
				<li>Bài 4: Sản xuất giống cây trồng (tiếp theo)</li>
				<li>Bài 4: Bài toán và thuật toán</li>
				<li>Bài 5: Thực hành Xác định sức sống của hạt</li>
				<li>Bài 6: Ứng dụng công nghệ nuôi cấy mô tế bào trong nhân giống cây trồng nông, lâm nghiệp</li>
				<li>Bài 7: Một số tính chất của đất trồng</li>
				<li>Bài 8: Thực hành xác định độ chua của đất</li>
				<li>Bài 9: Biện pháp cải tạo và sử dụng đất xám bạc màu, đất xói mòn mạnh trơ sỏi đá</li>
				<li>Bài 10: Biện pháp cải tạo và sử dụng đất mặn, đất phèn</li>
				<li>Bài 11: Thực hành quan sát phẫu diện đất</li>
				<li>Bài 12: Đặc điểm, tính chất, kỹ thuật sử dụng một số loại phân bón thông thường</li>
				<li>Bài 13: Ứng dụng công nghệ vi sinh trong sản xuất phân bón</li>
				<li>Bài 14: Thực hành trồng cây trong dung dịch</li>
				<li>Bài 15: Điều kiện phát sinh, phát triển của sâu, bệnh hại cây trồng</li>
				<li>Bài 16: Thực hành nhận biết một số loại sâu, bệnh hại lúa</li>
				<li>Bài 17: Phòng trừ tổng hợp bệnh dịch hại cây trồng</li>
				<li>Bài 18: Thực hành pha chế dung dịch Boóc đô phòng, trừ nấm hại</li>
				<li>Bài 19: Ảnh hưởng của thuốc hóa học bảo vệ thực vật đến quần thể sinh vật và môi trườn</li>
				<li>Bài 20: Ứng dụng công nghệ vi sinh sản xuất chế phẩm bảo vệ thực vật</li>
				<li>Bài 21: Ôn tập chương I</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 2: Chăn Nuôi Thủy Sản Đại Cương</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 22: Quy luật sinh trưởng phát dục của vật nuôi</li>
				<li>Bài 23: Chọn giống vật nuôi</li>
				<li>Bài 24: Thực hành quan sát, nhận dạng ngoại hình giống vật nuôi</li>
				<li>Bài 25: Các phương pháp nhân giống vật nuôi và thủy sản</li>
				<li>Bài 26: Sản xuất giống trong chăn nuôi và thủy sản</li>
				<li>Bài 27: Ứng dụng tế bào trong công tác giống</li>
				<li>Bài 28: Nhu cầu dinh dưỡng của vật nuôi</li>
				<li>Bài 29: Sản xuất thức ăn cho vật nuôi</li>
				<li>Bài 30: Thực hành phối hợp khẩu phần ăn cho vật nuôi</li>
				<li>Bài 31: Sản xuất thức ăn nuôi thủy sản</li>
				<li>Bài 32: Thực hành sản xuất thức ăn hỗn hợp nuôi cá</li>
				<li>Bài 33: Ứng dụng công nghệ vi sinh để sản xuất thức ăn chăn nuôi</li>
				<li>Bài 34: Tạo môi trường sống cho vật nuôi và thủy sản</li>
				<li>Bài 35: Điều kiện phát sinh, phát triển bệnh ở vật nuôi</li>
				<li>Bài 36: Thực hành quan sát triệu chứng, bệnh tích của gà mắc bệnh Niu cát xơn và cá trắm cỏ bị bệnh xuất huyết do vi rút</li>
				<li>Bài 37: Một số vac xin và thuốc thường dùng để phòng và chữa bệnh cho vật nuôi</li>
				<li>Bài 38: Ứng dụng công nghệ sinh học trong sản xuất vacxin và thuốc kháng sinh</li>
				<li>Bài 39: Ôn tập chương II</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 3: Bảo Quản, Chế Biến, Nông, Lâm, Thủy Sản</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 40: Mục đích, ý nghĩa của công tác bảo quản, chế biến nông, lâm, thủy sản</li>
				<li>Bài 41: Bảo quản hạt, củ làm giống</li>
				<li>Bài 42: Bảo quản lương thực, thực phẩm</li>
				<li>Bài 43: Bảo quản thịt, trứng, sữa và cá</li>
				<li>Bài 44: Chế biến lương thực thực phẩm</li>
				<li>Bài 45: Thực hành chế biến si rô từ quả</li>
				<li>Bài 46: Chế biến sản phẩm chăn nuôi, thủy sản</li>
				<li>Bài 47: Thực hành làm sữa chua hoặc sữa đậu nành bằng phương pháp đơn giản</li>
				<li>Bài 48: Chế biến sản phẩm cây công nghiệp và lâm sản</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 4: Doanh Nghiệp Và Lựa Chọn Lĩnh Vực Kinh Doanh</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 49: Bài mở đầu</li>
				<li>Bài 50: Doanh nghiệp và hoạt động kinh doanh của doanh nghiệp</li>
				<li>Bài 51: Lựa chọn lĩnh vực kinh doanh</li>
				<li>Bài 52: Thực hành lựa chọn cơ hội kinh doanh</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Chương 5: Tổ Chức Và Quản Lý Doanh Nghiệp</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Bài 53: Xác định kế hoạch kinh doanh</li>
				<li>Bài 54: Thành lập doanh nghiệp</li>
				<li>Bài 55: Quản lí doanh nghiệp</li>
				<li>Bài 56: Thực hành xây dựng kế hoạch kinh doanh</li>
			</ul>
		</div>
		<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	