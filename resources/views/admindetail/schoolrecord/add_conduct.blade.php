@extends('admindetail.layouts.master')
@section('content')
<h3 class="page-title"><b>Hạnh Kiểm</b></h3>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> {{ $error }}</div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-info">
            <span style="color: blue">{{ session()->get('message') }}</span>
        </div>
    @endif
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_place.js')}}"></script>
    <div class="col-md-10">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <form action="{{ url('/admin/create_conduct') }}" method="POST" id="create-handbook-song-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require">*</i>Loại hạnh kiểm</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name_conduct" style="text-transform: capitalize;"
                       name="name_conduct">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3">Nội dung</label>
            <div class="col-md-6">
                 <textarea type="text" class="form-control" id="note" style="width: 100%; height: 100px" name="note" maxlength="10000"></textarea>
            </div>
        </div>  
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </div>
    </form>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
@if (@isset($conduct) && $conduct != null)

    <div class="col-md-12" style="margin-top: 20px">
        <!-- BEGIN CONDENSED TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-list-alt"></i>Danh sách loại hạnh kiểm:&nbsp;&nbsp;{{$conduct->total()}}</div>
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
                            <th>Mã hạnh kiểm</th>
                            <th >Tên hạnh kiểm</th>
                            <th >Ghi chú</th>
                            <th >Chỉnh Sửa</th>
                            <th >Xoá</th>
                        </tr>
                        @foreach($conduct as $index => $conduct)
                            <tr>
                                <td >
                                    @if (@isset($page) && ($page != null))
                                        {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                     @else
                                        {{$index + 1}}
                                     @endif
                                </td>
                                <td>{{$conduct->id}}</td>
                                <td >{{$conduct->name}}</td>
                                <td >{{$conduct->note}}</td>
                                <td>
                                    <a class="label label-sm label-warning" href="{{ url('/admin/edit_conduct?cdid='.$conduct->id) }}">Chỉnh Sửa</a>
                                </td>
                                <td>
                                    <a class="label label-sm label-warning" href="{{ url('/admin/edit_courses/'.$conduct->id) }}">Xóa</a>
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