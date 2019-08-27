@extends('front.master')
@section('content')

 @foreach ($allnews as $news)
                            <div style="display: none;">
                            <img class="img-center" src="{{asset('nimg/large/'.$news->img) }}" alt="">
                          </div>

@endforeach



@include('front.header')

        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="left_content">
                        <div class="single_page">

                            <ol class="breadcrumb">
                                <li><a href="{{asset('font')}}/index.html"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li class="active">

@foreach ($allnews as $news)
<?php
$idc= $news->id;
$iid= $news->category;

$tc= $news->t_c;
$tcn=$tc+1;





$conn=mysqli_connect("localhost","root","","blogsite");
$sql = "UPDATE news SET t_c='$tcn' where id= '$idc'";
$qqry=mysqli_query($conn, $sql);



if (!empty($_GET['fbclid'])) 
{
$fc= $news->f_c;
$fcn=$fc+1;
$sqlf = "UPDATE news SET f_c='$fcn' where id= '$idc'";
$qqry=mysqli_query($conn, $sqlf);
}



@$purl=@$_SERVER['HTTP_REFERER'];


if ($purl=='https://www.google.com/') 
{
    $gc= $news->g_c;
    $gcn=$gc+1;
    $sqlg = "UPDATE news SET g_c='$gcn' where id= '$idc'";
    $qqry=mysqli_query($conn, $sqlg);
}


;?>




@endforeach


<?php
if ($iid=='1') {
 $pa='জাতীয়';
}
elseif ($iid=='2') {
    $pa='রাজনীতি';
}
elseif ($iid=='3') {
    $pa='রাজধানী';
}
elseif ($iid=='4') {
    $pa='বিভাগীয় সংবাদ ';
}
elseif ($iid=='5') {
    $pa='আর্ন্তজতিক';
}
elseif ($iid=='6') {
    $pa='বিনোদন';
}
elseif ($iid=='7') {
    $pa='খেলাধূলা';
}
elseif ($iid=='8') {
    $pa='কৃষি ও শিল্প';
}
elseif ($iid=='9') {
    $pa='লাইফ স্টাইল';
}
elseif ($iid=='10') {
    $pa='স্বাস্থ্য বার্তা';
}
elseif ($iid=='11') {
    $pa='শিক্ষাপাতা';
}
elseif ($iid=='12') {
    $pa='অর্থনীতি';
}
elseif ($iid=='13') {
    $pa='বিবিধ';
}
elseif ($iid=='14') {
    $pa='বিজ্ঞান ও প্রযুক্তি';
}
elseif ($iid=='15') {
    $pa='আইন ও শালিশ';
}
elseif ($iid=='16') {
    $pa='অপরাধ';
}
elseif ($iid=='17') {
    $pa='নারি ও শিশু';
}
elseif ($iid=='18') {
    $pa='আবহাওয়া';
}
elseif ($iid=='19') {
    $pa='সাহিত্য জগৎ';
}
elseif ($iid=='20') {
    $pa='চাকুরীর খবর';
}
elseif ($iid=='21') {
    $pa='ফেসবুক কর্ণার';
}
elseif ($iid=='22') {
    $pa='সাধারন জ্ঞান';
}
elseif ($iid=='23') {
    $pa='রান্না ও রেসিপি';
}
elseif ($iid=='24') {
    $pa='টুরিজম ও ভিসা';
}
elseif ($iid=='25') {
    $pa='ধর্ম';
}
elseif ($iid=='26') {
    $pa='রাশিফল';
}
elseif ($iid=='27') {
    $pa='দূর্ঘটনা';
}
elseif ($iid=='28') {
    $pa='শোক সংবাদ';
}
elseif ($iid=='29') {
    $pa='শিরোনাম';
}





else
    {$pa='Category';}


