@extends('admindetail.layouts.master')
@section('content')
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<div class="slider-container">
	<div class="register-container" >
		<div class="row col-sm-12">  
			<h3 class="page-title"><b>Chỉnh Sửa bài viết</b></h3>
						
			@if(session()->has('message'))
				<div class="alert alert-info">
					<span style="color: blue">{{ session()->get('message') }}</span>
				</div>
			@endif
		
			<form action="{{ route('admin_edit_posts') }}"method="POST" id="admin-edit-post-form" class="form-horizontal" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row col-sm-12" style="width: 100%; padding-left: 0px; padding-right: 0px;"> 
					<div class="form-group">
						<label class="control-label col-md-2">ID: </label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="post_id" name="post_id" value="{{$data->id}}" readonly>
						</div>							
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Phân loại: </label>
						<div class="col-sm-2 radio" style="margin-bottom:10px;">
						  <label><input style="font-weight:bold; font-style:italic; height: 20px; width: 20px; margin-top:0px;" type="radio" name="type" value="1" 
						  @if($data->type == 1) checked @endif>&emsp; Bài viết</label>
						</div>
						<div class="col-sm-2 radio">
						  <label><input style="font-weight:bold; font-style:italic; height: 20px; width: 20px; margin-top:0px;" type="radio" name="type" value="2"
						  @if($data->type == 2) checked @endif>&emsp; Thông báo</label>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2"><i class="icon-require">*</i> Tiêu đề: </label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="posts_title" name="posts_title" value="{{$data->posts_title}}" maxlength="190">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Ảnh minh họa: </label>
						<div class="col-sm-4">
							<div class="work wow fadeInUp">
							<img id="image_show" style="width: 200px; height: 200px; border: none"                                     
                                     src="{{ $data->image_title != '' ? request()->root(). '/assets/img/posts/'.$data->image_title : request()->root().'/assets/img/posts/default.jpg'}}">
							</div>				
							<input style="border: none;" type="file" name="image_title" id="image_title"
								   onchange="loadFile(event)">								   
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2"><i class="icon-require">*</i> Nội dung: </label>
						<div class="col-md-10">
							<textarea class="form-control summernote" name="posts_content">{{$data->posts_content}}</textarea>
						</div>					
					</div>				
					<div class="form-group">
						<label class="control-label col-md-2">Trạng thái: </label>
						<div class="col-sm-10">
							<div class="radio" style="margin-bottom:10px;">
							  <label><input style="font-weight:bold; font-style:italic; height: 20px; width: 20px; margin-top:0px;" type="radio" name="posts_status" value="0" 
							  @if($data->posts_status == 0) checked @endif>&emsp; Đăng</label>
							</div>
							<div class="radio">
							  <label><input style="font-weight:bold; font-style:italic; height: 20px; width: 20px; margin-top:0px;" type="radio" name="posts_status" value="1"
							  @if($data->posts_status == 1) checked @endif>&emsp; Ẩn</label>
							</div>
						</div>				
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Tác giả: </label>
						<div class="col-md-7">
							<input type="text" class="form-control" id="author" name="author" value="{{$data->author}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Ngày tạo: </label>
						<div class="col-md-7">
							<input type="text" class="form-control" id="created_at" name="created_at" value="{{$data->created_at}}" readonly>
						</div>					
					</div>					
				</div>				
				
				<div class="container-fluid">										
					<div class="col-xs-12 text-center form-register" style="margin-bottom: 10px;">
						<br style="clear: left;" />	
						<button type="submit" class="btn btn-primary">Cập nhật</button>
					</div>
				</div>
				<br style="clear: left;" />
				<br style="clear: left;" />
				<br style="clear: left;" />
			</form>
		</div>
	</div>
</div>		
<script type="text/javascript">
	$(document).ready(function() {
		$('.summernote').summernote({
			  height: 500,
		 });
	  });
   var loadFile = function (event) {
		var reader = new FileReader();
		reader.onload = function () {
			var output = document.getElementById('image_show');
			output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);		
	};

</script> 
@endsection
