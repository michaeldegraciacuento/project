<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>RTC-Iligan</title>
   
    <!-- Favicon -->
    <link rel="icon" href="{{asset('asset/img/core-img/tesdalogofinal.ico')}}">
        <!-- themify-icons line icon -->
   

    <!-- Google font--><link href="{{ URL::to('https://fonts.googleapis.com/css?family=Open+Sans:400,600,800') }}" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\themify-icons\themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\icofont\css\icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\feather\css\feather.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\pages\data-table\css\buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\css\jquery.mCustomScrollbar.css')}}">


    


    <!-- lightbox Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\lightbox2\css\lightbox.min.css')}}">


  
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css')}}">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\datedropper\css\datedropper.min.css')}}">


    

<!-- Core Stylesheet -->
<link rel="stylesheet" href="{{asset('asset/style.css')}}">

</head>

<body>
   

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="{{URL::to('/')}}"><img src="{{asset('asset/img/core-img/logo.png')}}" alt=""></a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-on">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                           <!-- Nav Start -->
                          
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li><a>About Us</a>            
									   <ul class="dropdown">
                                            <a href="{{URL::to('mission&vision')}}">Mission & Vision</a>
											<a href="{{URL::to('locationmap')}}">Location Map</a>
                                            <a href="{{URL::to('/structure')}}">Organiztional Structure</a>
                                        </ul>
                                    </li>
                                    <li><a>Programs & Services</a>
                                     <ul class="dropdown">
                                            <li><a href="{{URL::to('TVETprograms')}}">TVET Programs</a></li>
                                            <li><a href="{{URL::to('acahome')}}">Competency Assessment & Certification </a></li>									
                                        </ul>
                                    </li>
                                    <li><a>Transparency</a>
									 <ul class="dropdown">
                                            <li><a href="{{URL::to('transparencyseal')}}">Transparency Seal</a></li>
											<li><a href="{{URL::to('citizencharter')}}">Citizen's Charter</a></li>
                                            <li><a href="{{URL::to('philgepsposting')}}">PhilGeps Posting</a></li>
                                        </ul>
									</li>
									<li><a>Others</a>
									 <ul class="dropdown">
                                            <li><a href="{{URL::to('sstories')}}">Success Stories</a></li>
											<li><a href="{{URL::to('alumni')}}">RTC Alumni</a></li>
											<li><a href="{{URL::to('gallery')}}">Gallery</a></li>
                                        </ul>
									</li>									
                                   
                                    <li><a>Course Link</a>
									 <ul class="dropdown">
                                            <li><a href="{{URL::to('csspage')}}">CSS</a></li>
                                            <li><a href="{{URL::to('TMLevel1Homepage')}}">TMLevel1</a></li>
                                        </ul>
									</li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a ><i class="icon-telephone-2"></i>[63] 223-6541</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

        @yield('content')


    <!-- ##### SUPPORT End ##### -->
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-2 col-lg-2">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                               
                               <a href="{{URL::to('/')}}" >
							     <img src="{{asset('asset/img/core-img/logo2.png')}}" alt=""></a>
                            </div>
							 <a href="{{URL::to('/transparencyseal')}}" class="gallery-img" >
							     <img src="{{asset('asset/img/bg-img/transparency.png')}}" alt=""></a>
                            
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-50">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="{{URL::to('home')}}">Home</a></li>
                                    <li><a href="{{URL::to('mission&vision')}}">About Us</a></li>
                                    <li><a href="{{URL::to('TVETprograms')}}">Program & Services</a></li>
			
									
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>TESDA Other Link</h6>
                            </div>
							<nav>
							<ul class="useful-links">
                                    <li><a href="{{URL::to('http://tesda.gov.ph/')}}">Quick Survey</a></li>
									<li><a href="{{URL::to('http://tesda.gov.ph/Directory/TTI')}}">TTI Directory</a></li>
                                    <li><a href="{{URL::to('http://tesda.gov.ph/AboutL/TESDA/149')}}">Procurement</a></li>
                                    <li><a href="{{URL::to('http://tesda.gov.ph/AssessmentCenters/')}}">Assessment Center</a></li>
                                    <li><a href="{{URL::to('https://www.e-tesda.gov.ph/')}}">Tesda Online Program(Free Training)</a></li>
							</ul>
							</nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact Us</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Maria Cristina, Iligan City, Philippines</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Tel: [63] 223-6541 or 6542</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>rtciligan@tesda.gov.ph</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('asset/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('asset/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('asset/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('asset/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('asset/js/active.js')}}"></script>


    <!-- ADMINTY ASSET -->




    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="{{asset('set\files\assets\pages\advance-elements\moment-with-locales.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\bootstrap-daterangepicker\js\daterangepicker.js')}}"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\datedropper\js\datedropper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\assets\pages\advance-elements\custom-picker.js')}}"></script>





    <script type="text/javascript" src="{{asset('set\files\bower_components\jquery\js\jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\popper.js\js\popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\modernizr\js\modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\modernizr\js\css-scrollbars.js')}}"></script>

    <!-- data-table js -->
    <script src="{{asset('set\files\bower_components\datatables.net\js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('set\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\js\jszip.min.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\js\pdfmake.min.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\js\vfs_fonts.js')}}"></script>
    <script src="{{asset('set\files\bower_components\datatables.net-buttons\js\buttons.print.min.js')}}"></script>
    <script src="{{asset('set\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js')}}"></script>
    <script src="{{asset('set\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('set\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('set\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\i18next\js\i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\jquery-i18next\js\jquery-i18next.min.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('set\files\assets\pages\data-table\js\data-table-custom.js')}}"></script>
  
    <script src="{{asset('set\files\assets\js\pcoded.min.js')}}"></script>
    <script src="{{asset('set\files\assets\js\vartical-layout.min.js')}}"></script>
    <script src="{{asset('set\files\assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\assets\js\script.js')}}"></script>


  


    <script type="text/javascript" src="{{asset('set\files\bower_components\lightbox2\js\lightbox.min.js')}}"></script>

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })

    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="{{ URL::to('https://www.googletagmanager.com/gtag/js?id=UA-23581568-13')}}"></script>




       <!-- google chart -->
       <script type="text/javascript" src="{{ URL::to('https://www.gstatic.com/charts/loader.js')}}"></script>

        <!-- Custom js -->
        <script type="text/javascript" src="{{asset('set\files\assets\pages\chart\google\js\custom-google-chart.js')}}"></script>


</body>

</html>