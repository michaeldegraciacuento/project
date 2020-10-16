
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Computer System Servicing - TESDA RTC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="icon" href="{{asset('asset/img/core-img/tesdalogofinal.ico')}}">


    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('demos/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('demos/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ URL::to('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')}}">

    <link rel="stylesheet" href="{{asset('demos/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

  
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                               <a href="{{URL::to('/trainee')}}"><img src="{{asset('demos/teamcmdb/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                            <ul>
                                                <li><a > <i class="fa fa-envelope"></i> css@rtciligan.com</a></li>
                                                <li><a > <i class="fa fa-phone"></i>[63] 223-6541 or 6542</a></li>
                                            </ul>
                                            <ul>
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                            <li class="user-profile header-notification">
                                            <div class="dropdown-primary dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                
                                       
                                                    <span style=color:#FFFFFF;>{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}</span>
                                                    <i class="feather icon-chevron-down"></i>
                                                </div>
                                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                
                                                    <li>
                                                        <a  href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                            <i class="feather icon-log-out"></i>   {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            @endguest
                                            </ul>
                                        </div>
                                       
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-8 ">
                                <div class="main-menu   d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ URL::to('/trainee') }}">Home <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ URL::to('/14slidingpicture') }}">CSS Gallery</a></li>
                                                    <li><a href="{{ URL::to('/1accomplishment') }}">Accomplishment</a></li>
                                                </ul>
                                            </li>
                                           
                                            <li><a >About CSS <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                  <li><a href="{{ URL::to('/11profile') }}">Profile</a></li>
                                                  <li><a href="{{ URL::to('/16vmo') }}">Vision, Mission & Objectives</a></li>
                                                  <li><a href="{{ URL::to('/15stories') }}">Success Stories</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Training Requirements<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ URL::to('/13schedules') }}">Training Schedule</a></li>
                                                    <li><a href="{{ URL::to('/4attSheets') }}">Attendance Sheets</a></li>
                                                    <li><a href="{{ URL::to('/3actMatrix') }}">Activity Matrix</a></li>
                                                    <li><a href="{{ URL::to('/2achieveSheets') }}">Achievement Sheets</a></li>
                                                    <li><a href="{{ URL::to('/12progSheets') }}">Progress Sheets</a></li>
                                                    <li><a href="{{ URL::to('/9isag') }}">Institutional Self Assessment Guide</a></li>
                                                    <li><a href="{{ URL::to('/8irs') }}">Institutional Rating Sheets</a></li>
                                                    <li><a href="{{ URL::to('/7iar') }}">Institutional Assessment Result</a></li>
                                                    <li><a href="{{ URL::to('/6houseSched') }}">Housekeeping Schedule</a></li>
                                                    <li><a href="{{ URL::to('/5ems') }}">Equipment Maintenance Schedule</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ URL::to('/10partners') }}">Industrial Partners </a>
                                           
                                            <li><a >Others<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                  <li><a href="{{ URL::to('/cblm') }}">CBLM</a></li>
                                                  <li><a href="{{ URL::to('/assessmentlink') }}">Institutional Assessment</a></li>
                                                  <li><a href="{{ URL::to('/assessmentresult') }}">Assessment Result</a></li>
                                                  <li><a href="{{ URL::to('/preresult') }}">Pre Test Result</a></li>
                                                  <li><a href="{{ URL::to('/postresult') }}">Post Test Result</a></li>
                                     
                                     
                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                       
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="slider_text text-center justify-content-center">
                                    <h3>Computer System Servicing</h3>
                                    <p>Theres no place like 192.0.0.1</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- slider_area_end -->

    
     <!--Section our some work-->
     <section id="portfolio" class="section-portfolio bg-white-section background-image">
      <div class="container-fluid">
        <div class="row">
            <div class="container">
                    <div class="col-xl-12">
                        <div class="heading-title center">
                        <br><br> <br><br>
                        <h2><span>Accomplisment Report for Computer System Servicing</span></h2>
                        <h5>AO 2015 - 2019</h5>
                            <div id="css_landing" style="width: 100%; height: 300px;"></div>
                        </div>
                        <div class="controls-portfolio center">
                    </div>
            </div>
        </div>
        
      </div>
    </section>


