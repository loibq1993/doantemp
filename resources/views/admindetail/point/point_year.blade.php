@extends('admindetail.layouts.master')
@section('content')

    <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/assets/global/plugins/jquery-3.5.1.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'>
    <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css'>
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/1.10.7/js/dataTables.bootstrap4.min.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js'></script>
    <script>
        $(document).ready(function(){
            $("#grade").change(function(){
                var idgrade = $(this).val();
                $.get("/admin/ajax/class/"+idgrade, function(data){
                    $("#class").html(data); 
                });
            });
            $("#class").change(function(){
                var idclass = $(this).val();
                $.get("/admin/ajax/subject/"+idclass, function(data){
                    $("#subject").html(data); 
                });
            });
        });
    </script>
    <div class="portlet light bordered">
        <!-- /.box-header -->
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">Nhập điểm cả năm</span>
            </div>			
        </div>
        <div class="portlet-body form">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                <span>{{ $error }}</span>
                </div>
            @endforeach	
            @if(session()->has('notify'))
                <div class="alert alert-info">
                    <span style="color: blue">{{ session()->get('notify') }}</span>
                </div>
            @endif
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ url('/admin/point_year') }}" class="form-horizontal form-row-seperated" method="POST" id="list_point">
                {{ csrf_field() }}
                <div class="form-group-email">
                    <label class="control-label col-sm-1">Khối:</label>
                    <select class="bs-select col-md-2" id="grade" name="grade">
                            <option  disabled="disabled" selected="selected">Chọn khối</option>
                            <option value="0" >Khối 10</option>
                            <option value="1" >Khối 11</option>
                            <option value="2" >Khối 12</option>
                    </select>   
                </div>
                <div class="form-group-email">
					<label class="control-label col-sm-1">Lớp:</label>
					<select class="bs-select col-md-2" id="class" name="class">
                        <option  disabled="disabled" selected="selected">Chọn lớp</option>
					</select>	
				</div>
                <div class="form-group-email">
                    <label class="control-label col-sm-1">Môn học:</label>
                    <select class="bs-select col-md-2" id="subject" name="subject">
                        <option  disabled="disabled" selected="selected">Chọn môn học</option>
                    </select>   
                </div>
                <br>
                <br>
                <div style="margin-top: 15px"></div>
                {{-- <div class="form-group-email">
                    <label class="control-label col-sm-1">Học kỳ 1:</label>
                    <select class="bs-select col-md-2" id="term1" name="term1">
                        <option  disabled="disabled" selected="selected">Chọn học kỳ</option>
                        @foreach($term1 as $t1)
                                <option value="{{$t1->id}}">
                                    {{ $t1->name_term }}
                                </option>
                        @endforeach
                    </select>   
                </div>
                <div class="form-group-email">
                    <label class="control-label col-sm-1">Học kỳ 2:</label>
                    <select class="bs-select col-md-2" id="term2" name="term2">
                        <option  disabled="disabled" selected="selected">Chọn học kỳ</option>
                        @foreach($term2 as $t2)
                                <option value="{{$t2->id}}">
                                    {{ $t2->name_term }}
                                </option>
                        @endforeach
                    </select>   
                </div> --}}
                <br style="clear: left;" />
                <br style="clear: left;" />          
                <div class="container-fluid">
                    <div class="col-xs-8 text-center form-register" style="margin-bottom: 10px; margin-left: 150px">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div> 
                
            </form>
            </div>  
        </div>
    <div id='show_data_export'>
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="caption-subject bold uppercase"> DANH SÁCH HỌC SINH</span>
                    </div>
                    <div class="col-xs-11" style="margin-top: 20px; margin-right: 115px">
                        @if ((@isset($point1) && $point1 != null) && (@isset($point2) && $point2 != null))  
                        <div>
                        <form style="float:left" action="{{route('importExcel')}}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <input type="file" name="select_file"/>
                            <div class="form_actions">
                                <input type="submit" name="upload" class="btn btn-success" value="Import Excel">
                            </div>
                        </form>
                        {{-- <form style="float: right;margin-right:500px;" action="{{route('updateExcel')}}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                            <input type="file" name="select_update_file"/>
                            <div class="form_actions">       
                                <input type="submit" name="update" class="btn btn-success" value="Update Excel">
                            </div>
                        </form> --}}
                        </div>
                        <div class="box-body">
                            <table id="pointyear" class="table table-bordered">
                            <thead style="text-align: center">
                                <tr>
                                    <th >Mã học sinh</th>
                                    <th style="white-space: nowrap">Tên học sinh</th>
                                    <th >Lớp</th>
                                    <th >Môn học</th>
                                    <th >Điểm TBHK1</th>
                                    <th >Điểm TBHK2</th>
                                    <th >Điểm TBCN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($point1 as $pt)
                                
                                    <tr>      
                                        <td style="text-align: center">{{$pt->user_id}}</td>
                                        <td style="white-space: nowrap">{{$pt->name}}</td>
                                        <td >{{$pt->name_class}}</td>
                                        <td style="white-space: nowrap">{{$pt->name_subject}}</td>
                                        <td>{{$pt->dtbhk}}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                            <tfoot>
                                        <tr>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th></th>
                                        </tr>
                            </tfoot>
                            </table>
                        </div>
                        <div style="margin-left: 450px;margin-bottom: 75px;">
                            <button id ="save" class="btn btn-primary" style="margin-top: 100px" onclick="updatepoint()">Lưu điểm</button>
                        </div>
                    @endif   
                    </div>
                           
                    </div> 
            </div>
            <script>
                $(document).ready(function() {
        
                $('#pointyear').DataTable({
                     dom: 'Bfrtip',
                    processing: true,
 
                    "lengthMenu": [25,50], 
                    buttons: [ 
                        { extend: 'excel', text: 'Export Excel'},
                        ],

                });
            });
            </script>
    </div> 
            <!-- END EXAMPLE TABLE PORTLET-->
@endsection
