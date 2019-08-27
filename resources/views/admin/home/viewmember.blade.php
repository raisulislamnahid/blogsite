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


                                                            <h3 class="text-center text-success" id="xyz">{{ Session::get('message')}}</h3>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="bg-primary">
                                        <th  style="text-align:center;">Sl</th>
                                        <th  style="text-align:center;">Member Name</th>
                                        <th  style="text-align:center;">Member Designation</th>
                                        
                                        
                                        <th  style="text-align:center;">Member Card Validity</th>
                                        <th  style="text-align:center;">Member Phone</th>

                                        <th  style="text-align:center;">Member Image</th>

                                        <th  style="text-align:center;">Edit</th>
                                        <th  style="text-align:center;">Delete</th>

                                        
                                    </tr>
                                </thead>
                                <tbody> 
                                    @php ($x=1)

 @foreach($madd as $viewm)

                                    <tr class="odd gradeX">
                                        <td>{{$x++}}</td>
                                        <td>{{$viewm->name}}</td>



                                        <td class="center">{{$viewm->designation}}</td>
                                        <td class="center">{{$viewm->cardvalidity}}</td>
                                        <td class="center">{{$viewm->phonenumber}}</td>
                                        <td class="center"><img src="{{asset('/mimg/')}}/{{$viewm->img}}" style="height: 80px;"></td>







                                        <td style="text-align:center;">

                                      
                                            <a href="{{ route('memberedit',[$viewm->id])}}" class="btn btn-success btn-xs">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>


                                        </td>

                                        <td style="text-align:center;">
                                            <a href="{{ route('memberdelete',[$viewm->id])}}" class="btn btn-danger btn-xs">
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

