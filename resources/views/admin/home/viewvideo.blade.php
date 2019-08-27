@extends('admin.master')

@section('title')
Add News
@endsection




@section('main') 
<div id="page-wrapper">
 
                                	



            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
<h3 class="text-center text-success" id="xyz">{{ Session::get('message')}}</h3>
                        
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th  style="text-align:center;">Sl</th>
                                        <th  style="text-align:center;">Title</th>
                                        <th  style="text-align:center;">Youtube URL</th>
                                        <th  style="text-align:center;">Edit</th>
                                        <th  style="text-align:center;">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody> 
                                    @php ($x=1)

@foreach($mizz as $v)
                                    <tr class="odd gradeX">
                                        <td>{{ $x++}}</td>
                                        <td>{{ $v->video_name}}</td>
                                        <td class="center">{{ $v->video_link}}</td>
                                         <td  style="text-align:center;">

                                      
                                            <a href="{{ route('videoedit',[$v->id])}}" class="btn btn-success btn-xs" >
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>


                                        </td>

                                        <td  style="text-align:center;">
                                            <a href="{{ route('videodelete',[$v->id])}}" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                        
                                    </tr>

@endforeach
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            </div>


            <!-- /.row -->
        

 

@endsection

