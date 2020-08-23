@extends('layout.master')
@section('content') 
<div class="work-container">
	<div class="container">	
		@if (@isset($type) && $type != null)
			@if ($type == Config::get('constant.post_type.notify'))
				<h2><span style="font-family:Roboto; color: #1C3691">CÁC THÔNG BÁO GẦN ĐÂY CỦA TRƯỜNG</span></h2>
			@else
				<h2><span style="font-family:Roboto;color:#1C3691 ">CÁC BÀI VIẾT GẦN ĐÂY CỦA TRƯỜNG</span></h2>
			@endif	
		@endif
		@if (@isset($posts) && $posts != null)			
			@foreach($posts as $index => $post)
				@if (($index) % 3 == 0)
					<div class="row">				
				@endif
				<div class="col-sm-4">
					<div class="work wow fadeInUp">
						<a href="{{ url('/news/detail?id='.Crypt::encryptString($post->id)) }}">
							<img src="{{request()->root().'/assets/img/posts/'.$post->image_title}}">
						</a>
							<a href="{{ url('/news/detail?id='.Crypt::encryptString($post->id)) }}">
							<p> {{$post->posts_title}}</p>
						</a>						
					</div>
				</div>
					
				@if (($index + 1) % 3 == 0)
					</div>	
					<br style="clear: left;" />
				@endif				
			@endforeach		
			<br style="clear: left;" />
		@endif		
	</div>
	<br style="clear: left;" />
	<br style="clear: left;" />
</div>
@endsection
