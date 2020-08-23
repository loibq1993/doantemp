@extends('admindetail.layouts.master')
@section('content')
    <h3 class="page-title">
        <strong>Tạo Lớp Học</strong>
    </h3>
    {{-- <span>*Lưu ý: Định dạng lớp đặt theo định dạng Tên lớp_năm bắt đầu và kết thúc (Ví dụ: lớp 10C6 năm học 2019 - 2020 => 10C6_2019_2020)</span> --}}
    <br>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> {{ $error }}
        </div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-info">
            <span style="color: blue">{{ session()->get('message') }}</span>
        </div>
    @endif
    <form action="{{ url('/admin/addclasses') }}" method="POST" id="create-class-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <div class="form-group ">
            <label class="control-label col-md-3">Khối học</label>
            <div class="col-md-6">
                <select class="form-control" id="grade" name="grade">
                    <option value="0">Khối 10</option>
                    <option value="1">Khối 11</option>
                    <option value="2">Khối 12</option>
                </select>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require">*</i>Tên lớp</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name_class" name="name_class">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require">*</i>GVCN</label>
            <div class="col-md-6">
                <select class="form-control" id="name_teacher" name="name_teacher">
                    @foreach($list_teacher as $item)
                        <option value="{{$item->name_teacher}}">
                            {{$item->name_teacher}}
                        </option>
                    @endforeach
                    
                </select>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3">Năm học</label>
            <div class="col-md-6">
                <select class="form-control" id="academicyears" name="academicyears">
                    @foreach($list_course as $item)
                        <option value="{{$item->name_of_school_year}}">
                            {{$item->name_of_school_year}}
                        </option>
                    @endforeach
                    
                </select>
            </div>
        </div>  
        <div class="form-group ">
            <label class="control-label col-md-3">Trạng thái</label>
            <div class="col-md-6">
                <select class="form-control" id="status" name="status">
                    <option value="0">Không hoạt động</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Đã tốt nghiệp</option>
                </select>
            </div>
        </div>		
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </div>
    </form>
@endsection
