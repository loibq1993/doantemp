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
                <p style="text-align: center;font-size: 16px"><b>QUYẾT ĐỊNH KHEN THƯỞNG - KỶ LUẬT</b></p>
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
                <form  action="{{ url('/admin/formktkl') }}" method="POST" class="register-form">
                    {{ csrf_field() }}
                    <p>Hiệu trưởng trường THPT Nguyễn Khuyến quyết định về việc khen thưởng/kỷ luật học sinh</p>
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
                                <option disabled="disabled" selected="selected">Chọn lớp học</option>
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
                    <p>Căn cứ quyết định về khen thưởng / kỷ luật học sinh</p>
                    <p>Căn cứ quy chế khen thưởng - kỷ luật của trường THPT Nguyễn Khuyến</p>
                    <p>Khen thưởng/ Kỷ luật với học sinh trên </p>
                    <p>NỘI DUNG KHEN THƯỞNG / KỶ LUẬT</p>
                        <textarea type="text" class="form-control" id="content_bodis" style="width: 827px; height: 405px" name="content_bodis" maxlength="10000"></textarea>
                    <div>
                        <p>Với mức thưởng/ mức kỷ luật là:</p>
                        <textarea type="text" class="form-control" id="value_bodis" style="width: 100%; height: 100px" name="value_bodis" maxlength="10000"></textarea>
                    </div>
                    <div>
                        <p>Hình thức:</p>
                        <textarea type="text" class="form-control" id="hinhthuc" style="width: 100%; height: 100px" name="hinhthuc" maxlength="10000"></textarea>
                    </div>
                    <br>
                    <div class="form-group ">
                        <label class="control-label col-md-3">Loại:</label>
                        <div class="col-md-3" style="margin-left: -140px">
                            <select class="form-control" id="type" name="type">
                                <option value="0">Khen thưởng</option>
                                <option value="1">Kỷ luật</option>
                            </select>
                        </div>
                    </div>	
                    <br>
                    <br>
                    <p><i>Quyết định có hiệu lực từ ngày ký.</i></p>
                    <p style="margin-left: 720px">Hiệu trưởng</p>
                     <p style="margin-left: 700px"><i>(Ký và đóng dấu)</i></p>
                    <p style="text-align: right;margin-top: 80px"><b>Nguyễn Đình Minh</b></p>                           
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right"> Tạo khen thưởng </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection
