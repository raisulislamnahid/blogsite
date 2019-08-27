@extends('admin.master')

@section('title')
Admin Home
@endsection

@section('main') 
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">





                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background: silver">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">




 @php

$today_date=date('d-M-y');
$student_t=DB::table('news')
->where ('date', $today_date)
->count('id');
echo $student_t;

@endphp
              </div>

                                    <div>Today News Post</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="viewnews">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
                </div>






                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background: silver">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    @php

                  $student=DB::table('v_count')
                         ->where('date', $today_date)
                         ->where('sl', 2)
                         ->first();

@$t1=@$student->h_count;

           @endphp

<?php
$conn=mysqli_connect("localhost","root","","blogsite");

$select_v="SELECT *from news where date='$today_date'";
$lsdk=mysqli_query($conn, $select_v);
while ($vvv=mysqli_fetch_array($lsdk)) 
{
@$f_c+=$vvv['f_c'];
@$g_c+=$vvv['g_c'];
@$t_c+=$vvv['t_c'];
}

echo @$t1+@$t_c;
;?>





              </div>

                                    <div>Today Viewer</div>
                                    <div>(Facebook: {{ @$f_c }})</div>
                                    <div>(Google Search: {{ @$g_c }})</div>
                                    <div>(Other: {{ @$t1 }})</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="viewnews">
                            <div class="panel-footer">                              <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
                </div>       












<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
  @php

    $student=DB::table('news')->count('id');
    echo @$student;
                  @endphp

              </div>

                                    <div>Total News</div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
<!--                         <a href="viewnews">
                            <div class="panel-footer">
                                 <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
                </div>




         <div class="col-lg-3 col-md-6" >
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" >

 @php

                  $studenta=DB::table('v_count')
                         ->where('sl', 1)
                         ->first();

@$t1a=@$studenta->h_count;

           @endphp



<?php
$select_va="SELECT *from news";
$lsdka=mysqli_query($conn, $select_va);
while ($vvva=mysqli_fetch_array($lsdka)) 
{
@$f_ca+=$vvva['f_c'];
@$g_ca+=$vvva['g_c'];
@$t_ca+=$vvva['t_c'];
}

echo @$t1a+@$t_ca;
;?>


              </div>

                                    <div>Today Viewer</div>
                                    <div>(Facebook: {{ @$f_ca }})</div>
                                    <div>(Google Search: {{ @$g_ca }})</div>
                                    <div>(Other: {{ @$t1a }})</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="viewnews">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
                </div>
                






   



        



            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
@endsection

