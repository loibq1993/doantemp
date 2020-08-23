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
                    <span class="caption-subject font-dark sbold uppercase">Chỉnh sửa Tổ Môn</span>
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
                @if (@isset($specialize) && $specialize != null)
	                <form  action="{{ url('/admin/edit_specialize') }}" method="POST" class="register-form">
						{{ csrf_field() }}
						<input type="hidden" name="specialize_id" value="{{$specialize->id}}">
						<div class="form-group">
							<label class="control-label"><i class="icon-require">*</i> Tên Tổ Môn:</label>
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<input class="form-control" type="text" id="name" name="name" value="{{$specialize->name}}" maxlength="190"/> 
							</div>
						</div>
						<div class="form-group">
							<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
							<label class="control-label"><i class="icon-require"></i> Ghi chú:</label>
							<div class="input-icon">
								<i class="fa fa-envelope"></i>
								<input class="form-control" type="text" id="note" name="note" value="{{$specialize->note}}" maxlength="100"/> 
							</div>
						</div>								
						<div class="form-actions">
							<button type="submit" class="btn btn-primary pull-right"> Cập nhật </button>
						</div>
					</form>
				@endif
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection