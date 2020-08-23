<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route("admin_home")}}">Trang chủ</a>
            <i class="fa fa-circle"></i>
        </li>
        {{--<li>--}}
            {{--<span>Dashboard</span>--}}
        {{--</li>--}}
    </ul>
    <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height green" data-placement="top" data-original-title="Change dashboard date range">
            <i class="icon-calendar"></i>&nbsp;
            <span class="thin uppercase hidden-xs">{{date('d-m-Y H:i:s')}}</span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
</div>
<!-- END PAGE BAR -->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        @yield('content')
    </div>
</div>
