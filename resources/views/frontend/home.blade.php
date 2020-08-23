 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@extends('layout.master')
@section('content')
<!-- Presentation -->
    <div class="presentation-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInLeftBig">
                    <h1 style="color:#1c3691 ">Chúng tôi là trường <span class="violet">THPT Nguyễn Khuyến</span>, xin chào mừng các bạn.</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider ảnh -->
    <div class="slider-container" style="background: #ffff">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 slider">
                    <div class="flexslider">
                         <ul class="slides">
                                <li data-thumb="assets/img/slider/67.jpg">
                                    <img src="assets/img/slider/67.jpg" >
                                    <div class="flex-caption">
                                        Chúng tôi học sinh THPT Nguyễn Khuyến
                                    </div>
                                </li>
                                <li data-thumb="assets/img/slider/12.jpg">
                                    <img src="assets/img/slider/12.jpg">
                                    <div class="flex-caption">
                                        Học sinh trường THPT Nguyễn Khuyến xếp hình bản đồ Tổ quốc.
                                    </div>
                                </li>
                                <li data-thumb="assets/img/slider/cs1.jpg">
                                    <img src="assets/img/slider/cs1.jpg">
                                    <div class="flex-caption">
                                        Học sinh THPT Nguyễn Khuyến tốt nghiệp
                                    </div>
                                </li>
                                <li data-thumb="assets/img/slider/cs2.jpg">
                                    <img src="assets/img/slider/cs2.jpg">
                                    <div class="flex-caption">
                                        Những hình ảnh vui vẻ của học sinh THPT Nguyễn Khuyến
                                    </div>
                                </li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- THPT -->
<div class="work-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials-title wow fadeIn">
                    <h2 style="width: 280px; color: #1c3691">Mái Trường Tam Nguyên</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
                    <div role="tabpanel">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/HT.png" alt="" data-at2x="assets/img/testimonials/HT.png">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        <p style="color: #1c3691">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ĐỊNH HƯỚNG TƯƠNG LAI CỦA NHÀ TRƯỜNG LÀ:</b></p>
                                        <p style="color: #1c3691"><b>Sứ mệnh</b>: Trường THPT Nguyễn Khuyến là địa chỉ tin cậy cho mọi người đến công tác và học tập</p>
                                        <p style="color:#1c3691 "><b>Tầm nhìn</b>: Đến năm 2025 Trường THPT Nguyễn Khuyến trở thành trường THPT tiêu biểu của thành phố Hải Phòng với mục tiêu giáo dục mới, kết hợp "Dạy chữ và dạy người" </p>
                                        <p style="color:#1c3691"><b>Giá trị cốt lõi</b>: Chú trọng và chất lượng hiệu quả giáo dục, đảm bảo sản phẩm đào tạo đáp ứng nhu cầu ngày càng cao của xã hội</p>
                                        <br>
                                        
                                    </p>
                                    <p style="text-align: right;">
                                        <a href="http://www.nguyendinhminh.net/">Hiệu Trưởng Nguyễn Đình Minh</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/HT.png" alt="" data-at2x="assets/img/testimonials/HT.png">
                                </div>
                                <div class="testimonial-text">
                                    <p style="color: #1c3691" >
                                        "Trường THPT Nguyễn Khuyễn cuộc hành trình từ con số 0 đến "Chuẩn Quốc gia"<br>
                                    </p>
                                    <p style="text-align: right;">
                                        <a href="http://www.nguyendinhminh.net/">Hiệu Trưởng Nguyễn Đình Minh</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="testimonial-image">
                                    <img src="assets/img/testimonials/HT.png" alt="" data-at2x="assets/img/testimonials/HT.png">
                                </div>
                                <div class="testimonial-text">
                                    <p style="color: #1c3691">
                                        "Trường THPT Nguyễn Khuyến, tiền thân là trường THPT Bán công Vĩnh Bảo bắt đầu từ con số 0. Trong 20 năm cuộc hành trình gian lao, các thế hệ thầy và trò nhà trường đã thêm vào trước số 0 đó những chữ số có nghĩa lớn dần để tạo thành mái trường này. Đó là kết tinh của tâm lực, trí lực, công lực và cả lòng say mê của mấy vạn con người vì yêu giáo dục mà dâng hiến."<br>
                                    </p>
                                    <p style="text-align: right;">
                                        <a href="http://www.nguyendinhminh.net/" target="_blank">Hiệu Trưởng Nguyễn Đình Minh</a>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<div class="testimonials-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn">
                    <h2 style="color: #1c3691";>Lịch hoạt động</h2>
                </div>
            </div>
           
            <div class="row">
               <iframe src="https://calendar.google.com/calendar/embed?src=thptnguyenkhuyenvbhp%40gmail.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
