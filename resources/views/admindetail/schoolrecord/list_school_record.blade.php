@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <b>DANH SÁCH HỌC BẠ</b>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/list_school_record') }}" method="post" id="list-post-form">
				{{ csrf_field() }}
				<div class="col-sm-7">
					<div class="form-group-email">
						<span class="label-input100">Mã học bạ</span>
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
        @if (@isset($listsc) && $listsc != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$listsc->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered">
                        <tr>
                        	<th >STT</th>
                            <th >Mã học bạ</th>
							<th >Ngày lập</th>
                            <th> Mã học sinh</th>
                            <th >Học sinh</th>
                            <th>Xem chi tiết</th>							
                        </tr>
                        @foreach($listsc as $index => $sc)
                            <tr>
                            	<td>
                            		@if (@isset($page) && ($page != null))
                                        {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                     @else
                                        {{$index + 1}}
                                     @endif
                            	</td>
                            	<td >{{$sc->id}}/THPT</td>	
                            	<td >{{$sc->created_at}}</td>
                                <td >{{$sc->user_id}}</td>  	
                            	<td >{{$sc->name_student}}</td>
                            	<td><a class="label label-sm label-warning" href="{{ url('/admin/detailschoolreport?tid='.$sc->id) }}">Xem chi tiết</a></td>					
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $listsc->links() }}						
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
            @if ($listsc->total() == 0)
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
