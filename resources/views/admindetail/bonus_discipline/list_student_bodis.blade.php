@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <b>Khen thưởng - kỷ luật học sinh</b>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_student_bodis') }}" method="post" id="list-post-form">
				{{ csrf_field() }}
				<div class="col-sm-7">
					<div class="form-group-email">
						<span class="label-input100">ID</span>
						<input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id)) value="{{$id_search}}" @endif>
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
        @if (@isset($studentbodis) && $studentbodis != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$studentbodis->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover list-course">
                        <tr>
                        	<th >STT</th>
                            <th >Mã khen thưởng</th>
							<th >Ngày lập</th>
                            <th >Học sinh</th>
                            <th> Loại</th>
                            <th> Xem chi tiết</th>							
                        </tr>
                        @foreach($studentbodis as $index => $sbd)
                            <tr>
                            	<td>
                            		@if (@isset($page) && ($page != null))
                                        {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                     @else
                                        {{$index + 1}}
                                     @endif
                            	</td>
                            	<td >{{$sbd->id}}</td>	
                            	<td >{{$sbd->created_at}}</td>		
                            	<td >{{$sbd->name_student}}</td>
                                <th>
                                    @if($sbd->type==0)
                                        Khen thưởng
                                    @else
                                        Kỷ luật
                                    @endif
                                </th>
                                {{-- <td><a class="label label-sm label-warning" href="{{ url('#') }}">Xem chi tiết</a></td> --}}
                            	<td><a class="label label-sm label-warning" href="{{ url('/admin/detail_studentbodis?tid='.$sbd->user_id) }}">Xem chi tiết</a></td>					
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $studentbodis->links() }}						
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
            @if ($studentbodis->total() == 0)
	            <div class="portlet-title" style="text-align: left;">
					<p class="violet"><b>{{ Illuminate\Support\Facades\Config::get('constant.data_not_found') }}</b></p>
				</div>
			@endif	
		@else
			<div class="portlet-title" style="text-align: left;">
				<p class="violet"><b>{{ Illuminate\Support\Facades\Config::get('constant.data_not_found') }}</b></p>
			</div>
		@endif	

        </section>
        <!-- /.content -->
    </div>
@endsection
