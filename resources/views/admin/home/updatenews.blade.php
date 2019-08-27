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
                            News Update Forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<h3 class="text-center text-success" id="xyz">{{ Session::get('message')}}</h3>
            
            

                                    <form role="form" action="{{ route('newsupdaesuccess')}}" method="post" enctype="multipart/form-data">
                                    	{{csrf_field ()}}


<input class="form-control" name="id" type="hidden" required="" value="{{ $vnws->id}}">


                                        <div class="form-group">
                                            <label>News Headline</label>
                                            <input class="form-control" name="headline" required="" value="{{ $vnws->headline}}">
                                            
                                            
                                        </div>


                                        <div class="form-group">
                                            <label>Publisher Name</label>
                                               <input class="form-control" name="publisher" required="" value="{{ $vnws->publisher}}">
                                            
                                        </div>

                                       


                                


                                        <div class="form-group">
                                            <label>News Details</label>
                                            <textarea class="form-control" rows="3" required="" name="news" id="editor">{{ $vnws->headline}}</textarea>
                                        </div>


                                        
                                        <button type="reset" class="btn btn-default">Reset</button>

                                        <button type="submit" class="btn btn-default">Update News</button>
                                        
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

        <script>

            $(document).ready(function(){
                $($xyz).click(function() {
                    $(this).text('');
                });
            });
            

        </script>
@endsection

