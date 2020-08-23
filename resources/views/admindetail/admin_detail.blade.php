@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-12">
        <h3 class="page-title"> Số liệu thống kê
        </h3>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span >{{$countStudent}}</span>
                        </div>
                        <div class="desc"> Số lượng học sinh </div>
                    </div>
                </a>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span  >{{$countTeacher}}</span> </div>
                        <div class="desc"> Số lượng giáo viên </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span  >{{$countClasses}}</span> </div>
                        <div class="desc"> Số lượng lớp học </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
