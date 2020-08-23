@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>DANH SÁCH TÀI KHOẢN HỌC SINH</strong>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_student_account') }}" method="post" enctype="multipart/form-data" id="list-manager-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">Mã tài khoản:</span>
						<input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Tên học sinh</span>
						<input type="text" class="form-control" id="user_name_search" name="user_name_search" @if(@isset($user_name_search)) value="{{$user_name_search}}" @endif>
					</div>
				</div>

				<br style="clear: left;" />
				<br style="clear: left;" />
				<div class="container-fluid">
					<div class="col-xs-8 text-center form-register" style="margin-bottom: 10px;">
						<button type="submit" class="btn btn-primary">Tìm kiếm</button>
					</div>
				</div>					
			</form>
        <!-- Main content -->
        @if (@isset($list) && $list != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$list->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover list-course">
                    <thead>
                        <tr>
                            <th>Mã tài khoản</th>    
                            <th>Tên học sinh</th>
							<th>Email</th>
							<th>Trạng thái</th>
							<th>Chỉnh Sửa</th>
							<th>Xóa</th>						
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $user)
                            <tr>
                                <td >{{$user->user_id}}</td>
								<td >{{$user->name_user}}</td>
                                <td >{{$user->email}}</td>
								<td >
                                   @if ($user->is_active == 0)
                                        Không hoạt động
                                    @elseif ($user->is_active == 1)
                                        Hoạt động
                                    @endif
                                </td>
								<td >                       
                                    <a class="label label-sm label-warning" href="{{ url('/admin/edit_studentaccount?user_id='.$user->user_id) }}">Chỉnh Sửa</a>
                                </td>
                                <td>
                                    <a href="#modal_delete{{$user->user_id}}" class="label label-sm label-danger" data-toggle="modal">
                                        <i class="fa fa-remove"></i> Xóa</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal_delete{{$user->user_id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><b>Xác Nhận Xóa</b></h4>
                                        </div>
                                        <div class="modal-body" style="font-size: 15pt">Mã Tài Khoản: {{$user->user_id}} <br> Học Sinh: {{$user->name_user}}</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                            <a href="{{ url('/admin/delete_studentaccount/'.$user->id) }}"  class="btn green">OK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $list->links() }}						
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
			@else
				<div class="portlet-title" style="text-align: left;">
					<p class="violet"><b>{{Illuminate\Support\Facades\Config::get('constant.data_not_found')}}</b></p>
				</div>
			@endif	

        </section>
        <!-- /.content -->
    </div>
@endsection
