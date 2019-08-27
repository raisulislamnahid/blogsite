@extends('front.master')
@section('content')

@include('front.header')

        <section id="sliderSection">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="slick_slider">



 <?php
$date=date('d-M-y');
$conn=mysqli_connect("localhost","root","","blogsite");

$select_v="SELECT h_count from v_count where sl='1'";
$lsdk=mysqli_query($conn, $select_v);
while ($vvv=mysqli_fetch_array($lsdk)) 
{
@$p_coutn=$vvv['h_count'];
}




@$fcn=@$p_coutn+1;
$sqlf = "UPDATE v_count SET h_count='$fcn' where sl= 1";
$qqry=mysqli_query($conn, $sqlf);




$select_v2="SELECT *from v_count where sl=2";
$lsdk2=mysqli_query($conn, $select_v2);
while ($vvv2=mysqli_fetch_array($lsdk2)) 
{
@$p_coutn2=$vvv2['h_count'];
@$date2=$vvv2['date'];
}


if (@$date2!=$date) 
{
$fcn2=@$p_coutn2+1;
$sqlf2 = "UPDATE v_count SET h_count='1', date='$date' where sl= 2";
$qqry2=mysqli_query($conn, $sqlf2);
}
else
{
$fcn2=$p_coutn2+1;
$sqlf2 = "UPDATE v_count SET h_count='$fcn2', date='$date' where sl= 2";
$qqry2=mysqli_query($conn, $sqlf2);    
}



?>

 



@foreach($slider as $slider1)

                        <div class="single_iteam">
                            <a href="{{ route ('single_page',[$slider1->id])}}"> <img src="{{asset('nimg/small/'.$slider1->img)}}" alt=""></a>
                            <div class="slider_article">
                                <p>{{ $slider1->headline }}</p>
                            </div>
                        </div>

@endforeach








                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="latest_post">
                                <h2><span>চলতি খবর
 </span></h2>
                                <div class="latest_post_container">
                                    <ul class="latest_postnav">


                                    @foreach ($vnwsh as $news)



                                        <li>
                                            <div class="media">
                                                <a href="pages/single_page.html" class="media-left"> <img alt="" src="{{asset('nimg/small/'.$news->img) }}"> </a>
                                                <div class="media-body"> <a href="{{ route ('single_page',[$news->id])}}?dnnbd={{ $news->headline }}" class="catg_title"> {{ $news->headline }} </a> </div>
                                            </div>
                                        </li>


                                    @endforeach



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="latest_post">
                                <h2><span>ডে-নাইট টিভি</span></h2>
                                <div class="vide_area">


@foreach ($vd as $v)
<iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $v->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>





        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content">








                        <div class="single_post_content">
                            <h2><span>জাতীয় </span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">
                                    <li>


@foreach ($jatio11 as $jatio111)
                                        <figure class="bsbig_fig">
                                            <a href="{{ route ('single_page',[$jatio111->id])}}" class="featured_img"> <img alt="" src="{{asset('nimg/small/'.$jatio111->img) }}"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="{{ route ('single_page',[$jatio111->id])}}">{{ $jatio111->headline}}</a> </figcaption>
                                        </figure>
  @endforeach


                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">



@foreach ($jatio as $jaton)

                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="{{ route ('single_page',[$jaton->id])}}" class="media-left"> <img alt="" src="{{asset('nimg/small/'.$jaton->img) }}"> </a>
                                            <div class="media-body"> <a href="{{ route ('single_page',[$jaton->id])}}" class="catg_title"> {{ $jaton->headline }}</a> </div>
                                        </div>
                                    </li>

@endforeach



                                </ul>
                            </div>
                        </div>























                        <div class="single_post_content">
                            <h2><span>আন্তর্জাতিক </span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">
                                    <li>


@foreach ($int1 as $into)

                                            <figure class="bsbig_fig">
                                                <a href="{{ route ('single_page',[$into->id])}}" class="featured_img"> <img alt="" src="{{asset('nimg/small/'.$into->img) }}"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="{{ route ('single_page',[$into->id])}}">{{ $into->headline }}</a> </figcaption>

                                            </figure>

