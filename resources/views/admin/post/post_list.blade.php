@extends('admindetail.layouts.master')
@section('content')
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="page-title">
                <b>Tìm kiếm bài viết</b>
            </h3>
        </section>
		<section class="content">
			<form action="{{ url('/admin/posts/list') }}" method="post" id="list-post-form">
				{{ csrf_field() }}
				<div class="col-sm-2">
					<div class="form-group-email">
						<span class="label-input100">ID</span>
						<input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id)) value="{{$id}}" @endif>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="form-group-email">
						<span class="label-input100">Tiêu đề</span>
						<input type="text" class="form-control" id="title_search" name="title_search" @if(@isset($title)) value="{{$title}}" @endif>
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
        @if (@isset($posts) && $posts != null)	
			<div class="portlet-title" style="text-align: left;">	
				<p class="violet"><b>Số Lượng: {{$posts->total()}}</b></p>
			</div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover list-course">
                        <tr>
                        	<th >STT</th>
                            <th >ID</th>
							<th >Phân loại</th>
                            <th >Tiêu đề</th>
							<th >Ngày viết</th>
							<th >Tác giả</th>
							<th >Tình Trạng</th>							
                        </tr>
                        @foreach($posts as $index => $post)
                            <tr>
                            	<td>
                            		@if (@isset($page) && ($page != null))
                                        {{ (Illuminate\Support\Facades\Config::get('constant.rows_per_page') * ($page - 1) + ($index + 1)) }}
                                     @else
                                        {{$index + 1}}
                                     @endif
                            	</td>
                                <td >{{$post->id}}</td>
								<td >
									@if ($post->type == Illuminate\Support\Facades\Config::get('constant.post_type.post')) 
										{{ Illuminate\Support\Facades\Config::get('constant.post_type_name.post') }}
									@else 
										{{ Illuminate\Support\Facades\Config::get('constant.post_type_name.notify') }}
									@endif
								</td>
								<td width="40%;"><a href="{{ url('/admin/posts/edit?id='.$post->id) }}">{{$post->posts_title}}</a></td>
								<td >{{$post->created_at}}</td>
								<td >{{$post->author}}</td>
								<td align="center"> 
									@if ($post->posts_status == Illuminate\Support\Facades\Config::get('constant.post_status.show')) 
										{{ Illuminate\Support\Facades\Config::get('constant.post_status_name.show') }}
									@else 
										{{ Illuminate\Support\Facades\Config::get('constant.post_status_name.hidden') }}
									@endif
								</td>			
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $posts->links() }}						
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
            @if ($posts->total() == 0)
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
