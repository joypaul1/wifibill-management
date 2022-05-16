
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>Travelia - Travel Agency, Responsive - Hotel Online Booking</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
    <meta name="author" content="iwthemes.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme CSS -->
    <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet" media="screen">

    <link href="{{asset('frontend')}}/css/skins/green/green.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('frontend')}}/css/theme-responsive.css" rel="stylesheet" media="screen">
    <!-- Skins Theme -->
    <link href="#" rel="stylesheet" media="screen" class="skin">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('frontend')}}/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="{{asset('frontend')}}/img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend')}}/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend')}}/img/icons/apple-touch-icon-114x114.png">

    <!-- Head Libs -->
    <script src="{{asset('frontend')}}/js/modernizr.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- file:///D:/html.iwthemes.com/travelia/run/css/skins/green/green.css --}}
    <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

    <!--[if lte IE 8]>
            <script src="{{asset('frontend')}}/js/responsive/html5shiv.js"></script>
            <script src="{{asset('frontend')}}/js/responsive/respond.js"></script>
        <![endif]-->
</head>

<body>
    <!--Preloader-->
    {{-- <div class="preloader">
        <div class="status">&nbsp;</div>
    </div> --}}
    <!--End Preloader-->

    <!-- Theme-options -->
    {{-- <div id="theme-options">
        <div class="openclose"></div>
        <div class="title">
            <span>THEME OPTIONS</span>
            <p>Choose a combination of predefined colors here. Here are some examples. You can create any additional number on your backend theme, also can choose the background you want and four differents layouts.</p>
        </div>
        <span>SKINS</span>
        <ul id="colorchanger">
            <li><a class="colorbox red" href="?theme=red" title="Red Skin"></a></li>
            <li><a class="colorbox blue" href="?theme=blue" title="Blue Skin"></a></li>
            <li><a class="colorbox yellow" href="?theme=yellow" title="Yellow Skin"></a></li>
            <li><a class="colorbox green" href="?theme=green" title="Green Skin"></a></li>
            <li><a class="colorbox orange" href="?theme=orange" title="Orange Skin"></a></li>
            <li><a class="colorbox purple" href="?theme=purple" title="Purple Skin"></a></li>
            <li><a class="colorbox pink" href="?theme=pink" title="Pink Skin"></a></li>
            <li><a class="colorbox cocoa" href="?theme=cocoa" title="Cocoa Skin"></a></li>
        </ul>
        <span>LAYOUT STYLE</span>
        <ul class="layout-style">
            <li class="wide">Wide</li>
            <li class="semiboxed active">Semiboxed</li>
            <li class="boxed">Boxed</li>
            <li class="boxed-margin">Boxed Margin</li>
        </ul>
        <div class="patterns">
            <span>BACKGROUND PATTERNS</span>
            <ul class="backgrounds">
                <li class="bgnone" title="None - Default"></li>
                <li class="bg1"></li>
                <li class="bg2"></li>
                <li class="bg3"></li>
                <li class="bg4 "></li>
                <li class="bg5"></li>
                <li class="bg6"></li>
                <li class="bg7"></li>
                <li class="bg8"></li>
                <li class="bg9 "></li>
                <li class="bg10"></li>
                <li class="bg11"></li>
                <li class="bg12"></li>
                <li class="bg13"></li>
                <li class="bg14"></li>
                <li class="bg15"></li>
                <li class="bg16"></li>
                <li class="bg17"></li>
                <li class="bg18"></li>
                <li class="bg19"></li>
                <li class="bg20"></li>
                <li class="bg21"></li>
                <li class="bg22"></li>
                <li class="bg23"></li>
                <li class="bg24"></li>
                <li class="bg25"></li>
                <li class="bg26"></li>
            </ul>
        </div>
    </div> --}}
    <!-- End Theme-options -->

    <!-- layout-->
    <div id="layout">
        <!-- Info Head -->
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><i class="fa fa-headphones"></i> 01800034567</li>
                            {{-- <li><i class="fa fa-comment"></i> <a href="#">Live chat</a></li> --}}
                            {{-- <li>
                                <ul>
                                    <li class="dropdown">
                                        <i class="fa fa-globe"></i>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            Language<i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><img src="{{asset('frontend')}}/img/language/spanish.png" alt="">Spanish</a></li>
                                            <li><a href="#"><img src="{{asset('frontend')}}/img/language/english.png" alt="">English</a></li>
                                            <li><a href="#"><img src="{{asset('frontend')}}/img/language/frances.png" alt="">Frances</a></li>
                                            <li><a href="#"><img src="{{asset('frontend')}}/img/language/portugues.png" alt="">Portuguese</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Head -->

        <!-- Header-->
        <header class="header-v3">
            <!-- Main Nav -->
            <nav class="flat-mega-menu">
                <!-- flat-mega-menu class -->
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <!-- mobile click button to show menu -->
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <!-- collapse class for collapse the drop down -->
                    <!-- website title - Logo class -->
                    <li class="title">
                        <a href="/"><span>T</span>ravelia<span>.</span></a>
                        <i class="fa fa-wifi"></i>
                    </li>
                    <!-- End website title - Logo class -->

                    <li><a href="/">HOME</a></li>




                    <li class="login-form"> <i class="fa fa-user"></i>
                        <!-- login form -->
                        <ul class="drop-down hover-expand">
                            <li>
                                <form method="post" action="#">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <input type="email" required="required" name="email" placeholder="Your email address">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="password" required="required" name="password" placeholder="Password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <input type="submit" value="Login"> </td>
                                            <td> <label> <input type="checkbox" name="check_box"> Keep me signed in </label> </td>
                                        </tr>
                                    </table>
                                </form>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="search-bar"> <i class="fa fa-search"></i>
                        <!-- search bar -->
                        <ul class="drop-down hover-expand">
                            <li>
                                <form method="post" action="#">
                                    <table>
                                        <tr>
                                            <td> <input type="search" required="required" name="serach_bar" placeholder="Type Keyword Here"> </td>
                                            <td> <input type="submit" value="Search"> </td>
                                        </tr>
                                    </table>
                                </form>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
            <!-- Main Nav -->
        </header>
        <!-- End Header-->

        <!-- Slide And Filter Section-->
        <section class="tp-banner-container no-margin">
            <!-- SLIDE  -->
            <div class="tp-banner">
                <!-- SLIDES CONTENT-->
                <ul>
                    <!-- SLIDE 01-->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('frontend')}}/img/slide/4.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption medium_text lft stl" data-x="right" data-y="240" data-speed="300" data-start="800" data-splitin="lines"
                         data-splitout="none" data-easing="easeOutExpo">Welcome to our websit
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption large_bold_white sft stb" data-x="right"
                        data-y="260" data-speed="300" data-start="1000" data-splitin="lines"
                         data-splitout="none" data-easing="easeOutExpo">{{ $info->name ??'-'}}
                        </div>

                        <!-- LAYER NR. 3 -->
                        {{-- <div class="tp-caption small_light_white sfb stb"
                         data-x="right" data-y="325" data-speed="500" data-start="1200"
                         data-splitin="lines" data-splitout="none" data-easing="easeOutExpo">{{ $info->name ??'-'}}
                        </div> --}}

                        <!-- LAYER NR. 1 -->
                        {{-- <div class="tp-caption lft stl fadeout" data-x="left" data-hoffset="0" data-y="top" data-voffset="50" data-speed="300" data-endspeed="300" data-start="400" data-easing="Power3.easeInOut">
                            <img alt="" src="{{asset('frontend')}}/img/slide/thumbs/extreme.png">
                        </div> --}}
                    </li>
                    <!-- END SLIDE 01-->


                </ul>
                <!-- END SLIDES  -->
                {{-- <div class="tp-bannertimer"></div> --}}
            </div>
            <!-- SLIDE CONTENT-->
        </section>
        <!-- End Slide And Filter Section-->

        <!--Content Central -->
        <section class="content-central">
            <!-- Shadow Semiboxed Layout -->
            <div class="semiboxshadow text-center">
                <img src="{{asset('frontend')}}/img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <!-- End Shadow Semiboxed Layout -->

            <!-- End content info -->
            <div class="content_info">
                <div class="paddings">
                    {{-- <strong class="text-center" style="display: block;color:greenyellow">Our All Package</strong> --}}
                    <div class="container">
                        <div class="row">


                            <!-- Item Table-->
                            <div class="col-sm-6 col-md-4">
                                <div class="item-table">
                                    <div class="header-table color-blue">
                                        <div class="featured-table">Featured</div>
                                        <i class="fa fa-internet-explorer"></i>
                                        <h2>Advance</h2>
                                        <span>$ 99 / per month</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Unique Profile</li>
                                        <li class="content_resalt"><i class="fa fa-check"></i> 5 Downloads</li>
                                        <li><i class="fa fa-times"></i> Infinite Acces</li>
                                        <li class="content_resalt"><i class="fa fa-times"></i> 5 Stars</li>
                                        <li><i class="fa fa-times"></i> Full resolution</li>
                                    </ul>
                                    {{-- <a class="btn color-blue" href="#services">Buy Now</a> --}}
                                </div>
                            </div>
                            <!-- End Item Table-->


                        </div>
                    </div>
                </div>
            </div>
            <!-- End content info  -->

            <!-- End content info - Skin base-->
            <div class="content_info">
                <div class="bg-dark paddings-mini color-white text-center">
                    <h2> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Need Help? Call our service team 7/365 - 01 8000 127 200</h2>
                </div>
            </div>
            <!-- End content info - Skin base-->

            <!-- End slide features - Parallax Section -->
            {{-- <div class="content_info">
                <!-- Parallax Background -->
                <div class="bg_parallax image_02_parallax"></div>
                <!-- Parallax Background -->

                <!-- Content Parallax-->
                <div class="opacy_bg_03 color-white">
                    <ul id="slide-features">
                        <li>
                            <!-- content-->
                            <div class="container">
                                <div class="row">
                                    <!-- Info Resalt - Info Services -->
                                    <div class="col-md-6">
                                        <div class="services-lines-info">
                                            <h2>We Provide You An Ultimate Travel Experience</h2>
                                            <p class="lead">
                                                Book cheap hotels and make payment facilities.
                                                <span class="line"></span>
                                            </p>

                                            <p>Find a wide variety of airline tickets and cheap flights, hotels, tour packages, car rentals, cruises and more in travelia.com.You can choose your favorite destination and start planning your long-awaited vacation.
                                                You can also check availability of flights and hotels quickly and easily, in order to find the option that best suits your needs.</p>
                                            <br>
                                            <p>Book cheap hotels and make payment facilities, free cancellation when the hotel so provides, compare prices and find all the options for your vacation.</p>
                                            <br>
                                            <a href="#" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End content-->
                        </li>
                        <!-- Item Slide Features  -->
                        <li>
                            <div class="container">
                                <div class="row padding-top">
                                    <div class="col-md-6">
                                        <div class="img-hover">
                                            <div class="overlay"> <a href="{{asset('frontend')}}/img/gallery-2/2.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                            <img src="{{asset('frontend')}}/img/gallery-2/2.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services-lines-info">
                                            <h2>Explore our latest tours </h2>
                                            <p class="lead">
                                                Why we are different.
                                                <span class="line"></span>
                                            </p>

                                            <p>You can choose your favorite destination and start planning your long-awaited vacation. We offer thousands of destinations and have a wide variety of hotels so that you can host and enjoy your stay without problems.
                                                Book now your trip travelia.com.</p>
                                            <br>
                                            <a href="#" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Row  -->
                            </div>
                            <!-- End Container  -->
                        </li>
                        <!-- End Item Slide Features  -->
                    </ul>
                </div>
                <!-- End Content Parallax-->
            </div> --}}
            <!-- End slide features - Parallax Section -->

            <!-- End content info - Services Items-->

            <!-- End content info - Services Items -->

            <!-- End content info - Features-->
            <div class="content_info">
                <div class="skin_base color-white">
                    <!-- Title -->
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2><span>¿</span>Why <span>Book</span> in {{ $info->name??'-' }}<span>?</span></h2>
                                <i class="fa fa-wifi"></i>
                                <hr class="tall">
                            </div>
                        </div>
                    </div>
                    <!-- End Title-->

                    <!-- content-->
                    <div class="container">
                        <div class="row padding-bottom">

                            <div class="col-md-12 text-center">
                                <div class="item-feature text-center">
                                    <div class="head-feature">
                                        {{-- <span>over</span> --}}
                                        {{-- <br> --}}
                                        <div class="title-feature">
                                            <i class="fa fa-arrow-circle-right left-icon"></i>
                                            <i class="fa fa-heart right-icon"></i>
                                            {!! $info->short_desc??'short_desc bookin !' !!}
                                        </div>
                                        <br>
                                        {{-- <span>Reviews</span> --}}
                                    </div>

                                    <div class="info-feature">
                                        <p></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- End content-->
                </div>
            </div>
            <!-- End content info - Features-->
        </section>
        <!-- End Content Central -->

        <!-- footer-->
        <footer id="footer" class="footer-v2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- Social Us-->
                            <div class="col-md-3">
                                <h3>FOLLOW US</h3>
                                <ul class="social">
                                    <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                                    <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                                    <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                                </ul>
                            </div>
                            <!-- End Social Us-->

                            <!-- Recent links-->
                            <div class="col-md-5">
                                <h3>TRAVEL SPECIALISTS </h3>
                                <ul>
                                    <li><i class="fa fa-check"></i> <a href="#">Golf Vacations</a></li>
                                    <li><i class="fa fa-check"></i> <a href="#">Disney Parks Vacations</a></li>
                                    <li><i class="fa fa-check"></i> <a href="#">Vacations As Advertised</a></li>
                                </ul>
                            </div>
                            <!-- End Recent links-->

                            <!-- Contact Us-->
                            <div class="col-md-4">
                                <h3>CONTACT US</h3>
                                <ul class="contact_footer">
                                    <li>
                                        <i class="fa fa-envelope"></i> <a href="#">example@example.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-headphones"></i> <a href="#">55-5698-4589</a>
                                    </li>
                                    <li class="location">
                                        <i class="fa fa-home"></i> <a href="#"> Av new stret - New York</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Contact Us-->
                        </div>

                        <div class="divisor"></div>


                    </div>

                    <!-- Img Footer-->
                    {{-- <div class="col-md-5">
                        <div class="img-footer">
                            <img src="{{asset('frontend')}}/img/service.png" alt="" class="img-responsive">
                        </div>
                    </div> --}}
                    <!-- End Img Footer-->
                </div>
            </div>

            <!-- footer Down-->
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <p>&copy; 2015 Travelia . All Rights Reserved. 2010 - 2015</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- footer Down-->
        </footer>
        <!-- End footer-->
    </div>
    <!-- End layout-->

    <!-- ======================= JQuery libs =========================== -->
    <!-- jQuery local-->
    <script src="{{asset('frontend')}}/js/jquery.js"></script>
    <script src="{{asset('frontend')}}/js/jquery-ui.1.10.4.min.js"></script>
    <!--Nav-->
    <script src="{{asset('frontend')}}/js/nav/jquery.sticky.js" type="text/javascript"></script>
    <!--Totop-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/totop/jquery.ui.totop.js"></script>
    <!--Accorodion-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/accordion/accordion.js"></script>
    <!--Slide Revolution-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type='text/javascript' src='{{asset('frontend')}}/js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <!-- Maps -->
    <script src="{{asset('frontend')}}/js/maps/gmap3.js"></script>
    <!--Ligbox-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/fancybox/jquery.fancybox.js"></script>
    <!-- carousel.js-->
    <script src="{{asset('frontend')}}/js/carousel/carousel.js"></script>
    <!-- Filter -->
    <script src="{{asset('frontend')}}/js/filters/jquery.isotope.js" type="text/javascript"></script>
    <!-- Twitter Feed-->
    <script src="{{asset('frontend')}}/js/twitter/jquery.tweet.js"></script>
    <!-- flickr Feed-->
    <script src="{{asset('frontend')}}/js/flickr/jflickrfeed.min.js"></script>
    <!--Theme Options-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/theme-options/theme-options.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/js/theme-options/jquery.cookies.js"></script>
    <!-- Bootstrap.js-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap/bootstrap-slider.js"></script>
    <!--MAIN FUNCTIONS-->
    <script type="text/javascript" src="{{asset('frontend')}}/js/main.js"></script>
    <!-- ======================= End JQuery libs =========================== -->

    <!--Slider Function-->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 9000,
                startwidth: 1170,
                startheight: 760,
                minHeight: 450,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        }); //ready
    </script>
    <!--End Slider Function-->
</body>

</html>
