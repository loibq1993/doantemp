@extends('admindetail.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
        <div style="margin-bottom: 10px"></div>
        @if (@isset($lsc) && ($lsc != null))
            @foreach ($lsc as $object)
            <div>
                <a href="{{ url('/admin/downloadpdf?tid='.$object->id) }}"> 
                    {{-- <button type="button" class="btn btn-primary"> <b> Save as PDF</b></button> --}}
                </a>
            </div>
                <p style="text-align: center;font-family: Times New Roman; font-size: 17px; font-size: 20px">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                <p style="text-align: center;font-family: Times New Roman; font-size: 17px;font-size: 17px">Độc lập - Tự do - Hạnh Phúc</p>
                <p style="text-align: center; margin-top: -30px">_____________________________</p>
                <p style="text-align: center;font-size: 30px; font-family: Times New Roman"><b>HỌC BẠ</b></p>
                <p style="text-align: center;font-size: 16px"><b>TRUNG HỌC PHỔ THÔNG</b></p>
                <p style="text-align: center;font-size: 13px"><b>Số: {{$object->id}}-THPTNK/THPT</b></p>
                <p style="font-family: Times New Roman; font-size: 16px">Họ và tên học sinh: <b>{{$object->name_student}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Giới tính:
                    <b>@if($object->gender==0)
                        Nam
                    @else
                        Nữ
                    @endif
                    </b>
                </p>
                <p style="font-family: Times New Roman; font-size: 16px">Ngày sinh: <b>{{Illuminate\Support\Carbon::parse($object->dob)->format('d')}}</b> tháng <b>{{Illuminate\Support\Carbon::parse($object->dob)->format('m')}}</b> năm <b>{{Illuminate\Support\Carbon::parse($object->dob)->format('Y')}}</b> </p>
                <p style="font-family: Times New Roman; font-size: 16px">Nơi sinh: <b>{{$object->placeborn}}</b></p>
                <p style="font-family: Times New Roman; font-size: 16px">Dân tộc: 
                    <b>@if($object->folk==1)
                        Kinh
                    @endif
                    </b>
                    , con liệt sĩ, con thương binh(bệnh binh, người được hưởng chế độ như thương binh, gia đình có công với cách mạng).....................................................
                </p>
                <p style="font-family: Times New Roman; font-size: 16px">Chỗ ở hiện tại: <b>{{$object->address}}</b></p>
                <p style="font-family: Times New Roman; font-size: 16px">Họ tên cha:<b>&nbsp;{{$object->name_of_fa}}</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;nghề nghiệp:<b>{{$object->job_of_fa}}</b></p>
                <p style="font-family: Times New Roman; font-size: 16px">Họ tên mẹ: <b>{{$object->name_of_mo}}</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;nghề nghiệp:<b>{{$object->job_of_mo}}</b></p>
                <p style="margin-left: 810px; font-family:Times New Roman; font-size: 16px"><i>Vĩnh Bảo, ngày {{Illuminate\Support\Carbon::parse($object->created_at)->format('d')}} tháng {{Illuminate\Support\Carbon::parse($object->created_at)->format('m')}} năm {{Illuminate\Support\Carbon::parse($object->created_at)->format('Y')}}</b></i></p>
                <p style="margin-left: 910px; font-family: Times New Roman; font-size: 17px"><b>HIỆU TRƯỞNG</b></p>
                <p style="margin-left: 915px; font-family: Times New Roman; font-size: 16px"><i>(Ký và đóng dấu)</i></p>
                <p style="margin-left: 900px;margin-top: 60px; font-family: Times New Roman; font-size: 17px"><b>Nguyễn Đình Minh</b></p>
                <p style="text-align: center;font-family: Times New Roman; font-size: 18px"><b>QUÁ TRÌNH HỌC TẬP</b></p>
                @if (@isset($classes) && ($classes != null))

                    <!-- Main content -->
                    <section class="content">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-checkable" style="width: 100%">
                                    <tr class="background">
                                        <th style="width: auto">STT</th>
                                        <th style="width: auto">Năm học</th>
                                        <th style="width: auto">Lớp</th>
                                        <th style="width: auto">Trường</th>
                                        <th style="width: auto">Ghi chú</th>
                                        <th style="width: auto;"> Xác nhận của hiệu trưởng</th>                       
                                    </tr>
                                    @foreach($classes as $index => $cl)
                                    <tr>
                                            <td>
                                                {{$index+1}}
                                            </td>
                                            <td>
                                                {{$cl->academic_year_id}}
                                            </td>
                                            <td>
                                                {{$cl->name_class}}
                                            </td>
                                            <td>THPT Nguyễn Khuyến - Vĩnh Bảo - Hải Phòng</td>
                                            <td>
                                                {{$cl->note}}
                                            </td>
                                            <td></td>                              
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- /.content -->
                @endif
            @endforeach
        @endif
@endsection
