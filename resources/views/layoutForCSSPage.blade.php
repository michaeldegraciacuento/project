<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Computer Science Services - TESDA RTC</title>
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
                              <a href="{{URL::to('/csspage')}}" ><img src="{{asset('demos/teamcmdb/logo.png')}}" alt=""></a>
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
                                              
                                                <li><a href="{{URL::to('/trainee/login')}}">LOGIN TRAINEE</a></li>
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
                            <div class="col-xl-6 col-lg-7 ">
                                <div class="main-menu   d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ URL::to('/csspage') }}">Home <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ URL::to('/slidingpicture') }}">CSS Gallery</a></li>
                                                    <li><a href="{{ URL::to('/accomplishment') }}">Accomplishment Reports</a></li>
                                                </ul>
                                            </li>
                                            <li><a >About CSS <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                  <li><a href="{{ URL::to('/profile') }}">Profile</a></li>
                                                  <li><a href="{{ URL::to('/vmo') }}">Vision, Mission & Objectives</a></li>
                                                  <li><a href="{{ URL::to('/stories') }}">Success Stories</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Training Requirements<i class="ti-angle-down"></i></a>
                                                   <ul class="submenu">
                                                <li><a href="{{ URL::to('/trainingschedule1') }}">Training Schedule</a></li>
                                                    <li><a href="{{ URL::to('/attendancesheets1') }}">Attendance Sheets</a></li>
                                                    <li><a href="{{ URL::to('/activitymatrix1') }}">Activity Matrix</a></li>
                                                    <li><a href="{{ URL::to('/achievementssheets1') }}">Achievement Sheets</a></li>
                                                    <li><a href="{{ URL::to('/progresssheets1') }}">Progress Sheets</a></li>
                                                    <li><a href="{{ URL::to('/isag1') }}">Institutional Self Assessment Guide</a></li>
                                                    <li><a href="{{ URL::to('/irs1') }}">Institutional Rating Sheets</a></li>
                                                    <li><a href="{{ URL::to('/iar1') }}">Institutional Assessment Result</a></li>
                                                    <li><a href="{{ URL::to('/hs1') }}">Housekeeping Schedule</a></li>
                                                    <li><a href="{{ URL::to('/ems1') }}">Equipment Maintenance Schedule</a></li>
                                                </ul>
                                            <li><a href="{{ URL::to('/partners') }}">Industry Partners </a>
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
         
  
    @yield('content')

    <!-- Footer start -->
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
                                <li><a href="{{URL::to('http://tesda.gov.ph/')}}">Quick Suvey</a></li>
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
    <!-- JS here -->
    <script src="{{asset('demos/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('demos/js/vendor/jquery-1.12.4.min.js')}}"></script>
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


    <script src="{{asset('demos/js/main.js')}}"></script>



       <!-- google chart -->
       <script type="text/javascript" src="{{ URL::to('https://www.gstatic.com/charts/loader.js')}}"></script>

        <!-- Custom js -->
        <script type="text/javascript" src="{{asset('set\files\assets\pages\chart\google\js\custom-google-chart.js')}}"></script>

</body>

</html>