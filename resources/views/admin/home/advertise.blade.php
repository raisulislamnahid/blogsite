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
                            Addvertisement Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<h3 class="text-center text-success">{{ Session::get('message')}}</h3>
                                    <form role="form" action="{{ route ('advtm')}}" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
                                    	{{csrf_field ()}}


                                        <div class="form-group">
                                            <label>Person/Company Name</label>
                                            <input class="form-control" name="advertisename" required="">

                                        </div>



                                        <div class="form-group">
                                            <label>Website/URL (in any)</label>
                                            <input class="form-control" type="url" name="aurl" placeholder=" https://www.example.com">

                                        </div>




                                        <div class="form-group">
                                            <label>Add Position</label><br>

                                           <select class="form-control" name="position" required="">
                                                <option value="">Select Add Position</option>
                                               <option value="1">01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                               <option value="4">04</option>
                                               <option value="5">05</option>
                                               <option value="6">06</option>
                                               <option value="7">07</option>
                                               <option value="8">08</option>
                                               <option value="9">09</option>
                                               <option value="10">10</option>
                                               <option value="11">11</option>
                                               <option value="12">12</option>
                                               <option value="13">13</option>
                                               <option value="14">14</option>
                                               <option value="15">15</option>
                                               <option value="16">16</option>
                                               <option value="17">17</option>
                                               <option value="18">18</option>
                                               <option value="19">19</option>
                                               <option value="20">20</option>

                                           </select>



                                           

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img">
                                        </div>






                                        <button type="reset" class="btn btn-default">Reset</button>

                                        <button type="submit" class="btn btn-default">Submit Advertisement</button>

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
