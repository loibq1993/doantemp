@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
   
   
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                
                <span class="caption-subject font-dark bold uppercase"><i class="far fa-laugh-beam" style="margin-right: 10px"></i>Học sinh chuyển đến trường</span>
            </div>			
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach
            <meta name="csrf-token" content="{{ csrf_token() }}" class="content">
            <form action="{{ url('/admin/addstudentclass') }}" class="form-horizontal form-row-seperated" method="post" id="list-student-form">
                {{ csrf_field() }} 
                <div class="col-sm-2">
                    <div class="form-group-email">
                        <span class="label-input100">ID</span>
                        <input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-group-email">
                        <span class="label-input100">Họ và tên</span>
                        <input type="text" class="form-control" id="name_search" name="name_search" @if(@isset($name_search)) value="{{$name_search}}" @endif>
                    </div>
                </div>               
				
                <div class="form-group">
                    <div class="row">
						<div class="col-xs-3"></div>
                        <div class="col-xs-1">
                            <button type="submit" class="btn btn-primary" name="btn">Thực hiện</button>
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
                        <span class="caption-subject bold uppercase"> DANH SÁCH HỌC SINH </span>
                        <br></br>
                    </div>  
					<div class="col-xs-5">
            @if (@isset($users) && $users != null)  
            <div class="portlet-title" style="text-align: left;">   
                <p class="violet"><b>Kết quả: {{$users->total()}}</b></p>
            </div>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover list-course">
                        <tr>
                            <th >Chọn</th>
                            <th >Mã học sinh</th>
                            <th >Tên học sinh</th>
                            <th >Ngày sinh</th>
                            <th >Giới tính</th>
                            <th>Địa chỉ</th>                            
                        </tr>
                        @foreach($users as $index => $user)
                            <tr>
                                <td><input type="checkbox" name="checkstudent[]" class="cbclass" id="checkstudent"></td>
                                <td class="userid"  >{{$user->id}}</td>
                                <td >{{$user->name}}</td>

                                <td >{{$user->date_of_birth}}</td>
                                <td >
                                    @if($user->gender == Illuminate\Support\Facades\Config::get('constant.user_gender.male')) 
                                        <span class="label label-sm label-info"> Nam </span>
                                    @else 
                                        <span class="label label-sm label-warning"> Nữ </span> 
                                    @endif
                                </td>
                                <td>
                                    {{$user->address}}
                                </td>       
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                        {{ $users->links() }}                       
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
            @if ($users->total() == 0)
                <div class="portlet-title" style="text-align: left;">
                    <p class="violet"><b>{{ Illuminate\Support\Facades\Config::get('constant.data_not_found') }}</b></p>
                </div>
            @endif  
            @endif        
                </div>				
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
    
    
<script > 


// document.addEventListener('readystatechange', event => { 

//     // When HTML/DOM elements are ready:
//     if (event.target.readyState === "interactive") {   //does same as:  ..addEventListener("DOMContentLoaded"..
        
//     }

//     // When window loaded ( external resources are loaded too- `css`,`src`, etc...) 
//     if (event.target.readyState === "complete") {

//        var arr_id=document.getElementsByClassName("userid");
//     var class_selected= document.getElementById("list_classes");
//     var value_sl=class_selected.options[class_selected.selectedIndex].text;
//    var i;
//    var arr_result=[];
//    var str=" ";

//     for(i=0;i<arr_id.length;i++)
//     {

          

//                 str+=  arr_id[i].textContent+",";              
        
        
//     }

 
//    window.location="http://127.0.0.1:8000/admin/xetlenlop?arr="+str.trim()+"&vlsl="+value_sl+"&atc=1";
//     }
// });

    function add_clickpl()
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

   
   window.location="http://127.0.0.1:8000/admin/tiepnhanhs?arr="+str.trim()+"&vlsl="+value_sl;
}
</script>
    
        <br></br>
      
         <div class="form-group">
                    <div class="row">
                        <div class="col-xs-9"></div>
                        <div class="col-xs-2">
                            <button type="submit" onclick="add_clickpl()" class="btn btn-success">Thêm vào lớp</button>
                        </div>
                        <div class="col-xs-1"></div>
                    </div>
        </div>
      
            <!-- END EXAMPLE TABLE PORTLET-->
   	</div>
@endsection
