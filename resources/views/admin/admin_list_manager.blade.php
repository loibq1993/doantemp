@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>Tìm kiếm thành viên ban quản lý web</strong>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_manager') }}" method="post" enctype="multipart/form-data" id="list-manager-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">ID</span>
						<input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Username</span>
						<input type="text" class="form-control" id="user_name_search" name="user_name_search" @if(@isset($user_name_search)) value="{{$user_name_search}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Vai trò</span>
						<input type="text" class="form-control" id="manage_place_search" name="manage_place_search" @if(@isset($manage_place_search)) value="{{$manage_place_search}}" @endif>
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
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th >Mã tài khoản</th>
                            <th >Username</th>        
							<th >Email</th>
							<th >Vai trò</th>
							<th >Tình Trạng</th>
							<th >Chỉnh Sửa</th>							
                        </tr>
                        @foreach($list as $user)
                            <tr>
                                <td >{{$user->id}}</td>
								<td >{{$user->user_name}}</td>
                                <td >{{$user->email}}</td>
								<td >{{$user->name}}</td>
								<td >
									@if($user->status == Illuminate\Support\Facades\Config::get('constant.user_status.user_active')) 
										<span class="label label-sm label-info">Đã kích hoạt</span>
									@else 
										<span class="label label-sm label-warning">Chưa kích hoạt</span>
									@endif
								</td>
								<td >
									<?php
		    							if ($user->manage_place != Config::get('constant.admin_type.admin'))
		    							{
		    						?>		    						
                                    	<a class="label label-sm label-warning" href="{{ url('/admin/edit_manager?id='.$user->id) }}">Chỉnh Sửa</a>
                                    <?php		
		    							}
									?>
                                </td>
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
