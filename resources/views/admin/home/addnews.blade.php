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
                            News Publishing Forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<h3 class="text-center text-success" id="xyz">{{ Session::get('message')}}</h3>
                                    <form role="form" action="{{ route('addn')}}" method="post" enctype="multipart/form-data">
                                    	{{csrf_field ()}}

      

<div class="form-group">
                                           
                                           <select class="form-control" name="catagory" required="">
                                               <option value="">News Category </option>
                                               <option value="1">জাতীয়</option>
                                               <option value="2">রাজনীতি</option>
                                               <option value="3">রাজধানী</option>
                                               <option value="4">বিভাগীয় সংবাদ</option>
                                               <option value="5"> আর্ন্তজতিক</option>
                                               <option value="6"> বিনোদন</option>
                                               <option value="7">খেলাধূলা</option>
                                               <option value="8"> কৃষি ও শিল্প</option>
                                               <option value="9"> লাইফ স্টাইল</option>
                                               <option value="10">স্বাস্থ্য বার্তা</option>
                                               <option value="11">শিক্ষাপাতা</option>
                                               <option value="12">অর্থনীতি</option>
                                               <option value="13">বিবিধ</option>
                                               <option value="14"> বিজ্ঞান ও প্রযুক্তি</option>
                                               <option value="15"> আইন ও শালিশ</option>
                                               <option value="16"> অপরাধ</option>
                                               <option value="17">  নারি ও শিশু</option>
                                               <option value="18"> আবহাওয়া</option>
                                               <option value="19"> সাহিত্য জগৎ</option>
                                               <option value="20"> চাকুরীর খবর</option>
                                               <option value="21">  ফেসবুক কর্ণার</option>
                                               <option value="22">  সাধারন জ্ঞান</option>
                                               <option value="23">  রান্না ও রেসিপি</option>
                                               <option value="24"> টুরিজম ও ভিসা</option>
                                               <option value="25"> ধর্ম</option>
                                               <option value="26">  দূর্ঘটনা</option>
                                               <option value="27">  শোক সংবাদ</option>
                                               <option value="28"> শিরোনাম</option>
                                               <option value="29">  রাশিফল</option>




                                           </select>
                                            
                                            
                                        </div>


   <div class="checkbox">
      <label><input type="checkbox" value="1" name="slider">Slider</label>
    
      <label style="margin-left: 20px"><input type="checkbox" value="1" name="highlights">Current News</label>
    
  <label style="margin-left: 20px"><input type="checkbox" value="2" name="highlights"> সাম্প্রতিক ঘটনাবলী </label>
    

    </div>

                                   <div class="form-group">
                                          <input class="form-control" name="headline" required="" placeholder="  Headline">
                                   </div>

                                       
                                   <div class="form-group">
                                          <input class="form-control" name="publisher" required="" placeholder=" Publisher Name">
                                   </div>


                                        <div class="form-group">
                                            <label>News Details</label>
                                            <textarea class="form-control" rows="3" required="" name="news" id="editor"></textarea>
                                        </div>

                                       <div class="form-group">
                                            <label> News Image</label>
                                            <input type="file" name="newsimg" required="">
                                        </div>
                                        

                                        <div class="form-group">
                                           <input class="form-control" name="nurl" required="" placeholder="Video URL (if any)">
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

        <script>

            $(document).ready(function(){
                $($xyz).click(function() {
                    $(this).text('');
                });
            });
            

        </script>
@endsection

