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
                <p style="text-align: center;font-size: 16px"><b>PHIẾU ĐIỀU CHUYỂN TRƯỜNG</b></p>
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
                <form  action="{{ url('/admin/formdctrtuong') }}" method="POST" class="register-form">
                    {{ csrf_field() }}
                    <p>Theo quyết định về việc điều chuyển học sinh của BGH trường THPT Nguyễn Khuyến về việc điều chuyển trường cho học sinh. Căn cứ quyết định theo quy chế đào tạo của Phòng Giáo dục Đào Tạo huyện Vĩnh Bảo, căn cứ theo quy chế đào tạo của trường THPT Nguyễn Khuyến. Quyết định điều chuyển</p>
                    <input type="hidden" name="user_id" value="{{$users->name}}">
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
                    <div class="form-group" style="margin-left: -16px">
                        <label class="control-label col-md-3"><i class="icon-require">*</i>Lớp đang học hiện tại</label>
                        <div class="col-md-3">
                            <select class="bs-select form-control" id="lopht" name="lopht">
                                @foreach($list_classes as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->name_class}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div></div>
                    <br>
                    <p>Trường THPT Nguyễn Khuyến - Vĩnh Bảo - Hải Phòng</p>
                    <p>Quyết định điều chuyển học sinh đến với đơn vị học tập mới tại trường: <input type="text" class="form-control" id="name_school_transfer" style="text-transform: capitalize;"
                                   name="name_school_transfer"></p>
                    <div></div>
                    <p>Địa chỉ:<input type="text" class="form-control" id="add_new_school" style="text-transform: capitalize;"
                                   name="add_new_school"> </p>
                    <div>
                        <p>Với lý do điều chuyển sau:</p>
                        <textarea type="text" class="form-control" id="reason_of_transform" style="width: 100%; height: 100px" name="reason_of_transform" maxlength="10000"></textarea>
                    </div>
                    <p><i>Quyết định có hiệu lực từ ngày ký.</i></p>
                    <p style="margin-left: 720px">Hiệu trưởng</p>
                     <p style="margin-left: 700px"><i>(Ký và đóng dấu)</i></p>
                    <p style="text-align: right;margin-top: 80px"><b>Nguyễn Đình Minh</b></p>                           
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right"> Tạo phiếu điều chuyển trường </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection
