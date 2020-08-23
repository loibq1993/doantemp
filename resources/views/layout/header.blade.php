<!-- Top menu -->
<!-- <nav class="navbar"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a class="navbar-brand" href="{{'/home'}}" style="height:100px;">logo</a>
                </div>
                 <div class="col-sm-6">                   
                    <h1 style="font-family: iCiel Brush Up; font-size: 45px; color: #1c3691; font-weight: bold; white-space: nowrap;">Trường THPT Nguyễn Khuyến</h1>                    
                </div>
                <div class="col-sm-3 header-icon-height" style="margin-top: 40px;">
                    <div class="middle">
                      <a class="btn1" href="https://www.facebook.com/ThptNguyenKhuyenVinhBaoHaiPhong/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a class="btn1" href="http://c3nguyenkhuyenhp.edu.vn/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-google"></i>
                      </a>
                      <a class="btn1" href="https://www.youtube.com/user/nhatgiapnk" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                      </a>
                    </div>
                </div>
            </div>      
    </div>
<!-- </nav> -->
<hr style="margin: 0px;" />
<div class="container">
    <div class="row ">
        <div class="col-sm-12 ">
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown {{ (Route::currentRouteName() == 'home')
                                 ? 'active' : null }}">
                        <a href="{{'/home'}}">Trang Chủ</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="{{'/news?type=notify'}}">THÔNG BÁO</a> 
                    </li>
                    <li class="dropdown ">
                        <a href="{{'/news?type=post'}}">TIN TỨC</a>
                    </li>
                    <li class="dropdown {{ (Route::currentRouteName() == 'chuongtrinhhoc')
                                 ? 'active' : null }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" >
                            CHƯƠNG TRÌNH HỌC
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{'/chuongtrinh10'}}"><i class="fa fa-tachometer" style="font-size: 22px"></i>&emsp;Chương trình khối 10</a></li>
                            <li><a href="{{'/chuongtrinh11'}}"><i class="fa fa-street-view" style="font-size: 22px"></i>&emsp;Chương trình khối 11</a></li>
                            <li><a href="{{'/chuongtrinh12'}}"><i class="fa fa-thumbs-o-up" style="font-size: 22px"></i>&emsp;Chương trình khối 12</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ (Route::currentRouteName() == 'khaothi')
                                 ? 'active' : null }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" >
                            KHẢO THÍ
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{'/studentinfo'}}"><i class="fa fa-user" style="font-size:20px"></i>&emsp;Xem Thông Tin Học Sinh</a></li>
                            <li><a href="{{'/xemdiem'}}"><i class="fa fa-trophy" style="font-size:20px"></i>&emsp;Xem Điểm</a></li>
                        </ul>
                    </li>             
                    <li class="dropdown">
                        <a href="{{'/lienhesky'}}">LIÊN HỆ VỚI CHÚNG TÔI</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr class="header-margin-bottom" />
<script>
    $("#top-navbar-1 li.dropdown").click(function(e){
        $(this).toggleClass("open");
    });
</script>