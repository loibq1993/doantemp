@extends('admindetail.layouts.master')
@section('content')
    <script>
        var contants = {
            mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}",
        }

    </script>
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_create_student.js')}}"></script>
    <div class="col-md-10">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div>
                <p style="text-align: center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                <p style="text-align: center;">Độc lập - Tự do - Hạnh Phúc</p>
                <p style="text-align: center;">------------------------</p>
            </div>
            <div>
                <p style="text-align: center;font-size: 30px"><b>HỌC BẠ</b></p>
                <p style="text-align: center;font-size: 16px"><b>TRUNG HỌC PHỔ THÔNG</b></p>
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
                <form  action="{{ url('/admin/add_student_report') }}" method="POST" class="register-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_name" value="{{$users->name}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label">Học sinh: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_name" name="user_name" value="{{$users->name}}" readonly>
                            </div>                          
                        </div>  
                    <input type="hidden" name="user_id" value="{{$users->id}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label">Mã học sinh: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{$users->id}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="user_gender" value="{{$users->gender}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Giới tính: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_gender" name="user_gender" value="{{$users->gender}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="user_dob" value="{{$users->date_of_birth}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Ngày sinh: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_dob" name="user_dob" value="{{$users->date_of_birth}}" readonly>
                            </div>                    
                        </div>
                    <div class="form-group ">
                        <label class="control-label col-md-3" style="margin-left: -15px">Nơi sinh: </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="noisinh" style="text-transform: capitalize; margin-left: -120px"
                                   name="noisinh">
                        </div>
                    </div>
                    <br>
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Dân tộc: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_folk" name="user_folk" value="{{$users->folk_id}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="user_address" value="{{$users->address}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Chỗ ở hiện tại: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_address" name="user_address" value="{{$users->address}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="user_namefa" value="{{$users->name_of_dad}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Họ tên cha: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_namefa" name="user_namefa" value="{{$users->name_of_dad}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="user_jf" value="{{$users->father_job}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Nghề nghiệp: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_jf" name="user_jf" value="{{$users->father_job}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="user_namema" value="{{$users->name_of_ma}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label">Họ tên mẹ: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_namema" name="user_namema" value="{{$users->name_of_mom}}" readonly>
                            </div>                    
                        </div>
                    <input type="hidden" name="mother_job" value="{{$users->mother_job}}">
                        <div class="form-group"> 
                            <label for="single" class="control-label"> Nghề nghiệp: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="mother_job" name="mother_job" value="{{$users->mother_job}}" readonly>
                            </div>                    
                        </div>
                    <div class="form-group ">
                        <label class="control-label col-md-3" style="margin-left: -15px"></i>Họ và tên người giám hộ </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name_giamho" style="text-transform: capitalize;"
                                   name="name_giamho">
                        </div>
                    </div>
                    <br></br>
                    <div class="form-group ">
                        <label class="control-label col-md-3" style="margin-left: -15px"></i>Nghề nghiệp </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nghe_giamho" style="text-transform: capitalize;"
                                   name="nghe_giamho">
                        </div>
                    </div>               
                    <br></br>
                    <div></div>
                    <p></p>
                    <br></br>
                    <p style="margin-left: 710px">HIỆU TRƯỞNG</p>
                    <p style="margin-left: 700px"><i>(Ký và đóng dấu)</i></p>
                    <p style="text-align: right;margin-top: 80px"><b>Nguyễn Đình Minh</b></p>                           
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right"> Tạo mới học bạ </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection
