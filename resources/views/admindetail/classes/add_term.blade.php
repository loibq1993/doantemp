@extends('admindetail.layouts.master')
@section('content')
@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)) 
    <h3 class="page-title">
        <strong>Thêm học kỳ</strong>
    </h3>
    
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> {{ $error }}</div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-info">
            <span style="color: blue">{{ session()->get('message') }}</span>
        </div>
    @endif
    <form action="{{ url('/admin/addterm') }}" method="POST" id="create-term-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <div class="form-group ">
            <label class="control-label col-md-3">Năm học</label>
            <div class="col-md-6">
                <select class="form-control" id="academic_id" name="academic_id">
                    @foreach($academic_id as $item)
                        <option value="{{$item->id}}">
                            {{$item->name_of_school_year}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3">Học kỳ</label>
            <div class="col-md-6">
                <select class="form-control" id="name_term" name="name_term">
                    <option >Học kỳ 1</option>
                    <option >Học kỳ 2</option>
                </select>
            </div>
        </div>  
        <div class="form-group ">
            <label class="control-label col-md-3">Trạng thái</label>
            <div class="col-md-6">
                <select class="form-control" id="status" name="status">
                    <option value="0">Hoạt động</option>
                    <option value="1">Không hoạt động</option>
                </select>
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
    <ul class="page-breadcrumb">
    </ul>
    <div class="page-toolbar">
    </div>
@endif
@if (@isset($term) && $term != null)
<div class="col-md-12">
    <!-- BEGIN CONDENSED TABLE PORTLET-->
    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-list-alt"></i>Danh sách học kỳ:&nbsp;&nbsp;{{$term->total()}}</div>
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
                        <th >Mã học kỳ</th>
                        <th >Học kỳ</th>
                        <th >Năm học</th>
                        <th >Trạng thái</th>
                        @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)) 
                        <th >Chỉnh Sửa</th>
                        @endif
                    </tr>
                    @foreach($term as $index => $t)
                        <tr>
                            <td >
                                @if (@isset($page) && ($page != null))
                                    {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                 @else
                                    {{$index + 1}}
                                 @endif
                            </td>
                            <td >{{$t->id}}</td>
                            <td >{{$t->name_term}}</td>
                            <td >{{$t->name_of_school_year}}</td>
                            <td >
                                @if ($t->status == 0)
                                <span class="label label-sm label-info">Hoạt động</span>
                                @elseif ($t->status == 1)
                                <span class="label label-sm label-info">Không hoạt động</span>   
                                @endif
                            </td>
                            @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class)) 
                            <td>
                                <a class="label label-sm label-warning" href="{{ url('/admin/edit_term?id='.$t->id) }}">Chỉnh Sửa</a>
                            </td>
                            @endif
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
