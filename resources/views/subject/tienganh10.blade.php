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
	<h10>Tiếng Anh Lớp 10</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>A day in the life of - Một ngày trong đời</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 1: A day in the life of  - Reading</li>
				<li>Unit 1: A day in the life of  - Speaking</li>
				<li>Unit 1: A day in the life of  - Listening</li>
				<li>Unit 1: A day in the life of  - Writting</li>
				<li>Unit 1: A day in the life of  - Language Focus</li>
				<li>Unit 1: A day in the life of  - Vocabulary</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 2: School Talks - Nói chuyện về trường học</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 2: School Talks - Reading</li>
				<li>Unit 2: School Talks - Speaking</li>
				<li>Unit 2: School Talks - Listening</li>
				<li>Unit 2: School Talks - Writing</li>
				<li>Unit 2: School Talks - Language Focus</li>
				<li>Unit 2: School Talks - Vocabulary</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 3: People's Background - Tiểu sử</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 3: People's Background - Reading</li>
				<li>Unit 3: People's Background - Speaking</li>
				<li>Unit 3: People's Background - Listening</li>
				<li>Unit 3: People's Background- Writing</li>
				<li>Unit 3: People's Background - Language Focus</li>
				<li>Unit 3: A party - Vocabulary</li>
				<li>Test Yourself A Unit 1 - 3 English 10</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 4: Special Education - Giáo dục đặc biệt</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 4: Special Education - Reading</li>
				<li>Unit 4: Special Education - Speaking</li>
				<li>Unit 4: Special Education - Listening</li>
				<li>Unit 4: Special Education - Writing</li>
				<li>Unit 4: Special Education - Language Focus</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 5: Technology and You - Công nghệ và bạn</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 5: Technology and You - Reading</li>
				<li>Unit 5: Technology and You - Speaking</li>
				<li>Unit 5: Technology and You - Listening</li>
				<li>Unit 5: Technology and You - Writing</li>
				<li>Unit 5: Technology and You - Language Focus</li>
				<li>Unit 5: Technology and You - Vocabulary</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 6: An excursion - Một chuyến dã ngoại</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 6: An excursion - Reading</li>
				<li>Unit 6: An excursion - Speaking</li>
				<li>Unit 6: An excursion - Listening</li>
				<li>Unit 6: An excursion - Writing</li>
				<li>Unit 6: An excursion - Language Focus</li>
				<li>Unit 6: An excursion - Vocabulary</li>
				<li>Test Yourself B Unit 4 - 6 English 10</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 7: The Mass Media - Phương tiện truyền thông</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 7: The Mass Media - Reading</li>
					<li>Unit 7: The Mass Media - Speaking</li>
					<li>Unit 7: The Mass Media - Listening</li>
					<li>Unit 7: The Mass Media - Writing</li>
					<li>Unit 7: The Mass Media - Language Focus</li>
					<li>Unit 7: The Mass Media - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 8: The story of my village - Câu chuyện của làng quê tôi</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 8: The story of my village - Câu chuyện của làng quê tôis - Reading</li>
					<li>Unit 8: The story of my village - Câu chuyện của làng quê tôi - Speaking</li>
					<li>Unit 8:The story of my village - Câu chuyện của làng quê tôi - Writing</li>
					<li>Unit 8: The story of my village - Câu chuyện của làng quê tôi - Language Focus</li>
					<li>Unit 8: The story of my village - Câu chuyện của làng quê tôi - Vocabulary</li> 
					<li>Test Yourself C Unit 7-8 English 10</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 9: Undersea World - Thế giới dưới đại dương</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 9:  Undersea World - Reading</li>
					<li>Unit 9:  Undersea World - Speaking</li>
					<li>Unit 9:  Undersea World Undersea World - Listening</li>
					<li>Unit 9:  Undersea World - Writing</li>
					<li>Unit 9:  Undersea World - Language Focus</li>
					<li>Unit 9:  Undersea World - Unit 9:  Undersea World - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 10: Conservation - Sự bảo tồn</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 10: Conservation - Reading</li>
					<li>Unit 10: Conservation - Speaking</li>
					<li>Unit 10: Conservation - Listening</li>
					<li>Unit 10: Conservation - Writing</li>
					<li>Unit 10: Conservation - Language Focus</li>
					<li>Unit 10: Conservation - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 11: National Park - Công viên quốc gia</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 11: National Park - Reading</li>
					<li>Unit 11: National Park - Speaking</li>
					<li>Unit 11: National Park - Listening</li>
					<li>Unit 11: National Park - Writing</li>
					<li>Unit 11: National Park - Language Focus</li>
					<li>Unit 11: National Park - Vocabulary</li>
					<li>Test Yourself D Unit 9 - 11 English 11</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 12: Music - Âm nhạc</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 12: Music - Reading</li>
					<li>Unit 12: Music - Speaking</li>
					<li>Unit 12: Music - Listening</li>
					<li>Unit 12: Music - Writing</li>
					<li>Unit 12: Music - Language Focus</li>
					<li>Unit 12: Music - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 13: Films and Cinema - Phim và điện ảnh</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 13: Films and Cinema - Reading</li>
					<li>Unit 13: Films and Cinema - Speaking</li>
					<li>Unit 13: Films and Cinema - Listening</li>
					<li>Unit 13: Films and Cinema - Writing</li>
					<li>Unit 13: Films and Cinema - Language Focus</li>
					<li>Unit 13: Films and Cinema - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 14: The World Cup - Giải bóng đá vô địch thế giới</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 14: The World Cup - Reading</li>
					<li>Unit 14: The World Cup - Speaking</li>
					<li>Unit 14: The World Cup - Listening</li>
					<li>Unit 14: The World Cup - Writing</li>
					<li>Unit 14: The World Cup - Language Focus</li>
					<li>Unit 14: The World Cup - Vocabulary</li>
					<li>Test Yourself E Unit 12 - 14 English 10</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 15: Cities - Những thành phố</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 15: Cities - Reading</li>
					<li>Unit 15: Cities - Speaking</li>
					<li>Unit 15: Cities - Listening</li>
					<li>Unit 15: Cities - Writing</li>
					<li>Unit 15: Cities -Language Focus</li>
					<li>Unit 15: Cities - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 16: Historical Places - Di tích lịch sử</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 16: Historical Places - Reading</li>
					<li>Unit 16: Historical Places - Speaking</li>
					<li>Unit 16: Historical Places - Listening</li>
					<li>Unit 16: Historical Places - Writing</li>
					<li>Unit 16: Historical Places - Language Focus</li>
					<li>Unit 16: Historical Places - Vocabulary</li>
					<li>Test Yourself F Unit 15 - 16 English 10</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	