<br><br>
      <!-- testimonial_area  -->
      <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>“ To err is human, <br> 
                                                but to really foul things up you need a computer.  ”</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('images/Ehrlich.jpg') }}" width="50" height="50" alt="">
                                            </div>
                                            <h3>Paul R. Ehrlich</h3>
                                            <span>American biologist</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>“ Everyone should learn how to code,<br> 
                                                 it teaches you how to think. ”</p>”
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('images/steve.jpg') }}" width="50" height="50" alt="">
                                            </div>
                                            <h3>Steve Jobs</h3>
                                            <span>American business magnate</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>“ If debugging is the process of removing software bugs, <br> 
                                            then programming must be the process of putting them in. ”</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('images/edsger.jpg') }}" width="50" height="50"  alt="">
                                            </div>
                                            <h3>Edsger Dijkstra</h3>
                                            <span>Dutch essayist</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>“ Computer Science is not really about computers and it's not about computers in the same sense that physics is 
                                            not really about particle accelerators, <br> 
                                            and biology is not about miscroscopes and Petri dishes.. and geometry isn't really about using surveying instruments. ”</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('images/hal.jpg') }}" width="50" height="50"  alt="">
                                            </div>
                                            <h3>Hal Abelson</h3>
                                            <span> Professor of electrical engineering and computer science</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>“ Computer Science is a science of abstraction-creating the right model for a problem and devising the appropriate mechanizable techniques to solve it. ”</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('images/aho.jpg') }}" width="50" height="50"  alt="">
                                            </div>
                                            <h3>Alfred Aho</h3>
                                            <span>Computer scientist</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->



    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="{{URL::to('/csspage')}}">
                                    <img src="{{asset('set/files/assets/Tesda.png')}}" alt="">
                                </a>
                            </div>
                            <p>
                                    <a >css@rtciligan.com</a> <br>
                                    [63] 223-6541 or 6542 <br>
                                    Maria Cristina, Iligan City, Philippines
                            </p>
                           

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                   TESDA OTHER LINK
                            </h3>
                            <ul>
                                <li><a href="{{URL::to('http://tesda.gov.ph/')}}">Administrator Page</a></li>
                                <li><a href="{{URL::to('http://tesda.gov.ph/Directory/TTI')}}">TTI Directory</a></li>
                                <li><a href="{{URL::to('http://tesda.gov.ph/AboutL/TESDA/149')}}">Procurement</a></li>
                                <li><a href="{{URL::to('http://tesda.gov.ph/AssessmentCenters/')}}">Assessment Center</a></li>
                                <li><a href="{{URL::to('https://www.e-tesda.gov.ph/')}}">Tesda Online Program</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="{{URL::to('/profile')}}">About</a></li>
                                <li><a href="{{URL::to('/schedules')}}">Calendar</a></li>
                                <li><a href="{{URL::to('/partners')}}"> Industrial Partners</a></li>
                                <li><a href="{{URL::to('/accomplishment')}}">Accomplishment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Contact Us
                                    </h3>
                                    <div class="single-contact d-flex mb-30">
                                        <i ><img src="{{asset('images/map.png')}}" width="25" height="25" ></i>
                                        <p>&nbsp;&nbsp;Maria Cristina, Iligan City, Philippines</p>
                                    </div>
                                    <div class="single-contact d-flex mb-30">
                                        <i><img src="{{asset('images/call.png')}}" width="25" height="25" ></i>
                                        <p>&nbsp;&nbsp;Tel: [63] 223-6541 or 6542</p>
                                    </div>
                                    <div class="single-contact d-flex">
                                         <i><img src="{{asset('images/email.png')}}" width="25" height="25" ></i>
                                        <p>&nbsp;&nbsp;css@rtciligan.com</p>
                                    </div>
                                </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    
    <script src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{ URL::to('https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js')}}"></script>

    <script src=" {{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js')}}"> </script>
    <!-- JS here -->
    <script src="{{asset('demos/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="{{asset('demos/js/popper.min.js')}}"></script>
    <script src="{{asset('demos/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('demos/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('demos/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('demos/js/ajax-form.js')}}"></script>
    <script src="{{asset('demos/js/waypoints.min.js')}}"></script>
    <script src="{{asset('demos/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('demos/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('demos/js/scrollIt.js')}}"></script>
    <script src="{{asset('demos/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('demos/js/wow.min.js')}}"></script>
    <script src="{{asset('demos/js/nice-select.min.js')}}"></script>
    <script src="{{asset('demos/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('demos/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('demos/js/plugins.js')}}"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{asset('demos/js/slick.min.js')}}"></script>
   

    
    <!--contact js-->
    <script src="{{asset('demos/js/contact.js')}}"></script>
    <script src="{{asset('demos/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('demos/js/jquery.form.js')}}"></script>
    <script src="{{asset('demos/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('demos/js/mail-script.js')}}"></script>


    <!-- google chart -->
    <script type="text/javascript" src="{{ URL::to('https://www.gstatic.com/charts/loader.js')}}"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('set\files\assets\pages\chart\google\js\custom-google-chart.js')}}"></script>

    <script src="{{asset('demos/js/main.js')}}"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>
