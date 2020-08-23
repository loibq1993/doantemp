@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>Danh sách chứng chỉ tạm thời</strong>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_student_account') }}" method="post" enctype="multipart/form-data" id="list-manager-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">ID</span>
						<input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Tên học sinh</span>
						<input type="text" class="form-control" id="user_name_search" name="user_name_search" @if(@isset($user_name_search)) value="{{$user_name_search}}" @endif>
					</div>
				</div>
                <div class="col-sm-4">
                    <div class="form-group-email">
                        <span class="label-input100">Số báo danh</span>
                        <input type="text" class="form-control" id="sbd_search" name="sbd_search" @if(@isset($user_sbd)) value="{{$user_name_search}}" @endif>
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
                        <tr>
                            <th >STT</th>
                            <th >Mã phiếu</th>
                            <th>Học sinh</th>        
							<th >Số báo danh</th>
							<th >Năm</th>
							<th >Hội đồng thi</th>
                            <th>Xem chi tiết</th>					
                        </tr>
                        @foreach($list as $index => $user)
                            <tr>
                                <td >{{$index+1}}</td>
								<td >{{$user->name_user}}</td>
								<td >{{$user->user_id}}</td>
                                <td >{{$user->email}}</td>
								<td >
                                   @if ($user->is_active == 0)
                                        Hoạt động
                                    @else 
                                        Không hoạt động
                                    @endif
                                </td>
								<td >
									Chỉnh sửa
                                </td>
                                <td>Xóa</td>
                            </tr>
                        @endforeach
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
