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
            @if (@isset($ctt) && ($ctt != null))
                @foreach ($ctt as $object)
                    <div>
                        <div>
                            <p>SỞ GD&ĐT HẢI PHÒNG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                            <p>Trường THPT Nguyễn Khuyến&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Độc lập - Tự do - Hạnh phúc</u></p>
                            <p>Số: {{$object->id}}/GCNTNTTNK</p>
                        </div>
                    </div>
                    <div>
                        <p style="text-align: center;font-size: 16px"><b>GIẤY CHỨNG NHẬN TỐT NGHIỆP THPT</b></p>
                        <p style="text-align: center;"><b><i>(Tạm thời)</i></b></p>
                    </div>
                    <div class="portlet-body form">
                            <p><b>Hiệu trưởng trường THPT/Giám đốc TT GDTX chứng nhận: </b></p>
                            <p>Học sinh: <b>{{$object->user_name}}</b></p>
                            <p>Ngày sinh: <b>{{Illuminate\Support\Carbon::parse($object->DOB)->format('d-m-Y')}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dân tộc:
                                    <b>@if($object->folk==1)
                                        Kinh
                                    </b>
                                    @else
                                        Khác
                            @endif
                            </p>
                            <p>Giới tính:
                                <b>@if($object->gender==0)
                                    Nam
                                @else
                                    Nữ
                                @endif
                                </b>
                            </p>
                            <p>Nơi sinh:<b> {{$object->address}}</b></p>
                            
                            <p>Đã tham dự kỳ thi tốt nghiệp THPT QG năm: <b>{{$object->year}}</b>
                            <p>Tại:<b>{{$object->council_test}}</b></p>
                            <p>Số báo danh: <b>{{$object->SBD}}</b></p>
                            <p>Điểm xét tốt nghiệp: <b>{{$object->ĐTN}}</b>,&nbsp;&nbsp;&nbsp;&nbsp; trong đó điểm thi từng môn là: </p>
                            <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                                <tr  style="white-space: nowrap;">
                                    <th>Môn</th>
                                    <th style="text-align: center">Điểm TB lớp 12</th>
                                    <th style="text-align: center">Toán</th>
                                    <th style="text-align: center">Ngữ Văn</th>
                                    <th style="text-align: center">Ngoại ngữ</th>
                                    <th style="text-align: center">Bài thi tổ hợp</th>
                                    <th style="text-align: center">Tên bài thi tổ hợp</th>
                                    <th style="text-align: center">Ghi chú</th>
                                </tr>
                                <tr  style="white-space: nowrap;">
                                    <td>Điểm</td>
                                    <td style="text-align: center">{{$object->ĐTB12}}</td>
                                    <td style="text-align: center">{{$object->math}}</td>
                                    <td style="text-align: center">{{$object->liter}}</td>
                                    <td style="text-align: center">{{$object->other_languague}}</td>
                                    <td style="text-align: center">{{$object->BTTH}}</td>
                                    <td style="text-align: center">{{$object->name_of_BTTH}}</td>
                                    <td style="text-align: center">{{$object->note}}</td>
                                </tr>
                            </table>
                            <p>*Điểm khuyến khích(nếu có): <b>{{$object->ĐKK}}</b></p>
                            <p>*Diện xét TN(nếu có):<b>{{$object->DXTN}}</b></p>
                            <p>Đủ điều kiện công nhận tốt nghiệp THPT theo quy chế thi của Bộ Giáo dục và Đào tạo</p>
                            <p>Giấy chứng nhận tạm thời có giá trị trong thời gian 01 năm chờ cấp bằng tốt nghiệp THPT chính thức </p>
                            <p style="margin-left: 770px"><i>Vĩnh Bảo, ngày {{Illuminate\Support\Carbon::parse($object->created_at)->format('d')}} tháng {{Illuminate\Support\Carbon::parse($object->created_at)->format('m')}} năm {{Illuminate\Support\Carbon::parse($object->created_at)->format('Y')}}</b></i></p>
                            <p style="margin-left: 840px"><b>THỦ TRƯỞNG ĐƠN VỊ</b></p>
                            <p style="margin-left: 850px"><i>(Ký tên và đóng dấu)</i></p>
                            <p style="margin-left: 855px;margin-top: 80px"><b>Nguyễn Đình Minh</b></p>                           
                            <p><i>Tạo lúc: {{$object->created_at}}</i></p>
                            <p><i>THPTNguyenKhuyen</i></p>
                    </div>
                @endforeach
            @endif
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection