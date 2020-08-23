@extends('admindetail.layouts.master')
@section('content')        
    <h3 class="page-title"><strong>Tạo tổ môn</strong></h3>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> {{ $error }}</div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-info">
            <span style="color: blue">{{ session()->get('message') }}</span>
        </div>
    @endif
    <form action="{{ url('/admin/create_specialize_save') }}" method="POST" id="create-specialize-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-md-3">Tên tổ môn</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name" name="name" maxlength="190" style="text-transform: capitalize;">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Ghi chú</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="note" name="note" maxlength="190" style="text-transform: capitalize;">
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </div>

        <ul class="page-breadcrumb">
        </ul>
        <div class="page-toolbar">
        </div>

        <div class="col-md-12">
        <!-- BEGIN CONDENSED TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-list-alt"></i>Danh sách tổ môn: <b>{{$specialize->total()}}</b> </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover list-specialize">
                        <tr>
                            <th >STT</th>
                            <th >Tên tổ môn</th>
                            <th >Ghi chú</th>
                            <th >Chỉnh Sửa</th>
                            <th >Xóa</th>
                        </tr>
                        @foreach($specialize as $index => $special)
                            <tr>
                                <td >
                                    @if (@isset($page) && ($page != null))
                                        {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                     @else
                                        {{$index + 1}}
                                     @endif
                                </td>
                                <td >{{$special->name}}</td>
                                <td >{{$special->note}}</td>
                              	<td>
                                    <a class="label label-sm label-warning" href="{{ url('/admin/edit_specialize?id='.$special->id) }}">Chỉnh Sửa</a>
                                </td>
                                <td>
                                    <a href="#modal_delete{{$special->id}}" class="label label-sm label-danger" data-toggle="modal">
                                        <i class="fa fa-remove"></i> Xóa</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal_delete{{$special->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Xác nhận xóa</h4>
                                        </div>
                                        <div class="modal-body">Chắc chắn xóa {{$special->name}} ?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                            <a href="{{ url('/admin/delete_specialize/'.$special->id) }}"  class="btn green">OK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-7">
            <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                {{ $specialize->links() }}
            </div>
        </div>
</div>
    </form>
    
@endsection
