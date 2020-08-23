@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                Danh sách Khen Thưởng/ Kỷ Luật
            </h3>
        </section>

        <!-- Main content -->
@if (@isset($list_bonus) && ($list_bonus != null))
        <section class="content">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                        <tr class="background">
                            <th style="width: 5%">STT</th>
                            <th style="width: 30%">Tên Khen thưởng/ Kỷ luật</th>
                            <th >Phân Loại</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>                            
                        </tr>
                        @foreach($list_bonus as $index => $bonus)
                            <tr>
                                <td >{{$index+1}}</td>
                                <td >
                                    {{$bonus->name}}
                                </td>
                                <td >
                                    @if ($bonus->type == 0)
                                        Khen Thưởng
                                    @elseif ($bonus->type == 1)
                                        Kỷ Luật
                                    @endif
                                </td>
                                <td><a class="label label-sm label-warning" href="{{ url('#'.$bonus->id) }}">Chỉnh Sửa</a></td>
                                <td><a class="label label-sm label-warning" href="{{ url('#'.$bonus->id) }}">Xóa</a></td>                              
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $list_bonus->links() }}
                    </div>
                </div>

                <!-- /.box-body -->
            </div>

        </section>
@endif
        <!-- /.content -->
    </div>
@endsection
