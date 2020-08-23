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
            <div class="portlet-body form">
            @if (@isset($wsc) && ($wsc != null))
                @foreach ($wsc as $object)
                
                    <p><i>Họ và tên: <b>{{$object->name}}</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Lớp:<b>{{$object->name_class}}</b></i></p> 
                    <p><i>Năm học: <b>{{$object->school_year_id}}</b></i></p>
                    <p><i>Ban: <b>Cơ bản</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Môn học nâng cao: <b>Không có</i></b></p>
                    <div><p><b><i>Trường THPT Nguyễn Khuyến - Vĩnh Bảo - Hải Phòng</i></b></p></div> 
                    <table class="table table-bordered table-checkable" style="width: 100%">
                        <tr>
                            <th style="text-align: center">Môn học</th>
                            <th style="text-align: center">TBHKỳ I</th>
                            <th style="text-align: center">TBHKỳ II</th>
                            <th style="text-align: center">Cả năm</th>
                            <th style="width: auto;text-align: center">Điểm kiểm tra lại</th>
                            <th style="text-align: center">Giáo viên bộ môn</th>
                        </tr>
                        <tr>
                            <td>Toán</td>
                            <td style="text-align: center">{{$object->toan_1}}</td>
                            <td style="text-align: center">{{$object->toan_2}}</td>
                            <td style="text-align: center">{{$object->toan_2}}</td>
                            <td style="text-align: center">{{$object->toan_L}}</td>
                            <td style="text-align: center">{{$object->gvtoan}}</td>
                        </tr>
                        <tr>
                            <td>Vật lý</td>
                            <td style="text-align: center">{{$object->ly_1}}</td>
                            <td style="text-align: center">{{$object->ly_2}}</td>
                            <td style="text-align: center">{{$object->ly_CN}}</td>
                            <td style="text-align: center">{{$object->ly_L}}</td>
                            <td style="text-align: center">{{$object->gvly}}</td>
                        </tr>
                        <tr>
                            <td>Hóa học</td>
                            <td style="text-align: center">{{$object->hoa_1}}</td>
                            <td style="text-align: center">{{$object->hoa_2}}</td>
                            <td style="text-align: center">{{$object->hoa_cn}}</td>
                            <td style="text-align: center">{{$object->hoa_l}}</td>
                            <td style="text-align: center">{{$object->gvhoa}}</td>
                        </tr>
                        <tr>
                            <td>Sinh học</td>
                            <td style="text-align: center">{{$object->sinh_1}}</td>
                            <td style="text-align: center">{{$object->sinh_2}}</td>
                            <td style="text-align: center">{{$object->sinh_CN}}</td>
                            <td style="text-align: center">{{$object->sinh_L}}</td>
                            <td style="text-align: center">{{$object->gvsinh}}</td>
                        </tr>
                        <tr>
                            <td>Tin học</td>
                            <td style="text-align: center">{{$object->tin_1}}</td>
                            <td style="text-align: center">{{$object->tin_2}}</td>
                            <td style="text-align: center">{{$object->tin_CN}}</td>
                            <td style="text-align: center">{{$object->tin_L}}</td>
                            <td style="text-align: center">{{$object->gvtin}}</td>
                        </tr>
                        <tr>
                            <td>Ngữ văn</td>
                            <td style="text-align: center">{{$object->van_1}}</td>
                            <td style="text-align: center">{{$object->van_2}}</td>
                            <td style="text-align: center">{{$object->van_cn}}</td>
                            <td style="text-align: center">{{$object->van_l}}</td>
                            <td style="text-align: center">{{$object->gvvan}}</td>
                        </tr>
                        <tr>
                            <td>Lịch sử</td>
                            <td style="text-align: center">{{$object->su_1}}</td>
                            <td style="text-align: center">{{$object->su_2}}</td>
                            <td style="text-align: center">{{$object->su_cn}}</td>
                            <td style="text-align: center">{{$object->su_l}}</td>
                            <td style="text-align: center">{{$object->gvsu}}</td>
                        </tr>
                        <tr>
                            <td>Địa lí</td>
                            <td style="text-align: center">{{$object->dia_1}}</td>
                            <td style="text-align: center">{{$object->dia_2}}</td>
                            <td style="text-align: center">{{$object->dia_cn}}</td>
                            <td style="text-align: center">{{$object->dia_l}}</td>
                            <td style="text-align: center">{{$object->gvdia}}</td>
                        </tr>
                        <tr>
                            <td>Ngoại ngữ</td>
                            <td style="text-align: center">{{$object->tienganh_1}}</td>
                            <td style="text-align: center">{{$object->tienganh_2}}</td>
                            <td style="text-align: center">{{$object->tienganh_cn}}</td>
                            <td style="text-align: center">{{$object->tienganh_lai}}</td>
                            <td style="text-align: center">{{$object->gvanh}}</td>
                        </tr>
                        <tr>
                            <td>Công nghệ</td>
                            <td style="text-align: center">{{$object->cn_1}}</td>
                            <td style="text-align: center">{{$object->cn_2}}</td>
                            <td style="text-align: center">{{$object->cn_cn}}</td>
                            <td style="text-align: center">{{$object->cn_l}}</td>
                            <td style="text-align: center">{{$object->qvcongnghe}}</td>
                        </tr>
                        <tr>
                            <td>GD QP-AN</td>
                            <td style="text-align: center">{{$object->qp_1}}</td>
                            <td style="text-align: center">{{$object->qp_2}}</td>
                            <td style="text-align: center">{{$object->qp_cn}}</td>
                            <td style="text-align: center">{{$object->qp_l}}</td>
                            <td style="text-align: center">{{$object->gvqpan}}</td>
                        </tr>
                        <tr>
                            <td>Thể dục</td>
                            <td style="text-align: center">{{$object->qp_1}}</td>
                            <td style="text-align: center">{{$object->qp_2}}</td>
                            <td style="text-align: center">{{$object->qp_cn}}</td>
                            <td style="text-align: center">{{$object->qp_l}}</td>
                            <td style="text-align: center">{{$object->gvqpan}}</td>
                        </tr>
                        <tr>
                            <td>Tự chọn (Nghề PT/NN)</td>
                            <td style="text-align: center">{{$object->nghe_1}}</td>
                            <td style="text-align: center">{{$object->nghe_2}}</td>
                            <td style="text-align: center">{{$object->nghe_cn}}</td>
                            <td style="text-align: center">{{$object->nghe_cn}}</td>
                            <td style="text-align: center">{{$object->gvnghe}}</td>
                        </tr>
                        <tr>
                            <td>Giáo dục công dân</td>
                            <td style="text-align: center">{{$object->congdan_1}}</td>
                            <td style="text-align: center">{{$object->congdan_2}}</td>
                            <td style="text-align: center">{{$object->cd_cn}}</td>
                            <td style="text-align: center">{{$object->cd_l}}</td>
                            <td style="text-align: center">{{$object->gvgdcd}}</td>
                        </tr>
                        <tr>
                            <td>ĐTB các môn</td>
                            <td style="text-align: center">{{$object->DTBHK1}}</td>
                            <td style="text-align: center">{{$object->DTBHK2}}</td>
                            <td style="text-align: center">{{$object->DTBHLCN}}</td>
                            <td style="text-align: center">{{$object->DTBL}}</td>
                            <td style="text-align: center">{{$object->gvcn}}</td>
                        </tr>
                    <table>
                    <p>Trong bảng này có sửa chữa ở: .................................. chỗ, thuộc các môn học: .................................................</p>
                    <p>Xác nhận của giáo viên chủ nhiệm &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14;  &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; Xác nhận của Hiệu trưởng</p>
                    <p> &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14;(Ký và ghi rõ họ tên)  &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14;(Ký và ghi rõ họ tên)</p>
                    <p style="margin-top: 60px">&emsp14; &emsp14; &emsp14; &emsp14;&emsp14; &emsp14; &emsp14; &emsp14;&emsp14; &emsp14; &emsp14; &emsp14;<b><i>&emsp;&emsp;&emsp;{{$object->gvcn}}</i></b> &emsp14; &emsp14; &emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14;&emsp; &emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;  &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14; &emsp14;<b><i>Nguyễn Đình Minh</i></b></p>
                    <table class="table table-bordered table-checkable" style="width: 100%">
                        <tr>
                         <th style="text-align: center">Học kỳ</th>
                         <th style="text-align: center">Học lực</th>
                         <th style="text-align: center">Hạnh kiểm</th>
                         <th style="text-align: center">Tổng số buổi nghỉ</th>
                         <th style="text-align: center">Học lực khi rèn luyện lại</th>
                         <th style="text-align: center">Hạnh kiểm khi rèn luyện lại</th>
                        </tr>
                         <th>Học kỳ I</th>
                         <td style="text-align: center">
                            @if($object->HL1==0)
                                 Giỏi
                            @elseif($object->HL1==1)
                                Khá
                            @elseif($object->HL1==2)
                                Trung bình
                            @elseif($object->HL1==3)
                                Yếu
                            @endif
                         </td>
                        <td style="text-align: center">
                                {{$object->HK1}}
                        </td>
                         
                         <td rowspan="3" style="text-align: center"></td>
                         <td rowspan="3" style="text-align: center"></td>
                         <td rowspan="3" style="text-align: center"></td>
                        <tr>
                         <th>Học kỳ II</th>
                         <td style="text-align: center">
                            @if($object->HL2==0)
                                 Giỏi
                            @elseif($object->HL2==1)
                                Khá
                            @elseif($object->HL2==2)
                                Trung bình
                            @elseif($object->HL2==3)
                                Yếu
                            @endif
                         </td>
                         <td style="text-align: center">
                            {{$object->HK2}}
                        </td>
                        </tr>
                        <tr>
                         <th>Cả năm</th>
                         <td style="text-align: center">
                            @if($object->HLCN==0)
                                 Giỏi
                            @elseif($object->HLCN==1)
                                Khá
                            @elseif($object->HLCN==2)
                                Trung bình
                            @elseif($object->HLCN==3)
                                Yếu
                            @endif
                         </td>
                         <td style="text-align: center">
                            {{$object->HKCN}}
                        </td>
                        </tr>
                     </table>
                    <p>Có chứng chỉ nghề phổ thông: 
                        <p style="text-align: center"><b>{{$object->chungchi}}</b></p>
                    </p>
                    <p>Được giải thưởng trong các kỳ thi từ cấp huyện trở lên: 
                       
                    </p> 
                    <div class="form-group">
                        <p>Khen thưởng - kỷ luật:{{$object->giaithuong}}  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Mức: {{$object->value_giaithuong}}</p>
                    </div>
                    <br>
                    <div style="margin-top: 10px"></div>
                    <p style="text-align: center"><b>NHẬN XÉT CỦA GIÁO VIÊN CHỦ NHIỆM</b>
                        <p style="text-align: center">{{$object->NXGV}}</p>
                    </p>
                    <p style="text-align: center"><b>PHÊ DUYỆT CỦA HIỆU TRƯỞNG</b>
                        <p style="text-align: center">{{$object->NXHT}}</p>
                    </p>
                    <p style="margin-left: 750px; font-family:Times New Roman; font-size: 16px"><i>Vĩnh Bảo, ngày {{Illuminate\Support\Carbon::parse($object->created_at)->format('d')}} tháng {{Illuminate\Support\Carbon::parse($object->created_at)->format('m')}} năm {{Illuminate\Support\Carbon::parse($object->created_at)->format('Y')}}</b></i></p>
                    <p style="margin-left: 850px; font-family: Times New Roman; font-size: 17px"><b>HIỆU TRƯỞNG</b></p>
                    <p style="margin-left: 850px; font-family: Times New Roman; font-size: 16px"><i>(Ký và đóng dấu)</i></p>
                    <p style="margin-left: 840px;margin-top: 60px; font-family: Times New Roman; font-size: 17px"><b>Nguyễn Đình Minh</b></p>
                </table>
                @endforeach
               <i>Nguyen Khuyen High School - Vinh Bao - Hai Phong</i>

            @endif
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection