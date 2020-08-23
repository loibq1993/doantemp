@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
            validate_date :  "{{ Illuminate\Support\Facades\Config::get('constant.validate_date') }}",
            check_date_now : "{{ Illuminate\Support\Facades\Config::get('constant.check_date_now') }}",
            greaterThan : "{{ Illuminate\Support\Facades\Config::get('constant.greaterThan') }}"
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_create_course.js')}}"></script>
    <h3 class="page-title"><strong>Chỉnh sửa năm học</strong></h3>
    @foreach ($errors->all() as $error)
        <span class="show-error-data">{{ $error }}</span>
    @endforeach
	@if(session()->has('message'))
		<div class="alert alert-info">
			<span style="color: blue">{{ session()->get('message') }}</span>
		</div>
    @endif
    @if (@isset($academic) && $academic != null)
    <form action="{{ route('edit_academic') }}"method="POST" id="edit-academic-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <input type="hidden" name="academic_id" value="{{$academic->id}}">
            @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
            <div class="form-group"> 
                <label for="single" class="control-label col-md-3">ID: </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="academic_id" name="academic_id" value="{{$academic->id}}" readonly>
                    </div>							
            </div>	
            @endif
        <div class="form-group">
            <label class="control-label col-md-3"><i class="icon-require"></i> Tên năm học</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="name_school_year" name="name_school_year" value="{{$academic->name_of_school_year}}">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require"></i> Thời gian bắt đầu</label>
            <div class="col-md-4">
                <input type="date" class="form-control" id="start_time" name="start_time" value="{{$academic->start_time}}">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require"></i> Thời gian kết thúc</label>
            <div class="col-md-4">
                <input type="date" class="form-control" id="end_time" name="end_time"  value="{{$academic->end_time}}">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require"></i> Trạng thái</label>
            <div class="col-md-4">
                <select class="form-control" id="status" name="status">
                    <option value="0" @if ($academic->status == 0) selected @endif>Hoạt động</option>
                    <option value="1" @if ($academic->status == 1) selected @endif>Không hoạt động</option>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </div>
		<br style="clear: left;" />
		<br style="clear: left;" />
    </form>
    @endif
@endsection
