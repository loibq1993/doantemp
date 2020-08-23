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
    <div class="col-md-13">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div>
                <p style="text-align: center;font-size: 16px"><b>GIẤY CHỨNG NHẬN TỐT NGHIỆP THPT</b></p>
                <p style="text-align: center;"><b><i>(Tạm thời)</i></b></p>
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
                <form  action="{{ url('/admin/sctemp') }}" method="POST" class="register-form">
                    {{ csrf_field() }}
                    <p><b>Hiệu trưởng trường THPT/Giám đốc TT GDTX chứng nhận: </b></p>
                     <input type="hidden" name="user_name" value="{{$users->name}}">
                        @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
                        <div class="form-group"> 
                            <label for="single" class="control-label">Học sinh: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_name" name="user_name" value="{{$users->name}}" readonly style="width: 214px; height: 38px">
                            </div>                          
                        </div>  
                        @endif
                    <input type="hidden" name="user_id" value="{{$users->id}}">
                        @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
                        <div class="form-group"> 
                            <label for="single" class="control-label">Mã học sinh: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{$users->id}}" readonly style="width:214px; height: 38px">
                            </div>                          
                        </div>
                        @endif
                    <input type="hidden" name="dob" value="{{$users->date_of_birth}}">
                        @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
                        <div class="form-group"> 
                            <label for="single" class="control-label">Ngày sinh: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="dob" name="dob" value="{{$users->date_of_birth}}" readonly style="width:214px; height: 38px">
                            </div>                          
                        </div>
                        @endif
                    <input type="hidden" name="folk" value="{{$users->folk_id}}">
                        @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
                        <div class="form-group"> 
                            <label for="single" class="control-label">Dân tộc: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="folk" name="folk" value="{{$users->folk_id}}" readonly style="width:214px; height: 38px">
                            </div>                          
                        </div>
                        @endif
                    <input type="hidden" name="gender" value="{{$users->gender}}">
                        @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
                        <div class="form-group"> 
                            <label for="single" class="control-label">Giới tính: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="gender" name="gender" value="{{$users->gender}}" readonly style="width:214px; height: 38px">
                            </div>                          
                        </div>
                        @endif
                    <input type="hidden" name="address" value="{{$users->address}}">
                        @if(Auth::guard("admins")->user()->can('show', App\AdminUser::class))
                        <div class="form-group"> 
                            <label for="single" class="control-label">Địa chỉ: </label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="address" name="address" value="{{$users->address}}" readonly style="width:214px; height: 38px">
                            </div>                          
                        </div>
                        @endif

                    <p>Đã tham dự kỳ thi tốt nghiệp THPT QG năm <textarea type="text" class="form-control" id="year" style="width:62px; height: 34px" name="year" maxlength="10"></textarea></p>
                    <p>Tại:<input type="text" class="form-control" id="testcouncil"
                       name="testcouncil">
                    <p>Số báo danh:<textarea type="text" class="form-control" id="SBD" style="width:119px; height: 36px" name="SBD" maxlength="10000"></textarea> </p>
                    <p>Điểm xét tốt nghiệp:<textarea type="number" class="form-control" id="ĐXTN" style="width:119px; height: 36px" name="ĐXTN" maxlength="10000"></textarea></p> 
                    <p>Trong đó điểm thi từng môn là: </p>
                    <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                        <tr  style="white-space: nowrap;">
                            <th>Môn</th>
                            <th>Điểm TB lớp 12</th>
                            <th>Toán</th>
                            <th>Ngữ Văn</th>
                            <th>Ngoại ngữ</th>
                            <th>Bài thi tổ hợp</th>
                            <th>Tên bài thi tổ hợp</th>
                            <th>Ghi chú</th>
                        </tr>
                        <tr  style="white-space: nowrap;">
                            <td>Điểm</td>
                            <td><textarea type="text" class="form-control" id="ĐTB12" style="width:64px; height: 51px;" name="ĐTB12" maxlength="10000"></textarea></td>
                            <td><textarea type="text" class="form-control" id="math" style="width: 64px; height: 51px;" name="math" maxlength="10000"></textarea></td>
                            <td><textarea type="text" class="form-control" id="literature" style="width: 64px; height: 51px;" name="literature" maxlength="10000"></textarea></td>
                            <td><textarea type="text" class="form-control" id="otherlang" style="width: 64px; height: 51px;" name="otherlang" maxlength="10000"></textarea></td>
                            <td><textarea type="text" class="form-control" id="BTTH" style="width: 64px; height: 51px;" name="BTTH" maxlength="10000"></textarea></td>
                            <td><textarea type="text" class="form-control" id="tenBTTH" style="width: auto; height: auto;" name="tenBTTH" maxlength="10000"></textarea></td>
                            <td><textarea type="text" class="form-control" id="note" style="width: auto; height: auto;" name="note" maxlength="10000"></textarea></td>
                        </tr>
                    </table>
                    <p>*Điểm khuyến khích(nếu có): <textarea type="text" class="form-control" id="DKK" style="width:119px; height: 36px" name="DKK" maxlength="10000"></textarea></p>
                    <p>*Diện xét TN(nếu có):<textarea type="text" class="form-control" id="DXTN" style="width:119px; height: 36px" name="DXTN" maxlength="10000"></textarea> </p>
                    <p>Đủ điều kiện công nhận tốt nghiệp THPT theo quy chế thi của Bộ Giáo dục và Đào tạo</p>
                    <p>Giấy chứng nhận tạm thời có giá trị trong thời gian 01 năm chờ cấp bằng tốt nghiệp THPT chính thức </p>
                    <p style="margin-left: 920px">Hiệu trưởng</p>
                    <p style="text-align: right;margin-top: 40px"><b>Nguyễn Đình Minh</b></p>                           
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right"> Tạo mới </button>
                    </div>
                </form>
               
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection