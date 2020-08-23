@extends('layout.master')
@section('content')  

<div class="slider-container">
	<div class="register-container">
		<div class="container3">
			<div class="row">
				@if (@isset($posts) && $posts != null)	
					<h2><span style="font-family:Roboto;color: white">{{$posts->posts_title}}</span></h2>
					<br style="clear: left;" />
					
					<br style="clear: left;" />
					<br style="clear: left;" />
					
					<div style="text-align: center; font-kerning: none;margin-left: 50px; margin-right: 50px; font-family: Roboto; color: #ffff">
					<?php
						echo $posts->posts_content;
					?></div>						
					<br style="clear: left;" />
					
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p style="text-align:left; font-family: Roboto">Ngày đăng: {{date('d/m/Y', strtotime($posts->created_at))}}</p>
						</div>
						<div class="col-sm-6">
							<p style="text-align:right;font-family: Roboto">Nguồn: {{$posts->author}}</p>
						</div>
					</div>
				@endif				
			</div>
		</div>
	</div>
</div>
<div class="work-container">
	<div class="container">	
	<h2><span style="font-family:Roboto;color: #1C3691">Các bài viết liên quan</span></h2>
	@if (@isset($postReleated) && $postReleated != null)		
		<div class="row">
		@foreach($postReleated as $index => $post)
			<div class="col-sm-4">
				<div class="work wow fadeInUp">
					<a href="{{ url('/news/detail?id='.Crypt::encryptString($post->id)) }}">
						<img src="{{$post->image_title != '' ? request()->root(). '/assets/img/posts/'.$post->image_title : request()->root().'/assets/img/posts/default.jpg'}}">
					</a>
					<a href="{{ url('/news/detail?id='.Crypt::encryptString($post->id)) }}">
						<p> {{$post->posts_title}}</p>
					</a>
				</div>
			</div>
		@endforeach	
		</div>				
	@endif			
	<br style="clear: left;" />
	</div>
</div>
@endsection