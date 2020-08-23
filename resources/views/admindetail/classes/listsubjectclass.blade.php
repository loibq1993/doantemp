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
                @if (@isset($classes) && ($classes != null))
            <strong>Danh sách môn học lớp {{$classes->name_class}}</strong>
            @endif
            </h3>
        </section>
        <div>
            <a href="{{ url('/admin/list_classes') }}"> 
                <button type="button" class="btn btn-primary"> <b> Quay lại</b></button>
            </a>
        </div>
        <div style="margin-bottom: 10px"></div>
        @if (@isset($subjects) && ($subjects != null))

        <!-- Main content -->
                <section class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered " style="width: 100%">
                                <tr class="background">
                                    <th>STT</th>
                                    <th>Tổ môn </th>
                                    <th>Mã môn học</th>
                                    <th>Tên môn học</th>                  
                                </tr>
                                @foreach($subjects as $index => $subject)
                                <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$subject->name}}</td>
                                        <td>{{$subject->id}}</td>
                                        <td>{{$subject->name_subject}}</td>                  
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
