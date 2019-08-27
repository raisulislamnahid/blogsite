@extends('front.master')
@section('content')

@include('front.header')
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="left_content">
                        <div class="single_page">
                            <ol class="breadcrumb">
                                <li><a href="{{asset('font')}}/index.html"><i class="fa fa-home" aria-hidden="true"></i></a></li>





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



                                <li class="active">{{ $pa }}</li>



                            </ol>

                            <div class="full-width-single row">
                                <div class="col-md-12">
                                    <div class="single-post">






@foreach ($jatioa as $jatioab)

                                        <div class="row">
                                            <div class="col-sm-7"><a href="{{ url('/view/'.$jatioab->id) }}">
                                                <img src="{{asset('nimg/small')}}/{{ $jatioab->img}}" alt=""></a>
                                            </div>
                                            <div class="col-sm-5 full-width" style="text-align: justify;">
                                                <h4>
                                                    <a href="{{ url('/view/'.$jatioab->id) }}"> {{ $jatioab->headline }}
                                                </h4>
                                               

<?php



$string = $jatioab->news;
if (strlen($string) > 1000) {

    // truncate string
    $stringCut = substr($string, 0, 1000);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
}

?>





                                                <p> {!! $string !!}...</p> 

</a>
                                            </div>
                                      </div>


@endforeach




                                    </div>

                                </div>
                            </div>

                            <div class="all row">
                                <!-- single post -->







@foreach($jatio as $ja)
                                <div class="col-sm-6">
                                    <div class="single-post">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <img src="{{asset('nimg/small')}}/{{ $ja->img}}" alt="">
                                            </div>
                                            <div class="col-xs-7"><a href="{{ url('/view/'.$ja->id) }}">{{ $ja->headline}}</a></div>
                                        </div>
                                    </div>

                                </div>

@endforeach








                                <!-- ./single post -->



                            </div>
                            <!-- =====Load more Button ===== -->
                            <div class="load-more">
                                <a href="" class="btn btn-primary btn-block">আরও পড়ুন</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <aside class="right_content hidden-xs">

                        <!-- Single ad -->
                        <div class="single_sidebar hidden-xs  wow fadeInDown">
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
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('nimg/small/'.$alln->img)}}"> </a>
                                        <div class="media-body"> <a href="{{ url('/view/'.$alln->id) }}" class="catg_title"> {{ $alln->headline }}</a> </div>
                                    </div>
                                </li>
                               @endforeach

                            </ul>
                        </div>

                        <!-- Single ad -->
                        <div class="single_sidebar hidden-xs wow fadeInDown">
                          @if (!empty($adds2->img))
                            <a href="{{ $adds3->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds3->img)}}" alt="promila ad">
                            </a>
                          @endif
                        </div>
                        <!-- ./Single ad -->

                        <!-- Single ad -->
                        <div class="single_sidebar hidden-xs wow fadeInDown">
                          @if (!empty($adds2->img))
                            <a href="{{ $adds4->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds4->img)}}" alt="promila ad">
                            </a>
                          @endif
                        </div>
                        <!-- ./Single ad -->

                       <!--  <div class="single_sidebar wow fadeInDown">
                            <h2><span>জনপ্রিয়</span></h2>
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('font')}}/images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('font')}}/images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('font')}}/images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('font')}}/images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('font')}}/images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 5</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="single_page.html" class="media-left"> <img alt="" src="{{asset('font')}}/images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 6</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
 -->


                    </aside>
                </div>
            </div>
        </section>
@include('front.footer')



@endsection
