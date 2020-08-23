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
			<form action="{{ url('/admin/list_certificate_temp') }}" method="post" enctype="multipart/form-data" id="list-student-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">Mã học sinh</span>
						<input type="number" class="form-control" id="id_student_search" name="id_student_search" @if(@isset($id_st)) value="{{$id_st}}" @endif>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group-email">
						<span class="label-input100">Họ tên học sinh</span>
						<input type="text" class="form-control" id="name_student_search" name="name_student_search" @if(@isset($user_name)) value="{{$user_name}}" @endif>
					</div>
                </div>
                <div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">Mã phiếu</span>
						<input type="number" class="form-control" id="id_phieu" name="id_phieu" @if(@isset($id_p)) value="{{$id_p}}" @endif>
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
                    <table class="table table-bordered table-hover list-student" >
                        <tr style="white-space: nowrap;">
                            <th >STT</th>
                            <th >Mã chứng chỉ</th>
                            <th >Học sinh</th>          
							<th >Mã học sinh</th>
                            <th >Ngày tạo</th>
                            <th>Xem chi tiết</th>
                            <th>Xuất PDF</th>
							<th >Xóa</th>						
                        </tr>
                        @foreach($list as $index => $ct)
                            <tr style="white-space: nowrap;">
                                <td >{{$index+1}}</td>
                                <td >{{$ct->id}}</td>
								<td style="white-space: nowrap;">{{$ct->user_name}}</td>
                                <td >{{$ct->user_id}}</td>
                                <td >{{$ct->created_at}}</td>
                                <td>
                                    <a class="label label-sm label-warning" href="{{ url('/admin/detailcertemp?ctid='.$ct->id) }}">Xem chi tiết</a>
                                </td>
                                <td>
                                    <a class="label label-sm label-warning" href="{{ url('/admin/downloadpdfcertemp') }}">Xuất PDF</a>
                                </td>
                                <td><a href="#modal_delete{{$ct->id}}" class="label label-sm label-danger" data-toggle="modal">
                                        <i class="fa fa-remove"></i> Xóa</a>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal_delete{{$ct->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Xác nhận xóa</h4>
                                        </div>
                                        <div class="modal-body">Chắc chắn xóa giấy chứng nhật tốt nghiệp tạm thời của{{$ct->user_name}} ?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                            <a href="{{ url('/admin/delete_school_report_temp/'.$ct->id) }}"  class="btn green">OK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
