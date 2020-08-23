@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>Danh sách hồ sơ học sinh</strong>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_student') }}" method="post" enctype="multipart/form-data" id="list-student-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">Mã học sinh</span>
						<input type="number" class="form-control" id="id_student_search" name="id_student_search" @if(@isset($id_student_search)) value="{{$id_student_search}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Họ tên học sinh</span>
						<input type="text" class="form-control" id="name_search" name="name_search" @if(@isset($name_search)) value="{{$name_search}}" @endif>
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
        @if (@isset($users) && $users != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$users->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover list-student" >
                        <tr style="white-space: nowrap;">
                            <th >Mã học sinh</th>
                            <th >Họ tên</th>          
							<th >Giới tính</th>
							<th >Ngày sinh</th>
                            <th >Nơi sinh</th>
							<th >Điện thoại bố(mẹ)</th>
                            <th >Trạng thái</th>
                            <th >Xem chi tiết</th>
							<th >Chỉnh sửa</th>	
							{{-- <th >Xóa</th>--}}
                        </tr>
                        @foreach($users as $index => $user)
                            <tr style="white-space: nowrap;">
                                <td style="text-align: center">{{$user->id}}</td>
								<td style="white-space: nowrap;text-transform: capitalize;">{{$user->name}}</td>
                                <td> 
									@if($user->gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')) 
										<span class="label label-sm label-info"> Nam </span>
									@else 
										<span class="label label-sm label-warning"> Nữ </span> 
									@endif
								</td>
                                <td >{{Illuminate\Support\Carbon::parse($user->date_of_birth)->format('d-m-Y')}}</td>
                                <td >{{$user->born_place}}</td>
                                <td >{{$user->phone_of_parents}}</td>
                                <td >
                                    @if ($user->status == 0)
                                        Hoạt động
                                    @elseif ($user->status == 1)
                                        Không hoạt động
                                    @endif
                                </td>
                                <td >
                                    <a href="#modal_info{{$user->id}}" class="label label-sm label-info" data-toggle="modal"> Xem chi tiết</a>
                                </td>
								<td >   					
                                    	<a class="label label-sm label-warning" href="{{ url('/admin/edit_student?id='.$user->id) }}">Chỉnh Sửa</a>
                                </td>
                                {{-- <td><a href="#modal_delete{{$user->id}}" class="label label-sm label-danger" data-toggle="modal">
                                        <i class="fa fa-remove"></i> Xóa</a>
                                </td> --}}
                            </tr>
                            <div class="modal fade" id="modal_info{{$user->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" style="width: 1000px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h3 class="modal-title"><b>Thông tin học sinh</b></h3>
                                        </div>
                                            <div class="row col-sm-10" style="width: 50%; padding-left: 10px; padding-right: 0px;">
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Mã học sinh:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="user_id" name="user_id" value="{{$user->id}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Họ tên học sinh:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="name" name="name" value="{{$user->name}}" style="text-transform: capitalize;" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Email:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="e_mail" name="e_mail" value="{{$user->e_mail}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Giới tính:</b> </label>
                                                    <div class="col-md-6">
                                                    <input class="form-control" id="gender" name="gender" @if($user->gender == 0)
                                                        value="Nam"
                                                    @elseif ($user->gender == 1)
                                                        value="Nữ"
                                                    @endif readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Ngày sinh:</b></label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="date_of_birth" name="date_of_birth  " 
                                                        value="{{Illuminate\Support\Carbon::parse($user->date_of_birth)->format('d-m-Y')}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Địa chỉ:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="address" name="address" value="{{$user->address}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Nơi sinh:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="born_place" name="born_place" value="{{$user->born_place}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Điện thoại bố(mẹ):</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="phone_of_parents" name="phone_of_parents" value="{{$user->phone_of_parents}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-sm-10" style="width: 50%; padding-left: 30px; padding-right: 0px;">
                                                <br> 
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Tên bố:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="name_of_dad" name="name_of_dad" value="{{$user->name_of_dad}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Nghề nghiệp bố:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="father_job" name="father_job" value="{{$user->father_job}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Tên mẹ:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="name_of_mom" name="name_of_mom" value="{{$user->name_of_mom}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Nghề nghiệp mẹ:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="mother_job" name="mother_job" value="{{$user->mother_job}}" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Dân tộc:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="folk_id" name="folk_id" value="{{$user->folk->name}}" style="text-transform: capitalize;" readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Con thương binh,liệt sĩ:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="veteran" name="veteran"  @if($user->veteran == 0)
                                                        value="Không"
                                                    @elseif ($user->veteran == 1)
                                                        value="Có"
                                                    @endif readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Mới chuyển đến:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="new" name="new"  @if($user->new == 0)
                                                        value="Không"
                                                    @elseif ($user->new == 1)
                                                        value="Có"
                                                    @endif readonly>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"><b>Trạng thái:</b> </label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="status" name="status" @if($user->status == 0)
                                                        value="Hoạt động"
                                                    @elseif ($user->status == 1)
                                                        value="Không hoạt động"
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
                            {{-- <div class="modal fade" id="modal_delete{{$user->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Xác nhận xóa</h4>
                                        </div>
                                        <div class="modal-body">Chắc chắn xóa {{$user->name}} ?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                            <a href="{{ url('/admin/delete_student/'.$user->id) }}"  class="btn green">OK</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $users->links() }}						
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
