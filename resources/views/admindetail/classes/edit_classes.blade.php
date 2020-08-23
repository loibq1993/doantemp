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
                    <span class="caption-subject font-dark sbold uppercase">Chỉnh sửa thông tin Lớp Học</span>
                </div>
            </div>
            {{-- <span>*Lưu ý: Định dạng lớp đặt theo định dạng Tên lớp_năm bắt đầu và kết thúc (Ví dụ: lớp 10C6 năm học 2019 - 2020 => 10C6_2019_2020)</span> --}}
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
                @if (@isset($classes) && $classes != null)	
	                <form action="{{ url('/admin/edit_classes') }}" method="POST" id="edit-classes-form" class="form-horizontal form-row-seperated">
			        {{ csrf_field() }}
			        <input type="hidden" name="classes_id" value="{{$classes->id}}">
						@if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
						<div class="form-group"> 
							<label for="single" class="control-label col-md-3">ID: </label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="id" name="id" value="{{$classes->id}}" readonly>
								</div>							
						</div>	
						@endif
						<div class="form-group ">
							<label class="control-label col-md-3">Khối học</label>
							<div class="col-md-6">
								<select class="form-control" id="grade" name="grade">
									<option value="0" @if ($classes->grade_id == 0) selected @endif> Khối 10</option>
									<option value="1" @if ($classes->grade_id == 1) selected @endif> Khối 11</option>
									<option value="2" @if ($classes->grade_id == 2) selected @endif> Khối 12</option>
								</select>
							</div>
						</div>		
						<div class="form-group ">
							<label class="control-label col-md-3"><i class="icon-require">*</i>Tên lớp</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="name_class" name="name_class" value="{{$classes->name_class}}">
							</div>
						</div>
						<div class="form-group ">
							<label class="control-label col-md-3"><i class="icon-require">*</i>GVCN</label>
							<div class="col-md-6">
								<select class="form-control" id="name_teacher" name="name_teacher">
									@foreach($teacher as $item)
										<option value="{{$item->name_teacher}}">
											{{$item->name_teacher}}
										</option>
									@endforeach
									
								</select>
							</div>
						</div>
						<div class="form-group ">
							<label class="control-label col-md-3">Năm học</label>
							<div class="col-md-6">
								<select class="form-control" id="academicyears" name="academicyears">
									@foreach($academicsyear as $item)
										<option value="{{$item->name_of_school_year}}" @if($classes->academic_year_id == $item->name_of_school_year) selected @endif>
											{{$item->name_of_school_year}}
										</option>
									@endforeach
									
								</select>
							</div>
						</div>  
						<div class="form-group ">
							<label class="control-label col-md-3">Trạng thái</label>
							<div class="col-md-6">
								<select class="form-control" id="status" name="status">
									<option value="0" @if ($classes->status_id == 0) selected @endif>Không hoạt động</option>
									<option value="1" @if ($classes->status_id == 1) selected @endif>Hoạt động</option>
									<option value="2" @if ($classes->status_id == 2) selected @endif>Tốt nghiệp</option>
								</select>
							</div>
						</div>		
						<div class="form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn btn-primary"> Cập nhật </button>
								<a href="{{ url('/admin/list_classes') }}"> 
									<button type="button" class="btn btn-primary"> Quay lại</button>
								</a>
							</div>
						</div>
						</form>
				@endif
	        </div>
	    </div>
	</div>
@endsection


 



    

