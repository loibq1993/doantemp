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
	<h10>Tiếng Anh Lớp 12</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 1: Home life - Đời sống gia đình</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 1: Home life - Reading</li>
				<li>Unit 1: Home Life - Speaking</li>
				<li>Unit 1: Home Life - Listening</li>
				<li>Unit 1: Home Life - Writing</li>
				<li>Unit 1: Home Life - Language Focus</li>
				<li>Unit 1: Home Life - Vocabulary</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 2: Cultural Diversity - Sự đa dạng văn hóa</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 2: Cultural Diversity - Reading</li>
				<li>Unit 2: Cultural Diversity - Speaking</li>
				<li>Unit 2: Cultural Diversity - Listening</li>
				<li>Unit 2: Cultural Diversity - Writing</li>
				<li>Unit 2: Cultural Diversity - Language Focus</li>
				<li>Unit 2: Cultural Diversity - Vocabulary</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 3: Ways of Socialising - Phương thức giao tiếp xã hội</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 3: Ways of Socialising - Reading</li>
				<li>Unit 3: Ways of Socialising - Speaking</li>
				<li>Unit 3: Ways of Socialising - Listening</li>
				<li>Unit 3: Ways of Socialising - Writing</li>
				<li>Unit 3: Ways of Socialising - Language Focus</li>
				<li>Unit 3: Ways of Socialising - Vocabulary</li>
				<li>Test Yourself A Unit 1-3 English 12</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 4: School Education System - Hệ thống giáo dục</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 4: School Education System - Reading</li>
				<li>Unit 4: School Education System - Speaking</li>
				<li>Unit 4: School Education System - Listening</li>
				<li>Unit 4: School Education System - Writing</li>
				<li>Unit 4: School Education System - Language Focus</li>
				<li>Unit 4: School Education System - Vocabulary</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 5: Higher Education - Nền giáo dục bậc cao</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 5: Higher Education - Reading</li>
				<li>Unit 5: Higher Education - Speaking</li>
				<li>Unit 5: Higher Education - Listening</li>
				<li>Unit 5: Higher Education - Writing</li>
				<li>Unit 5: Higher Education - Language Focus</li>
				<li>Unit 5: Higher Education - Vocabulary</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 6: Future Jobs - Nghề nghiệp tương lai</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 6: Future Jobs - Reading</li>
				<li>Unit 6: Future Jobs - Speaking</li>
				<li>Unit 6: Future Jobs - Listening</li>
				<li>Unit 6: Future Jobs - Writing</li>
				<li>Unit 6: Future Jobs - Language Focus</li>
				<li>Unit 6: Future Jobs - Vocabulary</li>
				<li>Test Yourself B Unit 4 - 6 English 12</li>

			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 7: Economic Reforms - Sự cải cách kinh tế</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 7: Economic Reforms - Reading</li>
					<li>Unit 7: Economic Reforms -Speaking</li>
					<li>Unit 7: Economic Reforms - Listening</li>
					<li>Unit 7: Economic Reforms - Writing</li>
					<li>Unit 7: Economic Reforms - Language Focus</li>
					<li>Unit 7: Economic Reforms - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 8: Life in the future - Cuộc sống trong tương lai</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 8: Life in the future - Reading</li>
					<li>Unit 8: Life in the future - Speaking</li>
					<li>Unit 8: Life in the future - Listening</li>
					<li>Unit 8: Life in the future - Writing</li>
					<li>Unit 8: Life in the future - Language Focus</li>
					<li>Unit 8: Life in the future - Vocabulary</li>
					<li>Test Yourself C Unit 7 - 8 English 12</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 9: Deserts - Sa mạc</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 9: Deserts - Reading</li>
					<li>Unit 9: Deserts - Speaking</li>
					<li>Unit 9: Deserts - Listening</li>
					<li>Unit 9: Deserts - Writing</li>
					<li>Unit 9: Desert - Language Focus</li>
					<li>Unit 9: Deserts - Vocabulary</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 10: Endangered Species - Những loài đang gặp nguy hiểm</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 10: Endangered Species - Reading</li>
					<li>Unit 10: Endangered Species - Speaking</li>
					<li>Unit 10: Endangered Species - Listening</li>
					<li>Unit 10: Endangered Species - Writing</li>
					<li>Unit 10: Endangered Species - Language Focus</li>
					<li>Unit 10: Endangered Species - Vocabulary</li>
					<li>Test Yourself D Unit 9 - 10 English 12</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 11: Books - Các loại sách</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 11: Books - Reading</li>
					<li>Unit 11: Books - Speaking</li>
					<li>Unit 11: Books - Listening</li>
					<li>Unit 11: Books - Writing</li>
					<li>Unit 11: Books - Language Focus</li>
					<li>Unit 11: Books - Vocabulary</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 12: Water Sports - Những môn thể thao dưới nước</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 12: Water Sports - Reading</li>
					<li>Unit 12: Water Sports - Speaking</li>
					<li>Unit 12: Water Sports - Listening</li>
					<li>Unit 12: Water Sports - Writing</li>
					<li>Unit 12: Water Sports - Language Focus</li>
					<li>Unit 12: Water Sports - Vocabulary</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 13: The 22nd Sea Game - Sea Game lần thứ 22</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 13: The 22nd Sea Games - Reading</li>
					<li>Unit 13: The 22nd Sea Games - Speaking</li>
					<li>Unit 13: The 22nd Sea Games - Listening</li>
					<li>Unit 13: The 22nd Sea Games - Writing</li>
					<li>Unit 13: The 22nd Sea Games - Language Focus</li>
					<li>Unit 13: The 22nd Sea Games - Vocabulary</li>
					<li>Test Yourself E Unit 11 - 13 English 12</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 14: International Organizations - Những tổ chức quốc tế</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 14: International Organizations - Reading</li>
					<li>Unit 14: International Organizations - Speaking</li>
					<li>Unit 14: International Organizations - Listening</li>
					<li>Unit 14: International Organizations - Writing</li>
					<li>Unit 14: International Organizations - Language Focus</li>
					<li>Unit 14: International Organizations - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 15: Women In Society - Người phụ nữ trong xã hội</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 15: Women In Society - Reading</li>
					<li>Unit 15: Women In Society - Speaking</li>
					<li>Unit 15: Women In Society - Listening</li>
					<li>Unit 15: Women In Society - Writing</li>
					<li>Unit 15: Women In Society - Language Focus</li>
					<li>Unit 15: Women In Society - Vocabulary</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 16: The Association of Southeast Asian Nations - Hiệp hội các quốc gia Đông Nam Á</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 16: The Association of Southeast Asian Nations - Reading
					<li>Unit 16: The Association of Southeast Asian Nations - Speaking</li>
					<li>Unit 16: The Association of Southeast Asian Nations - Listening</li>
					<li>Unit 16: The Association of Southeast Asian Nations - Writing</li>
					<li>Unit 16: The Association of Southeast Asian Nations - Language Focus</li>
					<li>Unit 16: The Association of Southeast Asian Nations - Vocabulary</li>
					<li>Test Yourself F Unit 14 - 16 English 12</li>

				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	