@extends('admindetail.layouts.master')
@section('content')        
    <h3 class="page-title">Thêm môn học</h3>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> {{ $error }}</div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-info">
            <span style="color: blue">{{ session()->get('message') }}</span>
        </div>
    @endif
    <form action="{{ route('admin_create_subject') }}" method="POST" id="create-subject-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-md-3"><i class="icon-require">*</i> Chọn tổ môn: </label>
            <div class="col-md-6">
                <select id="specialize" name="specialize_id" style="text-transform: capitalize;" class="form-control">
                   @foreach($specialize_id as $special)
                   <option value="{{$special->id}}">{{$special->name}}</option>
                   @endforeach
                </select>
            </div>			
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tên môn học</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name_subject" name="name_subject" maxlength="100" style="text-transform: capitalize;">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3">Số tiết</label>
            <div class="col-md-6">
                <input type="number" class="form-control" id="sotiet" name="sotiet">
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    &emsp;&emsp;
                    <a href="{{ url('/admin/subject_list') }}"> 
                        <button type="button" class="btn btn-primary">Xem danh sách</button>
                    </a>
                </div>
            </div>
        </div>
    </form>
    
@endsection
