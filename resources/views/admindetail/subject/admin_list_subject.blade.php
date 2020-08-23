@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-10">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <strong>Danh sách môn học</strong>
            </h3>
        </section>
        <!-- Main content -->
        @if (@isset($subjects) && $subjects != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$subjects->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th >STT</th>
                            <th >Tên Môn Học</th>
                            <th >Số Tiết</th>
                            <th >Tổ môn</th>
                            <th >Chỉnh Sửa</th>
                        </tr>
                        @foreach($subjects as $index => $subject)
                            <tr>
                                <td >{{$index+1}}</td>
								<td >{{$subject->name_subject}}</td>
                                <td >{{$subject->sotiet}}</td>
                                <td >{{$subject->specialize->name}}</td>
                                <td > 			
                                    <a class="label label-sm label-warning" href="{{ url('/admin/edit_subject?id='.$subject->id) }}">Chỉnh Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $subjects->links() }}						
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