;?>
{{ $pa }}



                                </li>
                            </ol>
                            @foreach ($allnews as $news)
                            <h1>{{ $news->headline }}</h1>

                            <div class="auth-info row">
                                <div class="col-md-6">
                                    <p class="date"><i class="fa fa-clock-o"></i> প্রকাশিত: {{ $news->created_at->diffForHumans() }} </p>
                                    <p class="cat-name"><i class="fa fa-pencil" aria-hidden="true"></i> <a href=""> {{ $news->publisher }}</a> </p>
                                   
                                </div>
                                <div class="col-md-6 share text-center">
                                    <!-- <div class="share-count">
                                        <h4>20</h4>
                                        <p>SHARES</p>

                                    </div> -->
                                    <div class="social_link">
                                        <ul class="sociallink_nav">
                                       <?php
                                          $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                      ?>

                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u={{  $actual_link }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                           
                                       <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                            
                                        <li><a href="#"> <span onclick="myFunction()"> <i class="fa fa-print"></i></span></a></li>
                                        <script>
                                        function myFunction() {
                                          window.print();
                                        }
                                        </script>






                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_page_content"> <img class="img-center" src="{{asset('nimg/large/'.$news->img) }}" alt="">
                                </p>
                                <blockquote  style="text-align: justify;"> {!! $news->news !!}</blockquote>

                            </div>

@if (!empty($news->nurl))



@endif







                            @endforeach



<div class="social_link">
                                        <ul class="sociallink_nav" style="float: left;">
                                       <?php
                                          $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                      ?>

                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u={{  $actual_link }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                           
                                       <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                            
                                        <li><a href="#"> <span onclick="myFunction()"> <i class="fa fa-print"></i></span></a></li>
                                        <script>
                                        function myFunction() {
                                          window.print();
                                        }
                                        </script>






                                           
                                        </ul>
 </div>


                            <div class="comment-box">



                              <!--   <h5 class="counter">
                                    <a href="#" class="active"><i class="fa fa-thumbs-up" aria-hidden="true"></i> লাইক (১১)</a>
                                    <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> মন্তব্য ( ১ ) </a>
                                </h5>
 -->


                                <div class="comments">

                                    <div class="row">
                                        <!-- single comment -->
                                        @foreach ($allcomments as $allcomment)


                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <strong>{{ $allcomment->name }}</strong> <span class="text-muted"> {{ $allcomment->created_at->diffForHumans() }} </span>
                                                </div>
                                                <div class="panel-body">
                                                    {{ $allcomment->comment }}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./single comment -->
                                        @endforeach

                                    </div>
                                    <!-- /row -->
                                </div>
                                <h3>আপনার মতামত লিখুন : </h3>
                                  @foreach ($allnews as $news)
                                <form action="{{ url('/view/'.$news->id) }}" method="POST">
                                  @csrf
                                  <input name="news_id" type="hidden" class="form-control" value="{{ $news->id }}">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="আপনার নাম" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment" id="" cols="30" rows="7" class="form-control" placeholder="আপনার মন্তব্য" required=""></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">যুক্ত করুন </button>
                                </form>
                              @endforeach
                            </div>


                            <div class="related_post">
                                <h3>আরও পড়ুন </h3>

                                <ul class="related-posts-wrapper spost_nav wow fadeInDown animated">
                                  @foreach ($mores as $related_News)
                                    <li>
                                        <div class="media">
                                            <a class="media-left" href="{{ url('/view/'.$related_News->id) }}"> <img src="{{asset('nimg/'.$related_News->img) }}" alt=""> </a>
                                            <div class="media-body"> <a class="catg_title" href="{{ url('/view/'.$related_News->id) }}"> {{ $related_News->headline }}</a> </div>
                                        </div>
                                    </li>
                                  @endforeach  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <aside class="right_content">
                        <div class="single_sidebar wow fadeInDown">

                          <?php
                          $iid;

                          if ($iid=='1') {
                           $pa='জাতীয়';
                          }
                          elseif ($iid=='2') {
                              $pa='রাজনীতি';
                          }
                          elseif ($iid=='3') {
                              $pa='রাজধানী';
                          }
                          elseif ($iid=='4') {
                              $pa='বিভাগীয় সংবাদ ';
                          }
                          elseif ($iid=='5') {
                              $pa='আর্ন্তজতিক';
                          }
                          elseif ($iid=='6') {
                              $pa='বিনোদন';
                          }
                          elseif ($iid=='7') {
                              $pa='খেলাধূলা';
                          }
                          elseif ($iid=='8') {
                              $pa='কৃষি ও শিল্প';
                          }
                          elseif ($iid=='9') {
                              $pa='লাইফ স্টাইল';
                          }
                          elseif ($iid=='10') {
                              $pa='স্বাস্থ্য বার্তা';
                          }
                          elseif ($iid=='11') {
                              $pa='শিক্ষাপাতা';
                          }
                          elseif ($iid=='12') {
                              $pa='অর্থনীতি';
                          }
                          elseif ($iid=='13') {
                              $pa='বিবিধ';
                          }
                          elseif ($iid=='14') {
                              $pa='বিজ্ঞান ও প্রযুক্তি';
                          }
                          elseif ($iid=='15') {
                              $pa='আইন ও শালিশ';
                          }
                          elseif ($iid=='16') {
                              $pa='অপরাধ';
                          }
                          elseif ($iid=='17') {
                              $pa='নারি ও শিশু';
                          }
                          elseif ($iid=='18') {
                              $pa='আবহাওয়া';
                          }
                          elseif ($iid=='19') {
                              $pa='সাহিত্য জগৎ';
                          }
                          elseif ($iid=='20') {
                              $pa='চাকুরীর খবর';
                          }
                          elseif ($iid=='21') {
                              $pa='ফেসবুক কর্ণার';
                          }
                          elseif ($iid=='22') {
                              $pa='সাধারন জ্ঞান';
                          }
                          elseif ($iid=='23') {
                              $pa='রান্না ও রেসিপি';
                          }
                          elseif ($iid=='24') {
                              $pa='টুরিজম ও ভিসা';
                          }
                          elseif ($iid=='25') {
                              $pa='ধর্ম';
                          }
                          elseif ($iid=='26') {
                              $pa='রাশিফল';
                          }
                          elseif ($iid=='27') {
                              $pa='দূর্ঘটনা';
                          }
                          elseif ($iid=='28') {
                              $pa='শোক সংবাদ';
                          }
                          elseif ($iid=='29') {
                              $pa='শিরোনাম';
                          }





                          else
                              {$pa='Category';}



                          ;?>

                            @if ($relatedNews->category == $pa)

                            @endif

                            <h2><span>{{ $pa }} এর আরও খবর </span></h2>

                            <div class="latest_post_container">
                                <ul class="spost_nav">


                                  @foreach ($relatedallNews as $related_News)





                                    <li>
                                        <div class="media">
                                            <a href="{{ url('/view/'.$related_News->id) }}" class="media-left"> <img alt="" src="{{asset('nimg/'.$related_News->img) }}"> </a>
                                            <div class="media-body"> <a href="{{ url('/view/'.$related_News->id) }}" class="catg_title">{{ $related_News->headline }} </a> </div>
                                        </div>
                                    </li>

                                  @endforeach

                                </ul>

                            </div>

                        </div>

                        <!-- Single ad -->
                        <div class="single_sidebar hidden-xs wow fadeInDown">
                          @if (!empty($adds2->img))
                            <a href="{{ $adds2->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds2->img)}}" alt="promila ad">
                            </a>
                          @endif
                        </div>
                        <!-- ./Single ad -->



                        <div class="single_sidebar hidden-xs wow fadeInDown">
                            <h2><span>সর্বশেষ খবর</span></h2>
                            <ul class="spost_nav">
                                @foreach($allnewss as $alln)
                                <li>
                                    <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('nimg/'.$alln->img)}}"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> {{ $alln->headline }}</a> </div>
                                    </div>
                                </li>
                               @endforeach

                            </ul>
                        </div>

                        <!-- Single ad -->





                        <div class="single_sidebar hidden-xs wow fadeInDown">
                          @if (!empty($adds3->img))
                           <a href="{{ $adds3->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds3->img)}}" alt="promila ad">
                            </a>
                          @endif
                        </div>



                        <!-- ./Single ad -->

                        


                        

                    </aside>
                </div>
            </div>
        </section>
@include('front.footer')



@endsection
