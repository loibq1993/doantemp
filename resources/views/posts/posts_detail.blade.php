@extends('frontend.layouts.master')
@section('content')  

<div class="col-xs-12 col-sm-12 col-md-12">

   <div class="col-xs-12 col-sm-12 col-md-12">

	<center><h1>What would you see in Laravel 5.7 ? </h1>

	<h4>Just share your idea.</h4>

	</center>

      <div class="form-group">

		<label for="usr">Title of Feature:</label>

		<h4 style="text-align: left;color: white">
		<?php
			echo $posts->posts_title;
		?></h4>
	

	  </div>

      <div class="form-group">

           <strong>Details:</strong>
			<h4 style="text-align: left;color: white; font-family: Roboto">
           <?php
				echo $posts->posts_content;
			?></h4>

       </div>

    </div>
</div>
@endsection