</div>
<div class="col-sm-12 work-title wow fadeIn" style="margin-top: 30px">
    <h2 style="color: #1c3691; width: 300px">Học sinh nói gì về chúng tôi</h2>
</div>
</div>
<div class="testimonial-section">
      <div class="inner-width">
        <h1 style="font-family: iCiel Mijas; font-size: 36px">Thanh xuân của chúng ta - THPT Nguyễn Khuyến</h1>
        <div class="border" style="color:#1c3691; background: #1c3691; margin-top: -5px"></div>
        <div class="testimonial-pics">
          <img src="assets/img/slider/p11.jpg" alt="test-1" class="active">
          <img src="assets/img/slider/p01.jpg" alt="test-2">
          <img src="assets/img/slider/p08.jpg" alt="test-3">
          <img src="assets/img/slider/p6667.jpg" alt="test-4">
        </div>

        <div class="testimonial-contents">
          <div class="testimonial active" id="test-1">
            <p>Nổi bật giữa các môi trường giáo dục học sinh ở độ tuổi THPT, “trường học khác lạ” – THPT Nguyễn Khuyến luôn áp dụng công nghệ vào học tập nhằm thay đổi phương thức tiếp cận bài học và giảm bớt áp lực. Không dừng lại ở việc biến hoá giờ kiểm tra thành gameshow, để học sinh có thể toàn diện phát triển</p>
            <span class="description">Lã Thị nguyệt / 12A3</span>
          </div>

          <div class="testimonial" id="test-2">
            <p>Ở THPT Nguyễn Khuyến, mỗi bạn học sinh đều có một cá tính riêng, em đã học được cách kiềm chế, giảm bớt cái tôi để có thể hòa hợp, thích nghi với mọi người. Ngay từ khi bắt đầu học ở THPT Nguyễn Khuyến, em đã đặt mục tiêu lớn nhất. Cảm ơn THPT Nguyễn Khuyến đã giúp em hoàn thiện mình hơn, giúp em cố gắng hơn, động lực hơn. Sau tất cả, em biết rằng nếu không có THPT Nguyễn Khuyến thì sẽ không có sự phát triển của em ngày hôm nay</p>
            <span class="description">Trần Hạnh Phúc / 11B6</span>
          </div>

          <div class="testimonial" id="test-3">
            <p>Mái trường THPT Nguyễn Khuyến là một môi trường học tập lý tưởng cho các bạn học sinh. Một mái trường - một ngôi nhà chung đã viết lên ước mơ của chúng em. Nơi có những con người luôn tận tụy và hết mình với những thế hệ học trò. Nơi chúng ta sẽ tìm được những người bạn luôn sát cánh bên ta. Cảm ơn THPT Nguyễn Khuyến vì những điều tốt đẹp nhất</p>
            <span class="description">Đỗ Thúy Hằng / 10C6</span>
          </div>

          <div class="testimonial" id="test-4">
            <p>Thời gian thấm thoắt thoi đưa, bây giờ tôi đã là học sinh lớp 12. Tôi biết mình chẳng thể nắm giữ nổi thời gian nhưng tôi vẫn ước thời gian có thể trôi chậm lại để tôi có thể lưu giữ thêm nhiều kỷ niệm tại mái trường này. Tôi nhớ về rặng phi lao sau trường- nơi luôn là điểm hẹn lý tưởng để tránh nắng, tránh nóng trong những giờ học giáo dục thể chất. Tôi yêu lắm sân trường này, mỗi khoảng đất, mỗi chiếc ghế đá đều in dấu những kỷ niệm đẹp của tôi cùng các bạn. Nhớ về dãy nhà A, B, D, những dãy hành lang luôn tràn đầy tiếng cười của các bạn học sinh. Biết rồi ai cũng sẽ phải lớn, phòng học sớm muộn cũng sẽ dành cho các em khoá sau nhưng thật không muốn rời xa thời nô đùa nghịch ngợm này.</p>
            <span class="description">Trần Thái Hoàng / 12A1</span>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $('.testimonial-pics img').click(function(){
        $(".testimonial-pics img").removeClass("active");
        $(this).addClass("active");

        $(".testimonial").removeClass("active");
        $("#"+$(this).attr("alt")).addClass("active");
      });
    </script>
@endsection
