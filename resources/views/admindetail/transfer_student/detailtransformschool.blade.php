@extends('admindetail.layouts.master')
@section('content')
<script>
    var contants = {
        mess_required : "{{ Illuminate\Support\Facades\Config::get('constant.validate_required') }}"
        }
</script>
        <!-- Content Header (Page header) -->
        <div style="margin-bottom: 10px"></div>
        @if (@isset($tfs) && ($tfs != null))
            <div>
            @foreach ($tfs as $object)
                <p style="text-align: center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                <p style="text-align: center;">Độc lập - Tự do - Hạnh Phúc</p>
                <p style="text-align: center;">------------------------</p>
            </div>
            <div>
                <p style="text-align: center;font-size: 16px"><b>PHIẾU ĐIỀU CHUYỂN TRƯỜNG</b></p>
            </div>
            <p>Phiếu điều chuyển trường số: {{$object->id}}/QDĐCTRHSTHPTNK</p>
            <p>Theo quyết định về việc điều chuyển học sinh của BGH trường THPT Nguyễn Khuyến về việc điều chuyển trường cho học sinh. Căn cứ quyết định theo quy chế đào tạo của Phòng Giáo dục Đào Tạo huyện Vĩnh Bảo, căn cứ theo quy chế đào tạo của trường THPT Nguyễn Khuyến. Quyết định điều chuyển</p>
            <p>Họ và tên học sinh: <b>{{$object->name_user}}</b></p>
            <p>Mã học sinh:<b>{{$object->user_id}}</b></p>
            <p>Lớp đang theo học:<b>{{$object->class_id_current}}</b></p>
            <p>Trường THPT Nguyễn Khuyến - Hải Phòng</p>
            <p>Theo quy chế ban hành đào tạo số ĐT676/THPTNK2017 quyết định điều chuyển học sinh đến đơn vị học tập mới</p>
            <p>Trường chuyển đến: <b>{{$object->name_of_new_school}}</b></p>
            <p>Địa chỉ:<b>{{$object->address_of_new_school}}</b></p>
            <p>Với lý do:</p>
            <p>*Yêu cầu: Giáo viên chủ nhiệm có trách nhiệm báo cáo lại các thông tin về học sinh điều chuyển trường đối với phía gia đình. Tổ Văn Phòng có trách nhiệm hoàn tất các thủ tục, và hồ sơ liên quan đến học sinh chuyển trường để bàn giao lại phía gia đình và học sinh. Nghiêm túc thực hiện những quy định của nhà trường</p>
            <p style="margin-left: 30px">{{$object->reason_of_transform}}</p>
            <p><i>Quyết định có hiệu lực từ <b>{{$object->created_at}}</b> </i></p>
            <p style="margin-left: 820px">Hiệu trưởng</p>
            <p style="margin-left: 810px"><i>(Ký và đóng dấu)</i></p>
            <p style="margin-left: 800px; margin-top: 60px"><b>Nguyễn Đình Minh</b></p>
        @endforeach
        @endif
@endsection
