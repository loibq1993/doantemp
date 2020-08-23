@extends('admindetail.layouts.master')
@section('content')
    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
   
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">Mở/Khóa chức năng nhập điểm</span>
            </div>          
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <span class="show-error-data">{{ $error }}</span>
            @endforeach
            <meta name="csrf-token" content="{{ csrf_token() }}" class="content">
            <form action="{{ url('/admin/lockpoint') }}" class="form-horizontal form-row-seperated" method="post">
                {{ csrf_field() }} 
                <div class="col-sm-2">
                    <div class="form-group-email">
                        <span class="label-input100">ID</span>
                        <input type="number" class="form-control" id="id_search" name="id_search" @if(@isset($id_search)) value="{{$id_search}}" @endif>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group-email">
                        <span class="label-input100">Họ tên giáo viên</span>
                        <input type="text" class="form-control" id="name_search" name="name_search" @if(@isset($name_search)) value="{{$name_search}}" @endif>
                    </div>
                </div>               
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-1">
                            <button type="submit" class="btn btn-primary" name="btn">Tìm Kiếm</button>
                        </div>
                    </div>                  
                </div>              
            </form>
        </div>
    </div>

            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="caption-subject bold uppercase"> DANH SÁCH GIÁO VIÊN </span>
                        <br>
                    </div>  
                    <div class="col-xs-5">
                        @if (@isset($teacher) && $teacher != null)  
                        <div class="portlet-title" style="text-align: left;">   
                            <p class="violet"><b>Kết quả: {{$teacher->total()}}</b></p>
                        </div>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-hover">
                                    <tr>
                                        <th >Chọn</th>
                                        <th >Mã giáo viên</th>
                                        <th >Tên giáo viên</th>
                            
                                    </tr>
                                    @foreach($teacher as $index => $t)
                                        <tr>
                                            <td><input type="checkbox" name="checkteacher[]" class="cbteacher" id="checkteacher"></td>
                                            <td class="teacherid"  >{{$t->id}}</td>
                                            <td >{{$t->name_teacher}}</td>
                                          
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate">
                                    {{ $teacher->links() }}                       
                                </div>
                            </div>

                            <!-- /.box-body -->
                        </div>
                        @if ($teacher->total() == 0)
                            <div class="portlet-title" style="text-align: left;">
                                <p class="violet"><b>{{ Illuminate\Support\Facades\Config::get('constant.data_not_found') }}</b></p>
                            </div>
                        @endif  
                        @endif        
                    </div>
                </div>
                <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left">Chọn Môn Học:</label>
                            <select class="bs-select col-md-2" id="subjects" name="subjects">
                                    @if (@isset($subjects) && ($subjects != null))
                                    @foreach($subjects as $item)
                                        <option value="{{$item->id}}">
                                            {{ $item->name_subject }}
                                        </option>
                                    @endforeach
                                    @endif
                            </select>   
                </div> 
            </div>
            <script> function add_teacher()
                {
                   var arrtc= document.getElementsByClassName("cbteacher");
                   var arr_id=document.getElementsByClassName("teacherid");
                    var subject_selected= document.getElementById("subjects");
                    var value_sl= subject_selected.options[subject_selected.selectedIndex].text;
                   var i;
                   var arr_result=[];
                   var str=" ";
                    for(i=0;i<arrtc.length;i++)
                    {
                
                        if (arrtc[i].checked) {
                    
                
                                str+=  arr_id[i].textContent+",";              
                        }
                        
                    }
                      
                   window.location="http://127.0.0.1:8000/admin/lockpoint?arrtc="+str.trim()+"&vlsltc="+value_sl+"&addteacher";
                }
                </script>
            <br>
            <div class="form-group" style="margin-right: 600px">
                       <div class="row">
                           <div class="col-xs-9"></div>
                           <div class="col-xs-2">
                               <button type="submit" onclick="add_teacher()" class="btn btn-success">Thêm giáo viên</button>
                           </div>
                           <div class="col-xs-1"></div>
                       </div>
           </div>             
@endsection