@endforeach


                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">



@foreach ($int as $intd)

                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="{{ route ('single_page',[$intd->id])}}" class="media-left"> <img alt="" src="{{asset('nimg/small/'.$intd->img) }}"> </a>
                                                <div class="media-body"> <a href="{{ route ('single_page',[$intd->id])}}" class="catg_title"> {{ $intd->headline }}</a> </div>
                                            </div>
                                        </li>


      @endforeach



                                </ul>
                            </div>
                        </div>























                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <h2><span>রাজনীতি</span></h2>
                                    <ul class="business_catgnav wow fadeInDown">
                                        <li>


  @foreach ($raj1 as $rajo)

                                            <figure class="bsbig_fig">
                                                <a href="{{ route ('single_page',[$rajo->id])}}" class="featured_img"> <img alt="" src="{{asset('nimg/small/'.$rajo->img) }}"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="{{ route ('single_page',[$rajo->id])}}">{{ $rajo->headline }}</a> </figcaption>

                                            </figure>

      @endforeach



                                        </li>
                                    </ul>
                                    <ul class="spost_nav">


  @foreach ($raj as $rajd)

                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="{{ route ('single_page',[$rajd->id])}}" class="media-left"> <img alt="" src="{{asset('nimg/small/'.$rajd->img) }}"> </a>
                                                <div class="media-body"> <a href="{{ route ('single_page',[$rajd->id])}}" class="catg_title"> {{ $rajd->headline }}</a> </div>
                                            </div>
                                        </li>


      @endforeach


                                    </ul>
                                </div>
                            </div>





                            <div class="technology">
                                <div class="single_post_content">
                                    <h2><span>বিভাগীয় সংবাদ</span></h2>
                                    <ul class="business_catgnav">
                                        <li>
                                              @foreach ($b1 as $bo)

                                            <figure class="bsbig_fig">
                                                <a href="{{ route ('single_page',[$bo->id])}}" class="featured_img"> <img alt="" src="{{asset('nimg/small/'.$bo->img) }}"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="{{ route ('single_page',[$bo->id])}}">{{ $bo->headline }}</a> </figcaption>

                                            </figure>

      @endforeach
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                         @foreach ($b as $bd)

                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="{{ route ('single_page',[$bd->id])}}" class="media-left"> <img alt="" src="{{asset('nimg/small/'.$bd->img) }}"> </a>
                                                <div class="media-body"> <a href="{{ route ('single_page',[$bd->id])}}" class="catg_title"> {{ $bd->headline }}</a> </div>
                                            </div>
                                        </li>


      @endforeach
                                    </ul>
                                </div>
                            </div>







                        </div>







                        <div class="single_post_content">
                            <h2><span> বিনোদন </span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav">
                                    <li>


                                        @foreach ($bb1 as $bbo)

                                            <figure class="bsbig_fig">
                                                <a href="{{ route ('single_page',[$bbo->id])}}" class="featured_img"> <img alt="" src="{{asset('nimg/'.$bbo->img) }}"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="{{ route ('single_page',[$bbo->id])}}">{{ $bbo->headline }}</a> </figcaption>

                                            </figure>

      @endforeach



                                    </li>
                                </ul>
                            </div>













                        <div class="single_post_content">
                            <h2><span>ফোটোগ্রাফি </span></h2>
                            <ul class="photograph_nav  wow fadeInDown">
                                @foreach($gallerys as $gallery)
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla">

                                            <a href="{{ asset('pimg/'.$gallery->photoview) }}" class="pro_img"><img src="{{ asset('pimg/'.$gallery->photoview) }}" alt="" style="height: 115%" /></a>
                                        </figure>
                                    </div>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>





                            <div class="single_post_content_right">
                                <ul class="spost_nav">



                                    @foreach ($bb as $bbd)

                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="{{ route ('single_page',[$bbd->id])}}" class="media-left"> <img alt="" src="{{asset('nimg/'.$bbd->img) }}"> </a>
                                                <div class="media-body"> <a href="{{ route ('single_page',[$bbd->id])}}" class="catg_title"> {{ $bbd->headline }}</a> </div>
                                            </div>
                                        </li>


      @endforeach




                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content">
                        <div class="single_sidebar">
                            <h2><span> ফেসবুক থেকে পাওয়া </span></h2>
                            <ul class="spost_nav">
                                @foreach($f as $fb)
                                <li>
                                    <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <a href="{{ route ('single_page',[$fb->id])}}" class="media-left"> <img alt="" src="{{asset('nimg/'.$fb->img)}}"> </a>
                                        <div class="media-body"> <a href="{{ route ('single_page',[$fb->id])}}" class="catg_title"> {{ $fb->headline }}</a> </div>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                        </div>

                   <!--      <div class="single_sidebar wow fadeInDown">
                            <h2><span>স্পনসর </span></h2>
                            <a class="sideAdd" href="#"><img src="{{asset('font')}}/images/add_img.jpg" alt=""></a>
                        </div>

                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>লিংকস </span></h2>
                            <ul>
                                <li><a href="#">ব্লগ</a></li>
                                <li><a href="#">আরএসএস  ফিড  </a></li>
                                <li><a href="#">লগইন</a></li>
                                <li><a href="#">লাইফ স্টাইল</a></li>
                            </ul>
                        </div> -->

                        <!-- ===Ads area === -->
                        <!-- Single ad -->
                        @if(!empty($adds2->img))
                        <div class="single_sidebar hidden-xs wow fadeInDown">
                            <a href="{{ $adds2->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds2->img)}}" alt="promila ad">
                            </a>
                        </div>
                        @endif
                        <!-- Single ad -->
                        @if(!empty($adds3->img))
                        <div class="single_sidebar hidden-xs  wow fadeInDown">
                            <a href="{{ $adds3->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds3->img)}}" alt="promila ad">
                            </a>
                        </div>
                        @endif
                        <!-- Single ad -->
                        @if(!empty($adds4->img))
                        <div class="single_sidebar  hidden-xs wow fadeInDown">
                            <a href="{{ $adds4->aurl }}" target="_blank">
                                 <img src="{{asset('add/'.$adds4->img)}}" alt="promila ad">
                            </a>
                        </div>
                        @endif
                        @if(!empty($adds5->img))
                        <div class="single_sidebar  hidden-xs wow fadeInDown">
                            <a href="{{ $adds5->aurl }}" target="_blank">
                                 <img src="{{asset('add/'.$adds5->img)}}" alt="promila ad">
                            </a>
                        </div>
                        @endif
                        @if(!empty($adds6->img))
                        <div class="single_sidebar  hidden-xs wow fadeInDown">
                           <a href="{{ $adds6->aurl }}" target="_blank">
                                 <img src="{{asset('add/'.$adds6->img)}}" alt="promila ad">
                            </a>
                        </div>
                        @endif
                        @if(!empty($adds7->img))
                        <div class="single_sidebar  hidden-xs wow fadeInDown">
                            <a href="{{ $adds7->aurl }}" target="_blank">
                                 <img src="{{asset('add/'.$adds7->img)}}" alt="promila ad">
                            </a>
                        </div>
                        @endif
                        <!-- ===  সম্পাদকের  কথা ===-->
                        <div class="single_sidebar words_of_editor wow fadeInDown">
                            <h2><span>সম্পাদকের কিছু কথা </span></h2>
                            @foreach($editorials as $editorial)
                            <div class="image">
                                <img src="{{asset('add/'.$editorial->editorial_img)}}" alt="avatar">
                            </div>

                            <p class="words">
                                “ {{ $editorial->quotes }} ”
                            </p>

                            <h5 class="name">{{ $editorial->editor_name }}</h5>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </section>

@include('front.footer')



@endsection
