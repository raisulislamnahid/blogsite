@extends('admin.master')

@section('title')
Add News
@endsection




@section('main') 
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Member Forms
                        </div>
                        <div class="panel-body">



                            <div class="row">
                                <div class="col-lg-12">
                                	<h3 class="text-center text-success">{{ Session::get('message')}}</h3>
                                    <form role="form" action="{{ route('membersave')}}" method="post" enctype="multipart/form-data">
                                    	{{csrf_field ()}}


                                       <input class="form-control" type="hidden" placeholder="Member Name" required="" name="id" value="{{$editm->id}}">


                                        <div class="form-group">
                                            <label>Member Name</label>
                                            <input class="form-control" placeholder="Member Name" required="" name="name" value="{{$editm->name}}">
                                        </div>

                                       
                                        <div class="form-group">
                                            <label>Member Image</label>
                                            <input type="file" name="img">
                                        </div>


                                


                                        <div class="form-group">
                                            <label>Member Phone</label>
                                            <input class="form-control" placeholder="Member Phone" required="" name="phonenumber" value="{{$editm->phonenumber}}">
                                        </div>

                                          <div class="form-group">
                                            <label>Member Designation</label>
                                            <input class="form-control" placeholder="Member Designation" required="" name="designation"  value="{{$editm->designation}}">
                                        </div>


                                          <div class="form-group">
                                            <label>Member Card Validity</label>
                                            <input class="form-control" placeholder="Member Card Validity" required="" name="cardvalidity" value="{{$editm->designation}}">
                                        </div>

                                        
                                        <button type="reset" class="btn btn-default">Reset</button>

                                        <button type="submit" class="btn btn-default">Submit News</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
@endsection

