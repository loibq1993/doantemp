@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>Danh Sách Lớp Học</strong> 
            </h3>
        </section>

        <!-- Main content -->
        @if (@isset($list_classes) && ($list_classes != null))
                <section class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                                <tr class="background">
                                    <th style="width: 5%">STT</th>
                                    <th style="width: 5%">Mã lớp</th>
                                    <th style="width: 15%">Tên Lớp</th>
                                    <th style="width: 15%">Năm học</th>
                                    <th style="width: 10%;">Trạng thái</th>
                                    <th style="width: 16%;">Giáo viên CN</th>
                                    <th style="width: 8%">Khối</th>
                                    <th style="width: auto;">Xem danh sách lớp</th>
                                    <th style="width: auto;">Xem môn học</th>
                                    @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)) 
                                    <th style="width: auto;">Chỉnh sửa</th> 
                                    @endif          
                                </tr>
                                @foreach($list_classes as $index => $classes)
                                    <tr>
                                        <td >{{$index+1}}</td>
                                        <td>
                                            {{$classes->id}}
                                        </td>
                                        <td >
                                            {{$classes->name_class}}
                                        </td>
                                        <td >
                                            {{$classes->academic_year_id}}
                                        </td>
                                        <td >
                                            @if ($classes->status_id == 0)
                                                Không Hoạt động
                                            @elseif ($classes->status_id == 1)
                                                Hoạt động
                                            @else
                                                Tốt nghiệp
                                            @endif
                                        </td>
                                        <td >
                                            {{$classes->name_teacher}}
                                        </td>
                                        <td >
                                            @if ($classes->grade_id == 0)
                                                Khối 10
                                            @elseif ($classes->grade_id == 1)
                                               Khối 11
                                            @else 
                                                Khối 12
                                            @endif
                                        </td>
                                        <td>
                                            <a class="label label-sm label-info" href="{{ url('/admin/list_studentclass?cid='.$classes->id) }}">Xem danh sách lớp</a>
                                        </td>
                                        <td>
                                            <a class="label label-sm label-info" href="{{ url('/admin/list_subjectclass?cid='.$classes->id) }}">Xem môn học</a>
                                        </td>
                                        @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)) 
                                        <td>
                                            <a class="label label-sm label-warning" href="{{ url('/admin/edit_classes?id='.$classes->id) }}">Chỉnh Sửa</a>
                                        </td> 
                                        @endif                         
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                                {{ $list_classes->links() }}
                            </div>
                        </div>

                        <!-- /.box-body -->
                    </div>

                </section>
        @endif
        <!-- /.content -->
    </div>
@endsection
