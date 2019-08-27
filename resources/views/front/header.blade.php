    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_top">
                        <div class="header_top_left">
                            <ul class="top_nav">
                                <li><a href="{{ url('/members')}}" style="font-size: 16px"> ডে-নাইট পরিবার</a></li>
                                <li><a href="https://www.youtube.com/channel/UCASRQW6Z2498UACU33poerw" style="font-size: 16px" target="_blank"> ডে-নাইট টিভি</a></li>
                            </ul>
                        </div>

                        <div class="header_top_middle">
                            <p>
 
<script
type="text/javascript"
src="http://tareq.wedevs.com/bangla_date_widget.php">

</script> | {{ date('d M Y') }}

                

                            </p>

                        </div>
                        <div class="header_top_right">
                            <div class="social_area">
                                <ul class="social_nav">
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/Day-Night-News-618767074951861"></a>
                                    </li>

<li class="youtube">
                                        <a href="https://www.youtube.com/channel/UCASRQW6Z2498UACU33poerw"></a>
                                    </li>


                                    
                                    <li class="instagram">
                                        <a href="#"></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom">
                        <div class="logo_area">
                            <a href="index.html" class="logo"><img src="{{asset('font')}}/images/logo.png" alt=""></a>
                        </div>
                        <div class="add_banner">
                          

                          @if (!empty($adds->img))
                            <a href="{{ $adds->aurl }}" target="_blank">
                                <img src="{{asset('add/'.$adds->img)}}" alt="promila ad">
                            </a>
                          @endif


                          
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="navArea" class=" sticky">
            <nav class="dnnbd-navbar">

                <ul class="main-menu">
                    <li class="active"><a href="{{ url('/') }}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

                    <li><a href="{{ url('/category/1') }}">জাতীয়</a></li>
                    <li> <a href="{{ url('/category/2') }}">রাজনীতি</a> </li>
                    <li><a href="{{ url('/category/3') }}">রাজধানী</a></li>
                    <li><a href="{{ url('/category/4') }}">বিভাগীয় সংবাদ</a></li>
                    <li><a href="{{ url('/category/5') }}">আর্ন্তজতিক</a></li>
                    <li><a href="{{ url('/category/6') }}">বিনোদন</a></li>
                    <li><a href="{{ url('/category/7') }}">খেলাধূলা</a></li>
                    <li><a href="{{ url('/category/8') }}">কৃষি ও শিল্প</a></li>
                    <li><a href="{{ url('/category/9') }}">লাইফ স্টাইল</a></li>
                    <li><a href="{{ url('/category/10') }}">স্বাস্থ্য বার্তা</a></li>
                    <li><a href="{{ url('/category/11') }}">শিক্ষাপাতা</a></li>

                </ul>
                <div class="toggler">
                    <div class="toggler-icon"></div>
                    <span>আরও</span>
                </div>

                <div class="mega-menu">
                    <div class="container">
                        <ul>
                            <li><a href="{{ url('/category/1') }}">জাতীয়</a></li>
                            <li> <a href="{{ url('/category/2') }}">রাজনীতি</a> </li>
                            <li><a href="{{ url('/category/3') }}">রাজধানী</a></li>
                            <li><a href="{{ url('/category/4') }}">বিভাগীয় সংবাদ</a></li>
                            <li><a href="{{ url('/category/5') }}">আর্ন্তজতিক</a></li>
                            <li><a href="{{ url('/category/6') }}">বিনোদন</a></li>
                            <li><a href="{{ url('/category/7') }}">খেলাধূলা</a></li>
                            <li><a href="{{ url('/category/8') }}">কৃষি ও শিল্প</a></li>
                            <li><a href="{{ url('/category/9') }}">লাইফ স্টাইল</a></li>
                            <li><a href="{{ url('/category/10') }}">স্বাস্থ্য বার্তা</a></li>
                            <li><a href="{{ url('/category/11') }}">শিক্ষাপাতা</a></li>
                            <li><a href="{{ url('/category/12') }}">অর্থনীতি</a></li>
                            <li><a href="{{ url('/category/13') }}">বিবিধ</a></li>
                            <li><a href="{{ url('/category/14') }}">বিজ্ঞান ও প্রযুক্তি</a></li>
                            <li><a href="{{ url('/category/15') }}">আইন ও শালিশ</a></li>
                            <li><a href="{{ url('/category/16') }}">অপরাধ</a></li>
                            <li><a href="{{ url('/category/17') }}">নারি ও শিশু</a></li>
                            <li><a href="{{ url('/category/18') }}">আবহাওয়া</a></li>
                            <li><a href="{{ url('/category/19') }}">সাহিত্য জগৎ</a></li>
                            <li><a href="{{ url('/category/20') }}">চাকুরীর খবর</a></li>
                            <li><a href="{{ url('/category/21') }}">ফেসবুক কর্ণার</a></li>
                            <li><a href="{{ url('/category/22') }}">সাধারন জ্ঞান </a></li>
                            <li><a href="{{ url('/category/23') }}">রান্না ও রেসিপি</a></li>
                            <li><a href="{{ url('/category/24') }}">টুরিজম ও ভিসা </a></li>
                            <li><a href="{{ url('/category/25') }}">ধর্ম</a></li>
                            <li><a href="{{ url('/category/26') }}">রাশিফল</a></li>
                            <li><a href="{{ url('/category/27') }}">দূর্ঘটনা</a></li>
                            <li><a href="{{ url('/category/28') }}">শোক সংবাদ</a></li>
                            <li><a href="{{ url('/category/29') }}">শিরোনাম</a></li>


                        </ul>
                        <ul class="extra-menu">
                            <li><a href=""><i class="fa fa-female" aria-hidden="true"></i>

ডে-নাইট মানবাধিকার
                            </a></li>
                            <li><a href=""><i class="fa fa-medkit" aria-hidden="true"></i>
 ডে-নাইট হেলথ                           

                            </a></li>
                            <li><a href=""><i class="fa fa-eye" style="color:white" aria-hidden="true"></i>
ডে-নাইট চয়েজ
                            </a></li>
                            <li><a href=""><i class="fa fa-phone-square" aria-hidden="true"></i>

জরুরী ফোন নং
                        </a>


                    </li>

                            <li><a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i>
অন্যান্য গণমাধ্যম
                            </a></li>

                            <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
ইতিহাসের পাতা
                            </a></li>
                       


                        </ul>
                   



                    </div>
                    <!-- ./container -->
                </div>

            </nav>

        </section>
        <section id="newsSection">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="latest_newsarea">
                        <span>সর্বশেষ খবর   </span>
                        <ul id="ticker01" class="news_sticker">

@foreach ($ses as $ses1)


                            <li>
                                <a href="{{ url('/view/'.$ses1->id) }}"><img src="{{asset('nimg/'.$ses1->img)}}" alt="">{{ $ses1->headline}}</a>
                            </li>
@endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section>
