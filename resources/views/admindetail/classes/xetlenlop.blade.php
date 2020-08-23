@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('/js/admin_export_data.js')}}"></script>
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">Xét lên lớp học sinh</span>
            </div>
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach

            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ url('/admin/xetlenlop')}}" class="form-horizontal form-row-seperated" method="POST" id="export-data-form">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3"><i class="icon-require">*</i> Chọn Lớp Học</label>
                        <div class="col-md-4">
                            <select class="bs-select form-control" id="class_name" name="class_name">
                                @foreach($list_classes as $item)
                                    <option value="{{$item->id}}-{{$item->name_class}}"  @if(isset($option['class_name']) && $option['class_name'] == $item->id."-".$item->name_class) selected @endif>
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
                    <label class="control-label col-sm-2" style="text-align: left">Chọn Lớp:</label>
                    <select class="bs-select col-md-3" id="list_classes" name="list_classes">
                            <!-- @if (@isset($list_classes) && ($list_classes != null)) -->
                            @foreach($list_classes as $item)
                                <option value="{{$item->id}}">
                                    {{ $item->name_class }}
                                </option>
                            @endforeach
                            <!-- @endif -->
                    </select>   
             </div> 
<script > function add_clickll()
{
   var arr= document.getElementsByClassName("cbclass");
   var arr_id=document.getElementsByClassName("userid");
    var class_selected= document.getElementById("list_classes");
    var value_sl=class_selected.options[class_selected.selectedIndex].text;
   var i;
   var arr_result=[];
   var str=" ";
    for(i=0;i<arr.length;i++)
    {

        if (arr[i].checked) {
    

                str+=  arr_id[i].textContent+",";              
        }
        
    }

   
   window.location="http://127.0.0.1:8000/admin/xetlenlop?arr="+str.trim()+"&vlsl="+value_sl;
}
</script>
                <br></br>
            <div class="form-group">
                    <div class="row">
                        <div class="col-xs-9"></div>
                        <div class="col-xs-9" style="margin-left: 500px">
                            <button type="submit" onclick="add_clickll()" class="btn btn-success">Cập nhật</button>
                        </div>
                        <div class="col-xs-1"></div>
                    </div>
            </div>
        @endif
@endsection