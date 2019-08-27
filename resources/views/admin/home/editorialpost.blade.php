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
                            Add Photo Forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<h3 class="text-center text-success">{{ Session::get('message')}}</h3>
                                    <form role="form" action="{{ url('editorial-post')}}" method="post" enctype="multipart/form-data">
                                    	{{csrf_field ()}}


                                        <div class="form-group">
                                            <label>Publisher Image</label>
                                            <input type="file" name="editorial_img" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Quotes</label>
                                            <input class="form-control" name="quotes" required="">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="editor_name" required="">
                                            
                                        </div>





                                      

                                       
                                        


                                        
                                        <button type="reset" class="btn btn-default">Reset</button>

                                        <button type="submit" class="btn btn-default">Submit Photo</button>
                                        
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

