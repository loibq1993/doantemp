@extends('admindetail.layouts.master')
@section('content')
<script>
    var contants = {
        mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}"
        }
</script>
        <!-- Content Header (Page header) -->
        <div style="margin-bottom: 10px"></div>
        @if (@isset($tf) && ($tf != null))
            <div>
            @foreach ($tf as $object)
                <p style="text-align: center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                <p style="text-align: center;">Độc lập - Tự do - Hạnh Phúc</p>
                <p style="text-align: center;">------------------------</p>
            </div>
            <div>
                <p style="text-align: center;font-size: 16px"><b>PHIẾU ĐIỀU CHUYỂN LỚP</b></p>
            </div>
            <p>Phiếu điều chuyển số: {{$object->id}}/QDĐCHSTHPTNK</p>
            <p>Theo quyết định về việc điều chuyển học sinh của BGH trường THPT Nguyễn Khuyến về việc điều chuyển lớp cho học sinh. Căn cứ theo quy chế ban hành đào tạo của trường THPT Nguyễn Khuyến. Quyết định điều chuyển</p>
            <p>Họ và tên học sinh: <b>{{$object->name_user}}</b></p>
            <p>Mã học sinh:<b>{{$object->user_id}}</b></p>
            <p>Lớp đang theo học:<b>{{$object->class_id_old}}</b></p>
            <p>Theo quy chế ban hành đào tạo số ĐT666/THPTNK2017 quyết định điều chuyển học sinh đến lớp</p>
            <p>Lớp mới chuyển đến: <b>{{$object->class_id_new}}</b></p>
            <p>Với lý do:</p>
            <p style="margin-left: 30px">{{$object->reason_of_transform}}</p>
            <p><i>Quyết định có hiệu lực từ <b>{{$object->created_at}}</b> </i></p>
            <p style="margin-left: 820px">Hiệu trưởng</p>
            <p style="margin-left: 810px"><i>(Ký và đóng dấu)</i></p>
            <p style="margin-left: 800px; margin-top: 60px"><b>Nguyễn Đình Minh</b></p>
        @endforeach
        @endif
@endsection
