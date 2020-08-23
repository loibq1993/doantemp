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
  
			<h3 class="page-title"><strong>Chỉnh sửa Hồ Sơ Học Sinh</strong></h3>
				@if(session()->has('message'))
					<div class="alert alert-info">
						<span style="color: blue">{{ session()->get('message') }}</span>
					</div>
				@endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Lỗi!</strong> {{ $error }}</div>
                @endforeach
                @if (@isset($users) && $users != null)	
	                <form  action="{{ url('/admin/edit_student') }}" method="POST" class="form-horizontal">
						{{ csrf_field() }}
						<input type="hidden" name="user_id" value="{{$users->id}}">
						<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
							@if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))
							<div class="form-group"> 
								<label for="single" class="control-label col-md-3">Mã học sinh: </label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="id" name="id" value="{{$users->id}}" readonly>
								</div>							
							</div>	
							@endif					
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Họ Tên Học Sinh:</label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="name" name="name" value="{{$users->name}}" maxlength="100" style="text-transform: capitalize;"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Email:</label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="e_mail" name="e_mail" value="{{$users->e_mail}}" maxlength="190"/> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i>Giới Tính: </label>
								<div class="col-md-6">
									<select class="form-control" id="gender" name="gender">
										@foreach(Illuminate\Support\Facades\Config::get('constant.user_gender') as $index => $gender)
												<option value="{{ $gender }}"  @if($users->gender == $gender) selected @endif>
												{{$gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')? 'Nam':'Nữ'}}
												</option>
										@endforeach
								</select>
								</div>
							</div>	
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Ngày Sinh: </label>
								<div class="col-md-6">
									<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="{{$users->date_of_birth}}"maxlength="10"/>
								</div>							
							</div>	
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Địa Chỉ: </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="address" name="address" value="{{$users->address}}" maxlength="150"/> 
								</div>			
							</div>	
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Nơi sinh: </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="born_place" name="born_place" value="{{$users->born_place}}" maxlength="150"/> 
								</div>			
							</div>									
							<div class="form-group">
								<label class="control-label col-md-3"><i class="icon-require">*</i> Số Phone Bố(Mẹ): </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="phone_of_parents" name="phone_of_parents" value="{{$users->phone_of_parents}}"  maxlength="12"/> 
								</div>				
							</div>
						</div>
						<div class="row col-sm-10" style="width: 50%; padding-left: 0px; padding-right: 0px;">
							<div class="form-group">
								<label class="control-label col-md-4">Tên Bố: </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="name_of_dad" name="name_of_dad" value="{{$users->name_of_dad}}" maxlength="25"/> 
								</div>				
							</div>	
							<div class="form-group">
								<label class="control-label col-md-4">Nghề nghiệp bố: </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="father_job" name="father_job" value="{{$users->father_job}}" maxlength="100"/> 
								</div>			
							</div>	
							<div class="form-group">
								<label class="control-label col-md-4">Tên Mẹ: </label>
								<div class="col-md-6">
									<input class="form-control" type="text" id="name_of_mom" name="name_of_mom" value="{{$users->name_of_mom}}" maxlength="25"/> 
								</div>				
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nghề nghiệp mẹ: </label>
								<div class=" col-md-6">
									<input class="form-control" type="text" id="mother_job" name="mother_job" value="{{$users->mother_job}}" maxlength="100"/> 
								</div>			
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"><i class="icon-require">*</i> Dân tộc: </label>
								<div class="col-md-6">
									<select id="folk" name="folk_id" class="form-control">
								   @foreach($folk_id as $folk)
								   		<option @if($users->folk->id == $folk->id){{"selected"}}@endif
								   	value="{{$folk->id}}">{{$folk->name}}
										</option>
								   @endforeach
								</select> 
								</div>				
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Con thương binh,liệt sĩ: </label>
								<div class="col-md-6">
									<select class="form-control" id="veteran" name="veteran">
										<option value="0" @if ($users->veteran == 0) selected @endif> Không</option>
										<option value="1" @if ($users->veteran == 1) selected @endif> Có</option>
									</select> 
								</div>				
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"><i class="icon-require">*</i> Mới chuyển đến: </label>
								<div class="col-md-6">
									<select class="form-control" id="new" name="new">
										<option value="0" @if ($users->new == 0) selected @endif> Không</option>
										<option value="1" @if ($users->new == 1) selected @endif> Có</option>
									</select> 
								</div>			
							</div>	
							<div class="form-group">
								<label class="control-label col-md-4"><i class="icon-require">*</i> Trạng thái: </label>
								<div class="col-md-6">
									<select class="form-control" id="status" name="status">
										<option value="0" @if ($users->status == 0) selected @endif> Hoạt động</option>
										<option value="1" @if ($users->status == 1) selected @endif> Không hoạt động</option>
									</select> 
								</div>			
							</div>					
						</div>	
						<div class="container-fluid">										
							<div class="col-xs-12 text-center form-register" style="margin-bottom: 5px;">
								<br style="clear: left;" />	
								<button type="submit" class="btn btn-info">Cập nhật</button>
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
				@endif

@endsection
