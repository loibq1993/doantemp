@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
            validate_date :  "{{ Illuminate\Support\Facades\Config::get('constant.validate_date') }}",
            check_date_now : "{{ Illuminate\Support\Facades\Config::get('constant.check_date_now') }}",
            greaterThan : "{{ Illuminate\Support\Facades\Config::get('constant.greaterThan') }}"
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_create_course.js')}}"></script>
    <h3 class="page-title">
		<strong>Tạo năm học</strong>
	</h3>
    <form action="{{ url('/admin/addschoolyear') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        @if(session()->has('message'))   
            <div class="alert alert-info">                                 
                <span class="show-message">{{ session()->get('message') }}</span>
            </div>
        @elseif (session()->has('errors'))
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <strong>Lỗi! </strong>{{ $error }}
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <label class="control-label col-md-3"><i class="icon-require"></i> Tên Năm học</label>
            <div class="col-md-4">
                <input type="text" class="form-control" style="text-transform: capitalize;" id="name_school_year" name="name_school_year" maxlength="190"">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require"></i> Thời gian bắt đầu</label>
            <div class="col-md-4">
                <input type="date" class="form-control" id="start_time" name="start_time">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require"></i> Thời gian kết thúc</label>
            <div class="col-md-4">
                <input type="date" class="form-control" id="end_time" name="end_time">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require"></i> Trạng thái</label>
            <div class="col-md-4">
                <select class="form-control" id="status" name="status">
                    <option value="0">Hoạt động</option>
                    <option value="1">Không hoạt động</option>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                </div>
            </div>
        </div>
    </form>


        <ul class="page-breadcrumb">
        </ul>
        <div class="page-toolbar">
        </div>
@if (@isset($courses) && $courses != null)
    <div class="col-md-12">
        <!-- BEGIN CONDENSED TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-list-alt"></i>Danh sách năm học:&nbsp;&nbsp;{{$courses->total()}}</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover list-course">
                        <tr>
                            <th >STT</th>
                            <th >Năm học</th>
                            <th >Ngày Bắt Đầu</th>
                            <th >Ngày Kết Thúc</th>
                            <th >Trạng thái</th>
                            <th >Chỉnh Sửa</th>
                        </tr>
                        @foreach($courses as $index => $course)
                            <tr>
                                <td >
                                    @if (@isset($page) && ($page != null))
                                        {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                     @else
                                        {{$index + 1}}
                                     @endif
                                </td>
                                <td >{{$course->name_of_school_year}}</td>
                                <td >{{Illuminate\Support\Carbon::parse($course->start_time)->format('d-m-Y')}}</td>
                                <td >{{Illuminate\Support\Carbon::parse($course->end_time)->format('d-m-Y')}}</td>
                                <td >
                                    @if ($course->status == 0)
                                    <span class="label label-sm label-info">Hoạt động</span>
                                    @elseif ($course->status == 1)
                                    <span class="label label-sm label-info">Không hoạt động</span>   
                                    @endif
                                </td>
                                <td>
                                    <a class="label label-sm label-warning" href="{{ url('/admin/edit_academic?id='.$course->id) }}">Chỉnh Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-7">
        </div>
        <!-- END CONDENSED TABLE PORTLET-->
    </div>
@endif
@endsection
