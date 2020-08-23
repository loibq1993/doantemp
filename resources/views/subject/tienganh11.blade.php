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
	<h10>Tiếng Anh Lớp 11</h10>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 1: Friendship - Tình bạn</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 1: Friendship - Reading</li>
				<li>Unit 1: Friendship - Speaking</li>
				<li>Unit 1: Friendship - Listening</li>
				<li>Unit 1: Friendship - Writting</li>
				<li>Unit 1: Friendship - Language Focus</li>
				<li>Unit 1: Friendship - Vocabulary</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 2: Personal Experiences - Những kinh nghiệm cá nhân</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 2: Personal Experiences - Reading</li>
				<li>Unit 2: Personal Experiences - Speaking</li>
				<li>Unit 2: Personal Experiences - Listening</li>
				<li>Unit 2: Personal Experiences - Writing</li>
				<li>Unit 2: Personal Experiences - Language Focus</li>
				<li>Unit 2: Personal Experiences - Vocabulary</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 3: A party - Một buổi tiệc</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 3: A party - Reading</li>
				<li>Unit 3: A party - Speaking</li>
				<li>Unit 3: A party - Listening</li>
				<li>Unit 3: A party - Writing</li>
				<li>Unit 3: A party - Language Focus</li>
				<li>Unit 3: A party - Vocabulary</li>
				<li>Test Yourself A Unit 1 - 3 English 11</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 4: Volunteer work - Công tác tình nguyện</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 4: Volunteer work - Reading</li>
				<li>Unit 4: Volunteer work - Speaking</li>
				<li>Unit 4: Volunteer work - Listening</li>
				<li>Unit 4: Volunteer work - Writing</li>
				<li>Unit 4: Volunteer work - Language Focus</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 5: Illiteracy - Nạn mù chữ</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 5: Illiteracy - Reading</li>
				<li>Unit 5: Illiteracy - Speaking</li>
				<li>Unit 5: Illiteracy - Listening</li>
				<li>Unit 5: Illiteracy - Writing</li>
				<li>Unit 5: Illiteracy - Language Focus</li>
				<li>Unit 5: Illiteracy - Vocabulary</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
	<div class="col-sm-12 testimonials-title wow fadeIn"></div>
	<div id="baihoc">
		<div id="tieude1">
			<h4>Unit 6: Competitions - Những cuộc thi đấu</h4>
		</div>
		<div id="noidung">
			<ul>
				<li>Unit 6: Competitions - Reading</li>
				<li>Unit 6: Competitions - Speaking</li>
				<li>Unit 6: Competitions - Listening</li>
				<li>Unit 6: Competitions - Writing</li>
				<li>Unit 6: Competitions - Language Focus</li>
				<li>Unit 6: Competitions - Vocabulary</li>
				<li>Test Yourself B Unit 4 - 6 English 11</li>
			</ul>
		</div>
		<div id="detail">
			<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
		</div>
	</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 7: World population - Dân số thế giới</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 7: World population - Reading</li>
					<li>Unit 7: World Population - Speaking</li>
					<li>Unit 7: World population - Listening</li>
					<li>Unit 7: World population - Writing</li>
					<li>Unit 7: World population - Language Focus</li>
					<li>Unit 7: World population - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 8: Celebrations - Lễ kỉ niệm</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 8: Celebrations - Reading</li>
					<li>Unit 8: Celebrations - Speaking</li>
					<li>Unit 8: Celebrations - Writing</li>
					<li>Unit 8: Celebrations - Language Focus</li>
					<li>Unit 8: Celebrations - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 9: The post office - Bưu chính viễn thông</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 9: The post office - Reading</li>
					<li>Unit 9: The post office - Speaking</li>
					<li>Unit 9: The post office - Listening</li>
					<li>Unit 9: The post office - Writing</li>
					<li>Unit 9: The post office - Language Focus</li>
					<li>Unit 9: The post office - Unit 9: The post office - Vocabulary</li>
					<li>Test Yourself C Unit 7 - 9 English 11</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 10: Nature in Danger - Thiên nhiên đang bị đe dọa</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 10: Nature in Danger - Reading</li>
					<li>Unit 10: Nature in Danger - Speaking</li>
					<li>Unit 10: Nature in Danger - Listening</li>
					<li>Unit 10: Nature in Danger - Writing</li>
					<li>Unit 10: Nature in Danger - Language Focus</li>
					<li>Unit 10: Nature in Danger - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 11: Sources of energy - Các nguồn năng lượng</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 11: Sources of energy - Reading</li>
					<li>Unit 11: Sources of energy - Speaking</li>
					<li>Unit 11: Sources of energy - Listening</li>
					<li>Unit 11: Sources of energy - Writing</li>
					<li>Unit 11: Sources of energy - Language Focus</li>
					<li>Unit 11: Sources of energy - Vocabulary</li>
					<li>Test Yourself D Unit 10 - 11 English 11</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 12: The Asian Games - Thế vận hội thể thao châu Á</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 12: The Asian Games - Reading</li>
					<li>Unit 12: The Asian Games - Speaking</li>
					<li>Unit 12: The Asian Games - Listening</li>
					<li>Unit 12: The Asian Games - Writing</li>
					<li>Unit 12: The Asian Games - Language Focus</li>
					<li>Unit 12: The Asian Games - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 13: Hobbies - Sở thích</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 13: Hobbies - Reading</li>
					<li>Unit 13: Hobbies - Speaking</li>
					<li>Unit 13: Hobbies - Listening</li>
					<li>Unit 13: Hobbies - Writing</li>
					<li>Unit 13: Hobbies - Language Focus</li>
					<li>Unit 13: Hobbies - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 14: Recreation - Thú tiêu khiển</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 14: Recreation - Reading</li>
					<li>Unit 14: Recreation - Speaking</li>
					<li>Unit 14: Recreation - Listening</li>
					<li>Unit 14: Recreation - Writing</li>
					<li>Unit 14: Recreation - Language Focus</li>
					<li>Unit 14: Recreation - Vocabulary</li>
					<li>Test Yourself E Unit 12 - 14 English 11</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 15: Space conquest - Không gian vũ trụ</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 15: Space conquest - Reading</li>
					<li>Unit 15: Space conquest - Speaking</li>
					<li>Unit 15: Space conquest - Listening</li>
					<li>Unit 15: Space conquest - Writing</li>
					<li>Unit 15: Space conquest -Language Focus</li>
					<li>Unit 14: Recreation - Vocabulary</li>
					<li>Unit 15: Space conquest - Vocabulary</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
		<div class="col-sm-12 testimonials-title wow fadeIn"></div>
		<div id="baihoc">
			<div id="tieude1">
				<h4>Unit 16: The wonders of the world - Kỳ quan thế giới</h4>
			</div>
			<div id="noidung">
				<ul>
					<li>Unit 16: The wonders of the world - Reading</li>
					<li>Unit 16: The wonders of the world - Speaking</li>
					<li>Unit 16: The wonders of the world - Listening</li>
					<li>Unit 16: The wonders of the world - Writing</li>
					<li>Unit 16: The wonders of the world - Language Focus</li>
					<li>Unit 16: The wonders of the world - Vocabulary</li>
					<li>Test Yourself F Unit 15 - 16 English 11</li>
				</ul>
			</div>
			<div id="detail">
				<button type="button" class="btn btn-primary" style="border-radius: 5px">Xem chi tiết</button>
			</div>
		</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection	