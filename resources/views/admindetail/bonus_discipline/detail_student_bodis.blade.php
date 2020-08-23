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
        <div class="portlet light bordered" style="margin-left: 120px">
        @if (@isset($lsbd) && ($lsbd != null))
            @foreach ($lsbd as $object)
                <div> 
                    <p style="text-align: center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                    <p style="text-align: center;">Độc lập - Tự do - Hạnh Phúc</p>
                    <p style="text-align: center;">------------------------</p>
                </div>
                <div>
                    <p style="text-align: center;font-size: 16px"><b>QUYẾT ĐỊNH KHEN THƯỞNG - KỶ LUẬT</b></p>
                </div>
                <div class="portlet-body form">
                        <p>Hiệu trưởng trường THPT Nguyễn Khuyến quyết định về việc khen thưởng/kỷ luật học sinh</p>
                        <p>Học sinh: <b>{{$object->name_student}}</b></p>
                        <p>Mã học sinh: <b>{{$object->user_id}}</b></p>
                        <p>Lớp: <b>{{$object->name_class}}</b></p>
                        <p>Năm học:<b>{{$object->academic_year_id}}</b> </p>
                        <p><b>Trường THPT Nguyễn Khuyến - Vĩnh Bảo - Hải Phòng</b></p>
                        <p>Căn cứ quyết định về khen thưởng / kỷ luật học sinh</p>
                        <p>Căn cứ quy chế khen thưởng - kỷ luật của trường THPT Nguyễn Khuyến</p>
                        <p>Khen thưởng/ Kỷ luật với học sinh trên </p>
                        <p>NỘI DUNG KHEN THƯỞNG / KỶ LUẬT:</p>
                        <p style="margin-left: 20px">
                           <b> {{$object->content}} </b>
                        </p>
                        <div>
                            <p>Với mức thưởng/ mức kỷ luật là:</p>
                            <b><p style="margin-left: 20px">{{$object->rate}}</b> </p>
                        </div>
                        <div>
                            <p>Hình thức:</p>
                            <p style="margin-left: 20px"><b>{{$object->hinhthuc}}</b></p>
                        </div>	
                        <p><i>Quyết định có hiệu lực từ ngày ký.</i></p>
                        <p style="margin-left: 450px"><i>Vĩnh Bảo, ngày {{Illuminate\Support\Carbon::parse($object->created_at)->format('d')}} tháng {{Illuminate\Support\Carbon::parse($object->created_at)->format('m')}} năm {{Illuminate\Support\Carbon::parse($object->created_at)->format('Y')}}</b></i></p>
                        <p style="margin-left: 575px">Hiệu trưởng</p>
                        <p style="margin-left: 560px"><i>(Ký và đóng dấu)</i></p>
                        <p style="text-align: right;margin-top: 80px; margin-right: 20px"><b>Nguyễn Đình Minh</b></p>
                </div>
            @endforeach
        @endif

        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection
