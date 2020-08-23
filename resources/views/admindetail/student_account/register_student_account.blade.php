@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_export_data.js')}}"></script>
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">TẠO TÀI KHOẢN CHO HỌC SINH</span>
            </div>
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach

            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ url('/admin/addstudentaccount')}}" class="form-horizontal form-row-seperated" method="POST" id="export-data-form">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3"><i class="icon-require">*</i> Chọn Lớp Học</label>
                        <div class="col-md-4">
                            <select class="bs-select form-control" id="class_name" name="class_name">
                                @foreach($list_classes as $item)
                                    <option value="{{$item->id}}-{{$item->name_class}}"  @if(isset($option['class_name']) && $option['class_name'] == $item->id."-".$item->name_class) selected @endif>
                                    {{$item->name_class}}
                                </option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green" id="btn_export_data">Xem dữ liệu</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <h3><strong>Danh sách lớp</strong></h3>
        @if (@isset($list_student) && ($list_student != null))
                <section class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                                <tr class="background">
                                    <th style="width: auto">STT</th>
                                    <th style="width: 11%">Mã học sinh</th>
                                    <th style="width: auto">Tên học sinh</th>
                                    <th style="width: auto">Giới tính</th>
                                    <th style="width: auto">Ngày sinh</th>
                                    <th>Tạo tài khoản</th>                       
                                </tr>
                                @foreach($list_student as $index => $student)
                                <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$student->id}}</td>
                                        <td style="text-transform: capitalize">{{$student->name}}</td>
                                        <td>
                                            @if($student->gender==0)
                                                Nam
                                            @else
                                                Nữ
                                            @endif
                                        </td>
                                        <td>{{Illuminate\Support\Carbon::parse($student->date_of_birth)->format('d-m-Y')}}</td>
                                        <td>
                                            @if($student->user_id == null) 
                                                <a class="label label-sm label-warning" href="{{ url('/admin/addaccount?stid='.$student->id) }}">Tạo tài khoản</a>
                                            @else 
                                                <span class="label label-success">Đã tạo tài khoản</span>
                                            @endif
                                            
                                        </td>                            
                                </tr>
                                @endforeach
                            </table>
                    </div>
                </section>
        @endif
@endsection