@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_export_data.js')}}"></script>
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
               <i class="icon-star"></i>
                <span class="caption-subject font-dark bold uppercase">QUẢN LÝ CHỨNG CHỈ HỌC SINH</span>
            </div>
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach

            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ url('/admin/manage_certificate')}}" class="form-horizontal form-row-seperated" method="POST" id="export-data-form">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3"><i class="icon-require">*</i> Chọn Lớp Học</label>
                        <div class="col-md-4">
                            <select class="bs-select form-control" id="class_name" name="class_name">
                                @foreach($list_classes as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->name_class}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green" id="btn_export_data">Xem dữ liệu</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <h3>Danh sách lớp</h3>
        @if (@isset($list_student) && ($list_student != null))
                <section class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-bordered table-checkable" style="width: 100%">
                                <tr class="background">
                                    <th style="width: auto">Chọn</th>
                                    <th style="width: auto">STT</th>
                                    <th style="width: 11%">Mã học sinh</th>
                                    <th style="width: auto">Tên học sinh</th>
                                    <th style="width: auto">Giới tính</th>
                                    <th style="width: auto">Ngày sinh</th>                       
                                </tr>
                                @foreach($list_student as $index => $student)
                                <tr>
                                        <td><input type="checkbox" name="checkstudent[]" class="cbclass" id="checkstudent"></td>
                                        <td>
                                            {{$index+1}}</td>
                                        </td>
                                        <td class="userid">
                                            {{$student->id}}</td>
                                        </td>
                                        <td>
                                            {{$student->name}}</td>
                                        </td>
                                        <td>
                                            @if($student->gender==0)
                                                Nam
                                            @else
                                                Nữ
                                            @endif
                                        </td>
                                        <td>
                                            {{$student->date_of_birth}}</td>
                                        </td>                              
                                </tr>
                                @endforeach
                            </table>
                    </div>
                </section>
            <div class="form-group">
                    <label class="control-label col-sm-2" style="text-align: left">Chọn chứng chỉ:</label>
                    <select class="bs-select col-md-3" id="list_certificate" name="list_certificate">
                            <!-- @if (@isset($list_classes) && ($list_classes != null)) -->
                            @foreach($list_certificate as $item)
                                <option value="{{$item->id}}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                            <!-- @endif -->
                    </select>   
             </div>
<br></br>
<div class="form-group ">
    <label class="control-label col-md-2">Mức/Loại</label>
        <div class="col-md-5">
            <textarea type="text" class="form-control" id="note" style="width: 100%; height: 100px" name="note" maxlength="10000"></textarea>
        </div>
</div> 
<br></br>
<script > function add_clickcc()
{
    var arr= document.getElementsByClassName("cbclass");
    var arr_id=document.getElementsByClassName("userid");
    var class_selected= document.getElementById("list_certificate");
    var class_selected= document.getElementsByClassName("class_name");
    var value_sl=class_selected.options[class_selected.selectedIndex].text;
    var value_dc=classdc_selected.options[class_selected.selectedIndex].text;
    var note= document.getElementById("note");
    var i;
    var arr_result=[];
    var str=" ";
    for(i=0;i<arr.length;i++)
    {

        if (arr[i].checked) {
    

                str+=  arr_id[i].textContent+",";              
        }
        
    }

   var url="http://127.0.0.1:8000/admin/manage_certificate?arr="+str.trim()+"&vlsl="+value_sl+"&note="+note.value+"&vldc="+value_dc;
  window.location=url;
   //alert(url);

}
</script>
<br></br>
<br></br>
<div style="margin-top: 10px"></div>
<div class="form-group" style="margin-top: 10px">
    <div class="row">
        <div class="col-xs-9"></div>
            <div class="col-xs-9" style="margin-left: 500px">
                <button  onclick="add_clickdc()" class="btn btn-success">Thêm chứng chỉ</button>
            </div>
        <div class="col-xs-1"></div>
    </div>
</div>
@endif
@endsection