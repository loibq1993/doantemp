@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	
		<h3 class="page-title"><strong>Tạo Hồ Sơ Học Sinh</strong></h3>
				@if(session()->has('message'))
					<div class="alert alert-info">
						<span style="color: blue">{{ session()->get('message') }}</span>
					</div>
				@endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $error }}</div>
                @endforeach
				<form  action="{{ url('/admin/create_student_save') }}" method="POST" enctype="multipart/form-data" 
				id="create-student-form" class="form-horizontal">
					{{ csrf_field() }}
					<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Mã học sinh:</label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="id" name="id" style="text-transform: capitalize;" maxlength="6"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Họ Tên Học Sinh:</label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="name" name="name" style="text-transform: capitalize;" maxlength="30"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Email:</label>
							<div class="col-md-6">
								<input class="form-control" type="email" id="e_mail" name="e_mail" maxlength="150"/> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i>Giới Tính: </label>
							<div class="col-md-6">
								<select class="form-control" id="gender" name="gender">
									@foreach(Illuminate\Support\Facades\Config::get('constant.user_gender') as $index => $gender)
											<option value="{{ $gender }}"  @if(@isset(session()->get( 'data' )['gender']) && session()->get( 'data' )['gender'] == $gender) selected @endif>
													{{$gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')? 'Nam':'Nữ'}}
											</option>
									@endforeach
							</select>
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Ngày Sinh: </label>
							<div class="col-md-6">
								<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" maxlength="10"/>
							</div>							
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Địa Chỉ: </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="address" name="address" style="text-transform: capitalize;" maxlength="150"/> 
							</div>			
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Nơi sinh: </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="born_place" name="born_place" style="text-transform: capitalize;" maxlength="150"/> 
							</div>			
						</div>										
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Số Phone Bố(Mẹ): </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="phone_of_parents" name="phone_of_parents" maxlength="10"/> 
							</div>				
						</div>	
					</div>
					<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
						<div class="form-group">
							<label class="control-label col-md-3">Tên Bố: </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="name_of_dad" name="name_of_dad" style="text-transform: capitalize;" maxlength="25"/> 
							</div>				
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3">Nghề nghiệp bố: </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="father_job" name="father_job" style="text-transform: capitalize;" maxlength="100"/> 
							</div>			
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3">Tên Mẹ: </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="name_of_mom" name="name_of_mom" style="text-transform: capitalize;" maxlength="25"/> 
							</div>				
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3"> Nghề nghiệp mẹ: </label>
							<div class="col-md-6">
								<input class="form-control" type="text" id="mother_job" name="mother_job" style="text-transform: capitalize;" maxlength="100"/> 
							</div>			
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Dân tộc: </label>
							<div class="col-md-6">
								<select id="folk" name="folk_id" class="form-control">
								@foreach($folk_id as $folk)
								<option value="{{$folk->id}}">{{$folk->name}}</option>
								@endforeach
								</select> 
							</div>				
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3">Con thương binh, liệt sĩ: </label>
							<div class="col-md-6">
								<select class="form-control" id="veteran" name="veteran">
									<option value="0">Không</option>
									<option value="1">Có</option>
								</select>
							</div>			
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Mới chuyển đến: </label>
							<div class="col-md-6">
								<select class="form-control" id="new" name="new">
									<option value="0">Không</option>
									<option value="1">Có</option>
								</select>
							</div>			
						</div>		
						<div class="form-group">
							<label class="control-label col-md-3"><i class="icon-require">*</i> Trạng thái: </label>
							<div class="col-md-6">
								<select class="form-control" id="status" name="status">
									<option value="0">Hoạt động</option>
									<option value="1">Không hoạt động</option>
								</select>
							</div>			
						</div>
					</div>							
					<div class="container-fluid">										
						<div class="col-xs-12 text-center form-register" style="margin-bottom: 10px;">
							<br style="clear: left;" />	
							<button type="submit" class="btn btn-info">Thêm mới</button>
							&emsp;&emsp;
							<a href="{{ url('/admin/list_student')}}">
								<button type="button" class="btn btn-warning" >Xem danh sách</button>
							</a>
						</div>
					</div>
					<br style="clear: left;" />
					<br style="clear: left;" />
					<br style="clear: left;" />
				</form>
@endsection
