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
    <script>
        function valueBodis() {
			var x = document.getElementById("name_bodis").value;
			if (x == 0)
				$('#value_bodis').fadeOut('fast');
			else
				$('#value_bodis').fadeIn('fast');
		}

		$(document).ready(function(){
            valueBodis();
		});
    </script>
    <div class="col-md-13">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
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
                <form  action="{{ url('/admin/updatesr') }}" method="POST" class="register-form">
                    {{ csrf_field() }}
                    <div class="form-group"> 
                        <label for="single" class="control-label">Mã học sinh: </label>
                        <div class="input-icon" >
                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{$class->user_id}}" readonly style="width: 80px;text-align: left">
                        </div>                          
                    </div>  
                    <div class="form-group"> 
                        <label for="single" class="control-label">Mã lớp: </label>
                        <div class="input-icon">
                            <input type="text" class="form-control" id="class_id" name="class_id" value="{{$class->id}}" readonly style="width: 80px; text-align: left">
                        </div>                          
                    </div>
                    <div class="form-group"> 
                        <label for="single" class="control-label">Năm học: </label>
                        <div class="input-icon">
                            <input type="text" class="form-control" id="academic_year_id" name="academic_year_id" value="{{$class->academic_year_id}}" readonly style="width: 160px;">
                        </div>                          
                    </div>
                    <div><p><b>Trường THPT Nguyễn Khuyến - Vĩnh Bảo - Hải Phòng</b></p></div> 
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
                            <td><textarea type="text" class="form-control" id="toan1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="toan1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="toan2" style="width:53px; height: 43px;position: center;margin-left:40px" name="toan2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="toancn" style="width:53px; height: 43px;position: center;margin-left:40px" name="toanCN" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="toanlai" style="width:53px; height: 43px;position: center;margin-left:50px" name="toanlai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovientoan" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovientoan" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Vật lý</td>
                            <td><textarea type="text" class="form-control" id="ly1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ly1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ly2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ly2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="lycn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="lycn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="lylai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="lylai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovienly" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovienly" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Hóa học</td>
                            <td><textarea type="text" class="form-control" id="hoa1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="hoa1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="hoa2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="hoa2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="hoacn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="hoacn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="hoalai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="hoalai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovienhoa" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovienhoa" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Sinh học</td>
                            <td><textarea type="text" class="form-control" id="sinh1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="sinh1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="sinh2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="sinh2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="sinhcn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="sinhcn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="sinhlai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="sinhlai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoviensinh" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaoviensinh" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Tin học</td>
                            <td><textarea type="text" class="form-control" id="tin1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="tin1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="tin2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="tin2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="tincn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="tincn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="tinlai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="tinlai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovientin" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovientin" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Ngữ văn</td>
                            <td><textarea type="text" class="form-control" id="nguvan1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="nguvan1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="nguvan2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="nguvan2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="nguvancn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="nguvancn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="nguvanlai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="nguvanlai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovienvan" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovienvan" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                            
                        </tr>
                        <tr>
                            <td>Lịch sử</td>
                            <td><textarea type="text" class="form-control" id="lichsu1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="lichsu1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="lichsu2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="lichsu2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="lichsucn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="lichsucn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="lichsulai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="lichsulai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovienlichsu" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovienlichsu" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Địa lí</td>
                            <td><textarea type="text" class="form-control" id="diali1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="diali1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="diali2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="diali2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="dialicn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="dialicn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="dialilai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="dialilai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoviendiali" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaoviendiali" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        </tr>
                        <tr>
                            <td>Ngoại ngữ</td>
                            <td><textarea type="text" class="form-control" id="ngoaingu1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ngoaingu1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ngoaingu2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ngoaingu2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ngoaingucn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ngoaingucn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ngoaingulai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="ngoaingulai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovienngoaingu" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovienngoaingu" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        
                        </tr>
                        <tr>
                            <td>Công nghệ</td>
                            <td><textarea type="text" class="form-control" id="congnghe1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="congnghe1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="congnghe2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="congnghe2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="congnghecn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="congnghecn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="congnghelai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="congnghelai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoviencongnghe" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaoviencongnghe" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                        
                        </tr>
                        <tr>
                            <td>GD QP-AN</td>
                            <td><textarea type="text" class="form-control" id="qp1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="qp1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="qp2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="qp2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="qpcn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="qpcn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="qplai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="qplai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="gvqp" style="width:220px; height: 40px;position: center;margin-left:50px" name="gvqp" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                            
                        </tr>
                        <tr>
                            <td>Thể dục</td>
                            <td><textarea type="text" class="form-control" id="td1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="td1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="td2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="td2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="tdcn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="tdcn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="tdlai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="tdlai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaovientd" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaovientd" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                            
                        </tr>
                        <tr>
                            <td>Tự chọn (Nghề PT/NN)</td>
                            <td><textarea type="text" class="form-control" id="nghe1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="nghe1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="nghe2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="nghe2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="nghecn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="nghecn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="nghelai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="nghelai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoviennghe" style="width:220px; height: 40px;position: center;margin-left:50px" name="giaoviennghe" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                            
                        </tr>
                        <tr>
                            <td>Giáo dục công dân</td>
                            <td><textarea type="text" class="form-control" id="giaoduccd1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="giaoduccd1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoduccd2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="giaoduccd2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoduccdcn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="giaoduccdcn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="giaoduccdlai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="giaoduccdlai" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="gvgiaoduccd" style="width:220px; height: 40px;position: center;margin-left:50px" name="gvgiaoduccd" maxlength="50" placeholder="Tên giáo viên bộ môn"></textarea></td>
                           
                        </tr>
                        <tr>
                            <td>ĐTB các môn</td>
                            <td><textarea type="text" class="form-control" id="ĐTB1" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ĐTB1" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ĐTB2" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ĐTB2" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ĐTBcn" style="width:53px; height: 43px;position: center;text-align: center; margin-left:40px" name="ĐTBcn" maxlength="6"></textarea></td>
                            <td><textarea type="text" class="form-control" id="ĐTBlai" style="width:53px; height: 43px;position: center;text-align: center; margin-left:50px" name="ĐTBlai" maxlength="50" ></textarea></td>
                            <td><textarea type="text" class="form-control" id="GVCN" style="width:220px; height: 40px;position: center;margin-left:50px" name="GVCN" maxlength="50" placeholder="Giáo viên chủ nhiệm"></textarea></td>
                            
                        </tr>
                    <table>
                    <p>Trong bảng này có sửa chữa ở: .................................. chỗ, thuộc các môn học: .................................................</p>
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
                         <td>
                            <select class="form-control" id="hocluc1" name="hocluc1" style="width: auto;margin-left:25px">
                                <option value="0">Giỏi</option>
                                <option value="1">Khá</option>
                                <option value="2">TB</option>
                                <option value="3">Yếu</option>
                            </select>
                        </td>
                         
                         <td>
                            <select class="bs-select col-md-2" id="hanhkiem1" name="hanhkiem1" style="width: auto;">
                                    <option disabled="disabled" selected="selected">Hạnh kiểm</option>
                                    @foreach($conduct as $item)
                                        <option value="{{$item->name}}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                            </select>   
                         </td>
                         <td rowspan="3"><textarea type="text" class="form-control" id="tongbuoinghi" style="width:140px; height: 152px;position: center;text-align: center; margin-left:40px" name="tongbuoinghi" maxlength="6" placeholder="Tổng số buổi nghỉ cả năm"></textarea></td>
                         <td rowspan="3"><textarea type="text" class="form-control" id="hocluclai" style="width:140px; height: 152px;position: center;text-align: center; margin-left:40px" name="hocluclai" maxlength="6"></textarea></td>
                         <td rowspan="3"><textarea type="text" class="form-control" id="hanhkiemlai" style="width:140px; height: 152px;position: center;text-align: center; margin-left:40px" name="hanhkiemlai" maxlength="6"></textarea></td>
                        <tr>
                         <th>Học kỳ II</th>
                         <td>
                                <select class="form-control" id="hocluc2" name="hocluc2" style="width: auto;margin-left:25px">
                                    <option value="0">Giỏi</option>
                                    <option value="1">Khá</option>
                                    <option value="2">TB</option>
                                    <option value="3">Yếu</option>
                                </select>
                         </td>
                         <td>
                            <select class="bs-select col-md-2" id="hanhkiem2" name="hanhkiem2" style="width: auto;">
                                    <option disabled="disabled" selected="selected">Hạnh kiểm</option>
                                    @foreach($conduct as $item)
                                        <option value="{{$item->name}}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                            </select>   
                         </td>
                        </tr>
                        <tr>
                         <th>Cả năm</th>
                         <td>
                            <select class="form-control" id="hocluccn" name="hocluccn" style="width: auto;margin-left:25px">
                                <option value="0">Giỏi</option>
                                <option value="1">Khá</option>
                                <option value="2">TB</option>
                                <option value="3">Yếu</option>
                            </select>
                        </td>
                         <td>
                            <select class="bs-select col-md-2" id="hanhkiemcn" name="hanhkiemcn" style="width: auto;">
                                <option disabled="disabled" selected="selected">Hạnh kiểm</option>
                                    @foreach($conduct as $item)
                                        <option value="{{$item->name}}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                            </select>   
                         </td>
                        </tr>
                     </table>
                    <p>Có chứng chỉ nghề phổ thông: 
                        <textarea type="text" class="form-control" id="certificate_job" style="width: 80%; height: 60px" name="certificate_job" maxlength="10000" placeholder="Nếu có thì giáo viên chủ nhiệm hãy ghi rõ tên chứng chỉ, không thì bỏ trống"></textarea>
                    </p>
                    <p>Được giải thưởng trong các kỳ thi từ cấp huyện trở lên: 
                        <textarea type="text" class="form-control" id="award" style="width: 80%; height: 60px" name="award" maxlength="10000" placeholder="Nếu có thì giáo viên chủ nghiệm ghi rõ giải thưởng, không thì bỏ trống"></textarea>
                    </p> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" style="text-align: left">Khen thưởng kỷ luật:</label>
                        <select class="bs-select col-md-2" id="name_bodis" name="name_bodis" style="width: auto;" onchange="valueBodis()">
                            <option disabled="disabled" selected="selected" value="0">Chọn Khen thưởng kỷ luật</option>
                            @foreach($bodis as $item)
                                <option value="{{$item->id}}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>    
                    </div>
                    <div id="value_bodis">
                        <div class="form-group-email">
                            <label class="control-label col-sm-2" style="text-align: left">Mức khen thưởng:</label>
                            <input type="text" class="form-control" id="award" name="award" maxlength="150" style="width:300px ; height: 80px; margin-top: 10px"  placeholder="Nhập mức KTKL tại đây"/>
                        </div>
                    </div> 
                    <br>
                    <div style="margin-top: 10px"></div>
                    <p style="text-align: center"><b>NHẬN XÉT CỦA GIÁO VIÊN CHỦ NHIỆM</b>
                        <textarea type="text" class="form-control" id="cmt_gv" style="width: 100%; height: 160px" name="cmt_gv" maxlength="10000" placeholder="Giáo viên chủ nhiệm nhận xét về quá trình học tập, rèn luyện của học sinh và ghi rõ họ tên GVCN"></textarea>
                    </p>
                    <p style="text-align: center"><b>PHÊ DUYỆT CỦA HIỆU TRƯỞNG</b>
                        <textarea type="text" class="form-control" id="cmt_ht" style="width: 100%; height: 80px" name="cmt_ht" maxlength="10000" placeholder="Hiệu trưởng cho ý kiến, nhận xét và ghi rõ họ tên"></textarea>
                    </p>
                    </table>                         
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right"> Cập nhật học bạ </button>
                    </div>
                </form>
               <i>Nguyen Khuyen High School - Vinh Bao - Hai Phong</i>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>
@endsection