@extends('admindetail.layouts.master')
@section('content')
    <script>
            var contants = {
                mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}"
            }

    </script>
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <b>LỊCH SỬ HỌC TẬP</b>
            </h3>
        </section>
        <div>
            <a href="{{ url('/admin/student_report') }}"> 
                <button type="button" class="btn btn-primary"> <b> Quay lại</b></button>
            </a>
        </div>
        <div style="margin-bottom: 10px"></div>
        @if (@isset($list_classes) && ($list_classes != null))

        <!-- Main content -->
                <section class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                                <tr class="background">
                                    <th style="width: auto">STT</th>
                                    <th style="width: auto">Năm học</th>
                                    <th style="width: auto">Lớp</th>
                                    <th style="width: auto">Giáo viên chủ nhiệm</th>
                                    <th style="width: auto">Trường</th>
                                    <th style="width: auto">Ghi chú</th>                       
                                </tr>
                                @foreach($list_classes as $index => $classes)
                                <tr>
                                        <td>
                                            {{$index+1}}</td>
                                        </td>
                                        <td>
                                            {{$classes->academic_year_id}}</td>
                                        </td>
                                        <td>
                                            {{$classes->name_class}}</td>
                                        </td>
                                        <td>
                                            {{$classes->name_teacher}}</td>
                                        </td>
                                        <td>THPT Nguyễn Khuyến - Vĩnh Bảo - Hải Phòng</td>
                                        <td>
                                            {{$classes->note}}
                                        </td>                              
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                            </div>
                        </div>
                    </div>

                </section>
        <!-- /.content -->
        @endif
    </div>
@endsection
