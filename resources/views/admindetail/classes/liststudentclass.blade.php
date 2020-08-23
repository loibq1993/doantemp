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
    <div class="col-md-11">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @if (@isset($classes) && ($classes != null))
            <h3 class="page-title"> 
            <strong>Danh sách học sinh lớp {{$classes->name_class}}</strong>
            </h3>
            @endif
        </section>
        
        @if (@isset($list_student) && ($list_student != null))
        <div class="portlet-title" style="text-align: left;">	
            <p class="violet"><b>Sĩ Số: {{$list_student->count()}}</b></p>
        </div>
        <div>
            {{-- <button type="submit" class="btn btn-primary" id="download-excel">
            <i class="fa fa-file-excel"></i> <b> Xuất File Excel </b></button> --}}
            <a href="{{ url('/admin/list_classes') }}"> 
                <button type="button" class="btn btn-primary"> <b> Quay lại</b></button>
            </a>
        </div>
        {{-- <div style="margin-bottom: 10px"></div> --}}
        <!-- Main content -->
                <section class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="student" class="table table-bordered" style="width: 100%">
                            <thead >
                                <tr class="background" >
                                    <th style="text-align: center">STT</th>
                                    <th style="text-align: center">Mã học sinh</th>
                                    <th style="text-align: center">Tên học sinh</th>
                                    <th style="text-align: center">Giới tính</th>
                                    <th style="text-align: center">Ngày sinh</th>
                                    <th>Xóa</th>            
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list_student as $index => $student)
                                <tr>
                                        <td style="text-align: center">{{$index+1}}</td>
                                        <td style="text-align: center">{{$student->user_id}}</td>
                                        <td style="text-transform: capitalize;">{{$student->name}}</td>
                                        <td style="text-align: center">
                                            @if($student->gender==0)
                                                Nam
                                            @else
                                                Nữ
                                            @endif
                                        </td>
                                        <td style="text-align: center">{{Illuminate\Support\Carbon::parse($student->date_of_birth)->format('d-m-Y')}}</td>
                                         <td>
                                             <a href="#modal_delete{{$student->user_id}}" class="label label-sm label-danger" data-toggle="modal"><i class="fa fa-remove"></i> Xóa</a>
                                        </td>  
                                        <div class="modal fade" id="modal_delete{{$student->user_id}}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Xác nhận xóa</h4>
                                                </div>
                                                <div class="modal-body">Chắc chắn xóa {{$student->name}} ?</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
                                                    <a href="{{ url('/admin/delete_studentclass/'.$student->user_id) }}"  class="btn green">OK</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>                                                                                    
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <script>
                         $(document).ready(function() {
                             $('#student').DataTable({
                            dom: 'Bfrtip',
                            processing: true,
                            searching: false,
                            "lengthMenu": [25,50],
                            buttons: [ 
                                { extend: 'excel', text: 'Export Excel', title: 'Danh sách học sinh',
                                exportOptions: 
                                    {
                                    columns: [0,1,2,3,4]
                                    }
                                },                              
                                ]
                             });
                         });
                    </script>

                </section>
        <!-- /.content -->
        @endif
    </div>
@endsection
