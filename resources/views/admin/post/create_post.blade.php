@extends('admindetail.layouts.master')
@section('content')
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script> 
<div class="row col-sm-12">   
	<h3 class="page-title"><b>Tạo bài viết</b></h3>
				
	@if(session()->has('message'))
		<div class="alert alert-info">
			<span style="color: blue">{{ session()->get('message') }}</span>
		</div>
	@endif
	
	<form action="{{ url('/admin/posts/create') }}" method="POST" id="admin-create-posts-form" class="form-horizontal" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row col-sm-10" style="width: 100%; padding-left: 0px; padding-right: 0px;">
			<div class="form-group">
				<label class="control-label col-md-2">Phân loại: </label>
				<div class="col-sm-2 radio" style="margin-bottom:10px;">
				  <label><input style="font-weight:bold; font-style:italic; height: 20px; width: 20px; margin-top:0px;" type="radio" name="type" value="1" checked>&emsp; Bài viết</label>
				</div>
				<div class="col-sm-2 radio">
				  <label><input style="font-weight:bold; font-style:italic; height: 20px; width: 20px; margin-top:0px;" type="radio" name="type" value="2">&emsp; Thông báo</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Tiêu đề: </label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="posts_title" name="posts_title" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Ảnh minh họa: </label>
				<div class="col-md-7">
					<img class="form-control" id="image_show"
							 style="width: 200px; height: 200px; border: none"
							 src="{{ request()->root().'/assets/img/posts/default.jpg' }}">
					<input style="border: none;" type="file" name="image_title" name="image_title" 
						onchange="loadFile(event)">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nội dung: </label>
				<div class="col-md-10">
					<textarea class="form-control summernote" name="posts_content"></textarea>							
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Tác giả: </label>
				<div class="col-md-7">
					<input type="text" class="form-control" id="author" name="author" value="Trường THPT Nguyễn Khuyến">
				</div>
			</div>					
		
		<div class="container-fluid">										
			<div class="col-xs-10 text-center form-register" style="margin-bottom: 10px;">
				<br style="clear: left;" />	
				<button type="submit" class="btn btn-primary">Tạo mới</button>
			</div>
		</div>
		<br style="clear: left;" />
		<br style="clear: left;" />
		<br style="clear: left;" />
	</form>
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
