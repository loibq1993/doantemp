@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
   
   
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gg"></i>
                <span class="caption-subject font-dark bold uppercase">LỊCH SỬ HỌC TẬP CỦA HỌC SINH</span>
            </div>          
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach
            <meta name="csrf-token" content="{{ csrf_token() }}" class="content">
            <form action="{{ url('/admin/student_report') }}" class="form-horizontal form-row-seperated" method="post" id="list-student-form">
                {{ csrf_field() }} 
                <div class="col-sm-2">
                    <div class="form-group-email">
                        <span class="label-input100">ID</span>
                        <input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-group-email">
                        <span class="label-input100">Họ và tên</span>
                        <input type="text" class="form-control" id="name_search" name="name_search" @if(@isset($name_search)) value="{{$name_search}}" @endif>
                    </div>
                </div>               
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-1">
                            <button type="submit" class="btn btn-primary" name="btn">Tìm kiếm</button>
                        </div>
                        <div class="col-xs-1"></div>
                    </div>                  
                </div>              
            </form>
            </div>
        </div>
    </div>
    <div id='show_data_export'>
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="caption-subject bold uppercase"> DANH SÁCH HỌC SINH </span>
                        <br>
                    </div>  
                    <div class="col-xs-5" style="float: left;">
            @if (@isset($users) && $users != null)  
            <br>
            <br>
            <div class="portlet-title" style="text-align: left;">   
                <p class="violet" style="margin-left: -150px"><b>Kết quả: {{$users->total()}}</b></p>
            </div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered" style="white-space:nowrap; margin-left: -150px">
                        <tr>
                            <th >Mã học sinh</th>
                            <th >Tên học sinh</th>
                            <th >Ngày sinh</th>
                            <th >Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Xem quá trình học tập</th>                            
                        </tr>
                        @foreach($users as $index => $user)
                            <tr>
                                <td class="userid"  >{{$user->id}}</td>
                                <td >{{$user->name}}</td>

                                <td >{{$user->date_of_birth}}</td>
                                <td >
                                    @if($user->gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')) 
                                        <span class="label label-sm label-info"> Nam </span>
                                    @else 
                                        <span class="label label-sm label-warning"> Nữ </span> 
                                    @endif
                                </td>
                                <td>
                                    {{$user->address}}
                                </td> 
                                <td><a class="label label-sm label-warning" href="{{ url('/admin/student_report_list?stid='.$user->id) }}">Xem quá trình học tập</a></td>    
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $users->links() }}                       
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
                    @if ($users->total() == 0)
                        <div class="portlet-title" style="text-align: left;">
                            <p class="violet"><b>{{ Illuminate\Support\Facades\Config::get('constant.data_not_found') }}</b></p>
                        </div>
                    @endif  
                    @endif        
                </div>              
            </div>
        </div>
    </div>
@endsection
