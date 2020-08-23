<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html"></a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{ asset('/adminlte/img/avatar5.png') }}" />
                        <span class="username username-hide-on-mobile"> {{ Illuminate\Support\Facades\Auth::guard('admins')->user()->user_name }} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <?php 
                                $manager = Auth::guard("admins")->user();                                
                            ?>
                            <a href="{{ url('/admin/edit_manager?id='.$manager->id) }}">
                                <i class="icon-user"></i> Tài khoản </a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="app_calendar.html">--}}
                                {{--<i class="icon-calendar"></i> My Calendar </a>--}}
                        {{--</li>--}}
                        <li class="divider"> </li>
                        <li>
                            <a href="{{ url('/admin/logout') }}">
                                <i class="icon-key"></i> Đăng Xuất </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->