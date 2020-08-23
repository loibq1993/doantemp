@extends('admindetail.layouts.master')
@section('content')        
    <h3 class="page-title">Khen Thưởng / Kỷ Luật</h3>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> {{ $error }}</div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-info">
            <span style="color: blue">{{ session()->get('message') }}</span>
        </div>
    @endif
    <form action="{{ url('/admin/create_bonus') }}" method="POST" id="create-handbook-song-form" class="form-horizontal form-row-seperated">
        {{ csrf_field() }}
        <div class="form-group ">
            <label class="control-label col-md-3"><i class="icon-require">*</i> Tên khen thưởng/ kỷ luật</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name_bonus" style="text-transform: capitalize;"
                       name="name_bonus">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-md-3">Phân loại</label>
            <div class="col-md-6">
                <select class="form-control" id="type" name="type">
                    <option value="0">Khen thưởng</option>
                    <option value="1">Kỷ Luật</option>
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
