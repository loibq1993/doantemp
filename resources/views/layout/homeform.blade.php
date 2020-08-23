<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường THPT Nguyễn Khuyến</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<!-- trượt mướt -->
{{-- <audio src="assets/img/slider/hopeful.mp3" autoplay></audio> --}}
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <SCRIPT LANGUAGE = "Javascript">
    $(document).ready(function() {
      $("a[href*='#']:not([href='#])").click(function() {
        let target = $(this).attr("href");
        $('html,body').stop().animate({
          scrollTop: $(target).offset().top
        }, 1000);
        event.preventDefault();
      });
    });</SCRIPT>
    <!-- <audio src="https://hocban.vn/wp-content/uploads/MUSIC/chuc-tet-to-ny.mp3" autoplay></audio>
    <script type="text/javascript" src="https://hocban.vn/wp-content/uploads/TrangTriTet2018/phaohoa.js"></script>
    <script type='text/javascript'> -->
<!-- //<![CDATA[
document.write('<div class="tet-2019"><img class="left-2019" id="left-2020" src="https://lh4.googleusercontent.com/-HXBsyeylNsk/XDQOO3VSvjI/AAAAAAAACm0/mN6mv1PCfgc8o3PrRm_kvBWN7KmMjsPqQCLcBGAs/s1600/tet1.png"/><img class="right-2019" id="right-2020" src="https://lh4.googleusercontent.com/-tlsSRiDAay8/XDQOjlNI5uI/AAAAAAAACm8/66f7Unvw1J039PCBEUX9q-gFOfUw8JoGgCLcBGAs/s1600/tet2.png"/></div><style>#left-2020{width: 130px;left:0;z-index:7;position:fixed;;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}#right-2020{width: 130px;right:0;z-index:7;position:fixed;;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}.left-2019{top:0px}.right-2019{top:0px}.text-2019-l{top:50px}.text-2019-r{top:50px}@media screen and (max-width:1024px){.tet-2019{display:none}}@media screen and (max-width:1440px){#shareduyblogs{display:none}}</style>')
//]]>
</script>
<script>//<![CDATA[
      var lastScroll = 0;
      jQuery(document).ready(function($) {
        $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          if (scroll > lastScroll) {
            $('#right-2020').removeClass('left-2019').addClass('text-2019-l')
            $('#left-2020').removeClass('right-2019').addClass('text-2019-r')
          } else if (scroll < lastScroll) {
            $('#right-2020').addClass('left-2019').removeClass('text-2019-l')
$('#left-2020').addClass('right-2019').removeClass('text-2019-r')
          }
          lastScroll = scroll;
        })
      })
//]]></script> -->

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/media-queries.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/front-end-custom.css') }}">
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.printPage.js')}}"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  

    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


    <link rel="shortcut icon" href="{{ asset('assets/ico/favico_new.ico')}}">
</head>
<body class="preloading" >
<!-- Hiệu ứng load -->
{{-- <div class="load">
    <img src="assets/img/slider/planet.gif">
</div> --}}
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="216145682446245"
  theme_color="#20cef5"
  logged_in_greeting="Xin chào ! Chúng tôi có thể giúp gì bạn"
  logged_out_greeting="Xin chào ! Chúng tôi có thể giúp gì bạn">
      </div>
@yield('main_content')

<script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('assets/js/jflickrfeed.min.js')}}"></script>
<script src="{{ asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('assets/js/jquery.ui.map.min.js')}}"></script>
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<script type="text/javascript" src="//nhanh.vn/js/events/newyear.js"></script>


</body>

</html>
