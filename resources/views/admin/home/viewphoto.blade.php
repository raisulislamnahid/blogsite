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
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th  style="text-align:center;">Sl</th>
                                        <th  style="text-align:center;">Photo Name</th>
                                        <th  style="text-align:center;">Photo View</th>
                                        <th  style="text-align:center;">Edit</th>
                                        <th  style="text-align:center;">Delete</th>

                                        

                                        
                                    </tr>
                                </thead>
                                <tbody> 
                                    @php ($x=1)

@foreach($niaz as $vp)
                                    <tr class="odd gradeX">
                                        <td>{{ $x++}}</td>
                                        <td>{{ $vp->photoname}}</td>
                                        <td class="center"><img src="{{asset('/pimg/')}}/{{$vp->photoview }}" style="height: 80px;"></td></td>
                                        
                                    
                                    <td style="text-align:center;">

                                      
                                            <a href="{{ route('photoedit',[$vp->id])}}" class="btn btn-success btn-xs">
                                              <span class="glyphicon glyphicon-edit"></span> 
                                            </a>


                                        </td>

                                        <td style="text-align:center;">
                                            <a href="{{ route('photodelete',[$vp->id])}}" class="btn btn-danger btn-xs">
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

