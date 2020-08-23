@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_place.js')}}"></script>
    <div class="col-md-10">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Chỉnh sửa Môn Học</span>
                </div>
            </div>
			@if(session()->has('message'))
				<div class="alert alert-info">
					<span style="color: blue">{{ session()->get('message') }}</span>
				</div>
			@endif
            <div class="portlet-body form">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $error }}</div>
                @endforeach
                @if (@isset($subject) && $subject != null)
	                <form  action="{{ url('/admin/edit_subject') }}" method="POST" class="register-form">
						{{ csrf_field() }}
						<input type="hidden" name="subject_id" value="{{$subject->id}}">

					@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
						{{-- <div class="form-group"> 
							<label for="single" class="control-label">ID: </label>
							<div class="input-icon">
								<input type="text" class="form-control" id="id" name="id" value="{{$subject->id}}" readonly>
							</div>							
						</div> --}}
						<div class="form-group">
							<label class="control-label"><i class="icon-require">*</i> Tổ môn: </label>
							<div class="input-icon">
								<i class="fa fa-archive"></i>
								<select id="specialize" name="specialize_id" class="form-control">
								@foreach($specialize_id as $special)
								<option 
								@if($subject->specialize->id == $special->id)
								{{"selected"}}
								@endif
								value="{{$special->id}}">{{$special->name}}</option>
								@endforeach
								</select>
							</div>				
						</div>										
						<div class="form-group">
							<label class="control-label"><i class="icon-require">*</i> Tên Môn Học:</label>
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<input class="form-control" type="text" id="name_subject" name="name_subject" value="{{$subject->name_subject}}" maxlength="100"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label"><i class="icon-require">*</i> Số tiết:</label>
							<div class="input-icon">
								<i class="fa fa-envelope"></i>
								<input class="form-control" type="text" id="sotiet" name="sotiet" value="{{$subject->sotiet}}" maxlength="50"/> 
							</div>
						</div>								
						<div class="form-actions">
							<button type="submit" class="btn btn-primary pull-right"> Cập nhật </button>
						</div>
						@endif
					</form>
				@endif
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection