@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>Tìm kiếm giáo viên</strong>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_teacher') }}" method="post" enctype="multipart/form-data" id="list-teacher-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">Mã giáo viên</span>
						<input type="number" class="form-control" id="id_teacher_search" name="id_teacher_search" @if(@isset($id_teacher_search)) value="{{$id_teacher_search}}" @endif>
					</div>
                </div>
                <div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Mã tổ môn</span>
						<input type="text" class="form-control" id="specialize_search" name="specialize_search" @if(@isset($specialize_search)) value="{{$specialize_search}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Họ tên giáo viên</span>
						<input type="text" class="form-control" id="teacher_name_search" name="teacher_name_search" @if(@isset($teacher_name_search)) value="{{$teacher_name_search}}" @endif>
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
        @if (@isset($teacher) && $teacher != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$teacher->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr style="white-space: nowrap;">
                            <th >Mã giáo viên</th>
                            <th >Họ tên</th>
                            <th >Giới tính</th>
							<th >Ngày sinh</th>
                            <th >SĐT</th>          
                            <th >Email</th>
                            <th >Tổ Môn</th>
                            <th >Trạng thái</th>
                            <th >Xem chi tiết</th>
                            <th >Chỉnh sửa</th>
                            <th >Xóa</th>						
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teacher as $teachers)
                            <tr style="white-space: nowrap;">
                                <td >{{$teachers->id}}</td>
                                <td >{{$teachers->name_teacher}}</td>
                                <td> 
									@if($teachers->gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')) 
										<span class="label label-sm label-info"> Nam </span>
									@else 
										<span class="label label-sm label-warning"> Nữ </span> 
									@endif
								</td>
                                <td >{{Illuminate\Support\Carbon::parse($teachers->date_of_birth)->format('d-m-Y')}}</td>
								<td >{{$teachers->phone_number}}</td>
                                <td >{{$teachers->e_mail}}</td>
                                <td >{{$teachers->specialize->name}}</td>
                                <td >
                                	@if ($teachers->teacher_status == 0)
                                        Hoạt động
                                    @elseif ($teachers->teacher_status == 1)
                                        Ngưng Hoạt Động
                                    @elseif ($teachers->teacher_status == 2)
                                        Nghỉ hưu
                                    @endif
                                </td>
                                <td >
                                    <a href="#modal_info{{$teachers->id}}" class="label label-sm label-info" data-toggle="modal"> Xem chi tiết</a>
                                </td>
								<td >   					
                                    	<a class="label label-sm label-warning" href="{{ url('/admin/edit_teacher?id='.$teachers->id) }}">Chỉnh Sửa</a>
                                </td>
                                <td>
                                    <a href="#modal_delete{{$teachers->id}}" class="label label-sm label-danger" data-toggle="modal">
                                    <i class="fa fa-remove"></i> Xóa</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal_info{{$teachers->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><b>Thông tin giáo viên</b></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label">Mã giáo viên: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-info"></i>
                                                    <input class="form-control" id="teacher_id" name="teacher_id" value="{{$teachers->id}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Tên giáo viên: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-user"></i>
                                                    <input class="form-control" id="name_teacher" name="name_teacher" value="{{$teachers->name_teacher}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Giới tính: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-restroom"></i>
                                                <input class="form-control" id="gender" name="gender" @if($teachers->gender == 0)
                                                    value="Nam"
                                                @elseif ($teachers->gender == 1)
                                                    value="Nữ"
                                                @endif readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Ngày sinh: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-calendar"></i>
                                                    <input class="form-control" id="date_of_birth" name="date_of_birth  " 
                                                    value="{{Illuminate\Support\Carbon::parse($teachers->date_of_birth)->format('d-m-Y')}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">SĐT: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-phone"></i>
                                                    <input class="form-control" id="phone_number" name="phone_number" value="{{$teachers->phone_number}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-envelope"></i>
                                                    <input class="form-control" id="e_mail" name="e_mail" value="{{$teachers->e_mail}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Địa chỉ: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-home"></i>
                                                    <input class="form-control" id="address" name="address" value="{{$teachers->address}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Tổ môn: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-archive"></i>
                                                    <input class="form-control" id="specialize" name="specialize" value="{{$teachers->specialize->name}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Số CMND: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-address-card"></i>
                                                    <input class="form-control" id="CMND" name="CMNd" value="{{$teachers->CMND}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Giáo viên chủ nhiệm: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-blind"></i>
                                                    <input class="form-control" id="level" name="level" @if ($teachers->level == 0)
                                                        value = "Không"
                                                    @elseif ($teachers->level == 1)
                                                        value = "Có"
                                                    @endif readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Trạng thái: </label>
                                                <div class="input-icon">
                                                    <i class="fa fa-check-square"></i>
                                                    <input class="form-control" id="teacher_status" name="teacher_status" @if ($teachers->teacher_status == 0)
                                                        value = "Hoạt động"
                                                    @elseif ($teachers->teacher_status == 1)
                                                        value = "Ngưng Hoạt Động"
                                                    @elseif ($teachers->teacher_status == 2)
                                                        value ="Nghỉ hưu"
                                                    @endif readonly>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal_delete{{$teachers->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Xác nhận xóa</h4>
                                        </div>
                                        <div class="modal-body">Chắc chắn xóa {{$teachers->name_teacher}} ?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                            <a href="{{ url('/admin/delete_teacher/'.$teachers->id) }}"  class="btn green">OK</a>
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
                        {{ $teacher->links() }}		
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
			@else
				<div class="portlet-title" style="text-align: left;>
					<p class="violet"><b>{{Illuminate\Support\Facades\Config::get('constant.data_not_found')}}</b></p>
				</div>
			@endif	

        </section>
        <!-- /.content -->
    </div>
@endsection
