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
                            Analysis
                        </div>
                        <!-- /.panel-heading -->
<h3 class="text-center text-success" id="xyz">{{ Session::get('message')}}</h3>

                        
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="bg-primary">
                                        <th  style="text-align:center;">Sl</th>
                                         <th  style="text-align:center;">Date</th>
                                        <th  style="text-align:center;">Headline</th>
                                        <th  style="text-align:center;">Publisher</th>
                                       

                                        <th  style="text-align:center;">Total Visitor</th>
                                        <th  style="text-align:center;">Facebook</th>
                                        <th  style="text-align:center;">Google Search</th>
                                        
                                    </tr>
                                </thead>
                                <tbody> 
                                    @php ($x=1)

@foreach($vnws as $vnw)
                                    <tr class="odd gradeX">
                                        <td>{{ $x++}}</td>
                                        <td class="center">{{ $vnw->created_at}}</td>

                                        <td>{{ $vnw->headline}}</td>
                                         <td class="center">{{ $vnw->publisher}}</td>


                                         <td class="center">{{ $vnw->t_c}}</td>
                                         <td class="center">{{ $vnw->f_c}}</td>
                                         <td class="center">{{ $vnw->g_c}}</td>




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

