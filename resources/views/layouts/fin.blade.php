
<!DOCTYPE html>
<html lang="en">
<style>
.button7 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button3:hover {
  background-color: green;
}
.button8 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button3:hover {
  background-color: green;
}
</style>
<head>

    <!-- Google font-->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\themify-icons\themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\icofont\css\icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\feather\css\feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\css\jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('set\files\assets\scss\partials\menu\_pcmenu.htm')}}">
   
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\icofont\css\icofont.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\themify-icons\themify-icons.css')}}">
    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\icon\material-design\css\material-design-iconic-font.min.css')}}">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\pages\data-table\css\buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">


    <!-- lightbox Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\lightbox2\css\lightbox.min.css')}}">


  
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css')}}">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('set\files\bower_components\datedropper\css\datedropper.min.css')}}">
    
   
</head>
<style>
.button {
  background-color: #FFA500;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button:hover {
  background-color: darkorange;
}
</style>

<style>
.button3 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button3:hover {
  background-color: green;
}
</style>

<style>
.button1 {
  background-color: #DC143C;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button1:hover {
  background-color: red;
}
</style>
<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{URL::to('/fin')}}">
                        <img class="img-fluid" src="{{asset('set/files/assets/Tesda.png')}}" alt="Theme-Logo">
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                   
                    <ul class="nav-right">
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
                                   
                                    <span>{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}</span>
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
                            </div>
                        </li>
                    </ul>
                </div>
               
            </div>
        </nav>

        
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper"></div>
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item">
                        
                        
                        <li class="">
                            <a href="{{URL::to('/linkupdate')}}">
                                <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                                <span class="pcoded-mtext">Transparency Update</span>
                            </a>
                        </li>
                        
                       
                    </div>
                </nav>
                @yield('content')
    </div>
</div>






<!-- Required Jquery -->
<script type="text/javascript "src="{{asset('set\files\bower_components\jquery\js\jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('set\files\bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('set\files\bower_components\popper.js\js\popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('set\files\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('set\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>

<script src="{{asset('set\files\assets\js\pcoded.min.js')}}"></script>
<script src="{{asset('set\files\assets\js\vartical-layout.min.js')}}"></script>
<script src="{{asset('set\files\assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('set\files\assets\js\script.js')}}"></script>
    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js')}}"></script>



    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="{{asset('set\files\assets\pages\advance-elements\moment-with-locales.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\bootstrap-daterangepicker\js\daterangepicker.js')}}"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="{{asset('set\files\bower_components\datedropper\js\datedropper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\assets\pages\advance-elements\custom-picker.js')}}"></script>

      <!-- i18next.min.js -->
      <script type="text/javascript" src="{{asset('set\files\bower_components\i18next\js\i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('set\files\bower_components\jquery-i18next\js\jquery-i18next.min.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('set\files\assets\pages\data-table\js\data-table-custom.js')}}"></script>


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

    
    <script type="text/javascript" src="{{asset('set\files\assets\pages\icon-modal.js')}}"></script>

      <!-- Custom js -->
      <script src="{{asset('set\files\assets\pages\data-table\extensions\buttons\js\extension-btns-custom.js')}}"></script>
    <!-- data-table js -->

    <script src="{{asset('set\files\assets\pages\data-table\extensions\buttons\js\dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\extensions\buttons\js\buttons.flash.min.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\extensions\buttons\js\jszip.min.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\extensions\buttons\js\vfs_fonts.js')}}"></script>
    <script src="{{asset('set\files\assets\pages\data-table\extensions\buttons\js\buttons.colVis.min.js')}}"></script>





       <!-- google chart -->
       <script type="text/javascript" src="{{ URL::to('https://www.gstatic.com/charts/loader.js')}}"></script>

        <!-- Custom js -->
        <script type="text/javascript" src="{{asset('set\files\assets\pages\chart\google\js\custom-google-chart.js')}}"></script>


<script>
$(document).on("click", "#delete2", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Are you sure you want to delete it?", function(confirmed){
        if(confirmed)
        {
            window.location.href=link;
        };
    });
    }); 
</script>

 <!-- -->
  <!-- -->
  </body>
</html>
