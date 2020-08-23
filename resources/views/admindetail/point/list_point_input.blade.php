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
                <span class="caption-subject font-dark bold uppercase">Nhập điểm học kỳ</span>
            </div>			
        </div>
        {{-- <div class="portlet-body form">
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
        </div> --}}
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
            <form action="{{ url('/admin/typingpoint') }}" class="form-horizontal form-row-seperated" method="POST" id="list_point">
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
                <div class="form-group-email">
                    <label class="control-label col-sm-1">Học kỳ:</label>
                    <select class="bs-select col-md-2" id="term" name="term">
                        <option  disabled="disabled" selected="selected">Chọn học kỳ</option>
                        <option>Học kỳ 1</option>
                        <option>Học kỳ 2</option>
                    </select>   
                </div>
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
                    <div class="col-xs-11" >
                        @if (@isset($point) && $point != null)  
                        <div>
                        @if(Auth::guard("admins")->user()->can('manager', App\AdminUser::class))	
                        <form style="float:left" action="{{route('importExcel')}}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <input type="file" name="select_file"/>
                            <div class="form_actions">
                                <input type="submit" name="upload" class="btn btn-success" value="Import Excel">
                            </div>
                        </form>
                        @endif
                        <form style="float: right;margin-right:500px;" action="{{route('updateExcel')}}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                            <input type="file" name="select_update_file"/>
                            <div class="form_actions">       
                                <input type="submit" name="update" class="btn btn-success" value="Update Excel">
                            </div>
                        </form>
                        </div>
                        <div class="box-body">
                            <table id="pointtable" class="table table-bordered">
                            <thead style="text-align: center">
                                <tr>
                                    <th >STT </th>
                                    <th >Mã học sinh</th>
                                    <th style="white-space: nowrap;">Tên học sinh</th>
                                    <th >Lớp</th>
                                    <th style="white-space: nowrap">Môn học</th>
                                    <th style="white-space: nowrap">Học kỳ</th>
                                    <th >Điểm miệng</th>
                                    <th >Điểm 15'</th>
                                    <th >Điểm 45'</th>
                                    <th >Điểm học kỳ</th>
                                    <th >Điểm TBHK</th>
                                    {{-- <th >Xóa</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($point as $pt)
                                    <tr>
                                        <td >{{$pt->id}}</td>
                                        <td style="text-align: center">{{$pt->user_id}}</td>
                                        <td style="white-space: nowrap;text-transform: capitalize;">{{$pt->name}}</td>
                                        <td >{{$pt->name_class}}</td>
                                        <td style="white-space: nowrap">{{$pt->name_subject}}</td>
                                        <td style="white-space: nowrap">{{$pt->name_term}}</td>
                                        <td style="text-align: center" contenteditable="true" onkeyup="keyup(this,event);">{{$pt->dm}}</td>
                                        <td style="text-align: center" contenteditable="true" onkeyup="keyup(this,event);">{{$pt->d15}}</td>
                                        <td style="text-align: center" contenteditable="true" onkeyup="keyup(this,event);">{{$pt->d45}}</td>
                                        <td style="text-align: center" contenteditable="true" onkeyup="keyup(this,event);">{{$pt->dhk}}</td>
                                        <td style="text-align: center" >{{$pt->dtbhk}}</td>
                                        {{-- <td>
                                            <a href="#modal_delete{{$pt->id}}" class="label label-sm label-danger" data-toggle="modal"><i class="fa fa-remove"></i> Xóa</a>
                                       </td> 
                                       <div class="modal fade" id="modal_delete{{$pt->id}}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Xác nhận xóa</h4>
                                                </div>
                                                <div class="modal-body">Chắc chắn xóa {{$pt->name}} ?</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                                    <a href="{{ url('/admin/delete_studentpoint/'.$pt->id) }}"  class="btn green">OK</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>       --}}
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
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                        </tr>
                            </tfoot>
                            </table>
                            <script>
                                function keyup(element,event)
                                {
                                    if(element.textContent>10)
                                    {
                                        element.textContent = 10; 
                                    }
                                    else if(element.textContent<0)
                                    {
                                        element.textContent = 0;
                                    }
                                }
                                function updatepoint()
                                {
                                    var tableObj = document.getElementById( "pointtable" );
                                     var arr = [];
                                     var str=" ";
                                   
                                var allTRs = tableObj.getElementsByTagName( "tr" );
                                for ( var trCounter = 0; trCounter < allTRs.length; trCounter++ )
                                {
                                var tmpArr = [];
                                var allTDsInTR = allTRs[ trCounter ].getElementsByTagName( "td" );
                                for ( var tdCounter = 0; tdCounter < allTDsInTR.length; tdCounter++ )
                                {
                                    tmpArr.push( allTDsInTR[ tdCounter ].innerHTML );
                                }
                                arr.push( tmpArr );
                                }
                                var i=0;
                                
                                var j=0;
                             
                                 for(i=0;i<arr.length;i++)
                                 {
                                     for(j=0;j<arr[i].length;j++)
                                     { 
                                        if((j+1)==arr[i].length)
                                        {
                                            str+=arr[i][j]+"-";
                                        }
                                        else
                                        {
                                            str+=arr[i][j]+",";
                                        }
                                          
                                     }
                                 }
                                 
                                    window.location="http://127.0.0.1:8000/admin/typingpoint?str="+str;
                                            
                                }
                            </script>
                        </div>
                        <div style="margin-left: 450px;margin-bottom: 75px;">
                        <button id ="save" class="btn btn-primary" style="margin-top: 100px" onclick="updatepoint()">Lưu điểm</button>
                        </div>
                    </div>
                        @endif      
                    </div> 
            </div>
            <script>
                $(document).ready(function() {
        
                $('#pointtable').DataTable({
                    //dom: 'lifrtBp',
                     dom: 'Bfrtip',
                    processing: true,
                    //serverSide: true,
                    //autoWidth : true,
                    "lengthMenu":[ 
                        [25,50]
                        ],
                    // ajax: {
                    //    url: route('typingPoint'),
                    // },
                   
                    buttons: [ 
                        
                        { extend: 'excelHtml5', text: 'Export Excel', title: 'Danh sách điểm',
                            exportOptions: 
                            {
                            columns: [1,2,3,4,5,6,7,8,9,10]
                            }
                        },
                        
                        // { extend: 'pdf', text: 'Export PDF'},
                        ]
                             
                    // columns: [
                    // {data: 'user_id', name: 'point.id'},
                    // {data: 'name', name: 'point.name'},
                    // {data: 'name_class', name: 'point.name_class'},
                    // {data: 'name_subject', name: 'point.name_subject'},
                    // {data: 'name_term', name: 'point.name_term'},
                    // {data: 'dm', name: 'point.dm'},
                    // {data: 'd15', name: 'point.d15'},
                    // {data: 'd45', name: 'point.d45'},
                    // {data: 'dhk', name: 'point.dhk'},
                    // {data: 'dtbhk', name: 'point.dtbhk'},
                    // ],
                   
                    // initComplete: function () {
                    //             this.api().columns().every(function () {
                    //                 var column = this;
                    //                 var input = document.createElement("input");
                    //                 $(input).attr('class', 'filter');
                    //                 $(input).attr('style', 'width: 100%');
                    //                 $(input).appendTo($(column.footer()).empty())
                    //                     .on('keyup change', function () {
                    //                         column
                    //                             .search($(this).val())
                    //                             .draw();
                    //                     });
                    //             });
                    //             $('#pointtable > tfoot > tr > th:nth-child(1) > input').hide();
                    //         },
                            
        
                });
            });
            </script>
    </div> 
            <!-- END EXAMPLE TABLE PORTLET-->
@endsection
