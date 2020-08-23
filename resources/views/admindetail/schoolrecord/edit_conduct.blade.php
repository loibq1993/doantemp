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
                    <span class="caption-subject font-dark sbold uppercase">CHỈNH SỬA HẠNH KIỂM</span>
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
                @if (@isset($conducts) && $conducts != null)	
	                <form  action="{{ url('/admin/edit_conduct') }}" method="POST" class="register-form">
						{{ csrf_field() }}
						<input type="hidden" name="conduct_id" value="{{$conducts->id}}">
						@if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
						<div class="form-group"> 
							<label for="single" class="control-label">ID: </label>
							<div class="input-icon">
								<input type="text" class="form-control" id="conduct_id" name="conduct_id" value="{{$conducts->id}}" readonly>
							</div>							
						</div>	
						@endif					
						<div class="form-group">
							<label class="control-label"><i class="icon-require">*</i>Tên hạnh kiểm:</label>
							<div class="input-icon">
								<i class="fa fa-info"></i>
								<input class="form-control" type="text" id="name" name="name" value="{{$conducts->name}}" maxlength="100"/> 
							</div>
						</div>										
						<div class="form-actions" style="margin-left: 350px">
							<button type="submit" class="btn btn-primary"> Cập nhật </button>
						</div>
					</form>
				@endif
	        </div>
	    </div>
	        <!-- END SAMPLE FORM PORTLET-->
	        <!-- BEGIN SAMPLE FORM PORTLET-->
	</div>
@endsection
