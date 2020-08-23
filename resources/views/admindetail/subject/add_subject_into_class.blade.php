@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
   
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">Phân Môn Học </span>
            </div>			
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach
            <meta name="csrf-token" content="{{ csrf_token() }}" class="content">
            <form action="{{ url('/admin/addsubject') }}" class="form-horizontal form-row-seperated" method="post" id="list-student-form">
                {{ csrf_field() }} 
                <div class="col-sm-2">
                    <div class="form-group-email">
                        <span class="label-input100">ID</span>
                        <input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-group-email">
                        <span class="label-input100">Tên môn học</span>
                        <input type="text" class="form-control" id="name_search" name="name_search" @if(@isset($name_search)) value="{{$name_search}}" @endif>
                    </div>
                </div>               
				
                <div class="form-group">
                    <div class="row">
						<div class="col-xs-3"></div>
                        <div class="col-xs-1">
                            <button type="submit" class="btn btn-primary" name="btn">Tìm kiếm</button>
                        </div>
						<div class="col-xs-1"></div>
                    </div>					
                </div>				
            </form>
            </div>
        </div>
    </div>
    <div id='show_data_export'>
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="caption-subject bold uppercase"> DANH SÁCH MÔN HỌC </span>
                        <br>
                    </div>  
					<div class="col-xs-5">
                        @if (@isset($subjects) && $subjects != null)  
                        <div class="portlet-title" style="text-align: left;">   
                            <p class="violet"><b>Kết quả: {{$subjects->total()}}</b></p>
                        </div>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover list-course">
                                    <tr>
                                        <th >Chọn</th>
                                        <th >Mã môn học</th>
                                        <th >Tên môn học</th>                      
                                    </tr>
                                    @foreach($subjects as $index => $subject)
                                        <tr>
                                            <td><input type="checkbox" name="checksubject[]" class="cbsub" id="checksubject"></td>
                                            <td class="subjectid"  >{{$subject->id}}</td>
                                            <td >{{$subject->name_subject}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                                    {{ $subjects->links() }}                       
                                </div>
                            </div>

                            <!-- /.box-body -->
                        </div>
                        @if ($subjects->total() == 0)
                            <div class="portlet-title" style="text-align: left;">
                                <p class="violet"><b>{{ Illuminate\Support\Facades\Config::get('constant.data_not_found') }}</b></p>
                            </div>
                        @endif  
                        @endif        
                    </div>				
                </div>
                    <div class="form-group">
                                <label class="control-label col-sm-2" style="text-align: left">Chọn Lớp:</label>
                                <select class="bs-select col-md-2" id="list_classes" name="list_classes">
                                        <!-- @if (@isset($list_classes) && ($list_classes != null)) -->
                                        @foreach($list_classes as $item)
                                            <option value="{{$item->id}}">
                                                {{ $item->name_class }}
                                            </option>
                                        @endforeach
                                        <!-- @endif -->
                                </select>   
                    </div> 
                </div>
             
<script> function add_subject()
{
   var arrsub= document.getElementsByClassName("cbsub");
   var arr_id=document.getElementsByClassName("subjectid");
    var class_selected= document.getElementById("list_classes");
    var value_sl=class_selected.options[class_selected.selectedIndex].text;
   var i;
   var arr_result=[];
   var str=" ";
    for(i=0;i<arrsub.length;i++)
    {

        if (arrsub[i].checked) {
    

                str+=  arr_id[i].textContent+",";              
        }
        
    }

   
   window.location="http://127.0.0.1:8000/admin/addsubject?arrsub="+str.trim()+"&vlslsub="+value_sl+"&addsubject";
}
</script>

    
        <br>
      
         <div class="form-group" style="margin-right: 600px">
                    <div class="row">
                        <div class="col-xs-9"></div>
                        <div class="col-xs-2">
                            <button type="submit" onclick="add_subject()" class="btn btn-success">Thêm môn học</button>
                        </div>
                        <div class="col-xs-1"></div>
                    </div>
        </div>
      
            <!-- END EXAMPLE TABLE PORTLET-->
@endsection
