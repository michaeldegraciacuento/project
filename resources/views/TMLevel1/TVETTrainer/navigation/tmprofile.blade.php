@extends('layouts.tvttrainer')
@section('content')

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Profile</h3>
                </div>
            </div>
        </div>
    </div>
</div>
         
<div class="about_mission">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-xl-12 col-md-6">
                    <div class="about_text">
                        <h4>PROFILE</h4>
                        <p>Regional Training Center - Iligan is ideally and well situated within the Cagayan-Iligan Corridor. 
                            It is 242 meters above sea level and has a sloping terrain from the south downward. 
                            It is very accessible to all types of vehicles since it is only ten kilometers from the city proper 
                            or about 30 minutes ride and lies along the national highway going to Marawi City.
                            There is available sufficient electricity since it taps its power supply directly from the National Power Corporation with lines
                            maintained by the National Grid Corporation of the Philippines.</p>
                            <p>
                                Regional Training Center - Iligan is a clean and green training institution and is well managed by competent and dedicated personnel. 
                                The center provides quality services to satisfy specific needs of its client coming from Lanao del Norte, Iligan City and nearby municipalities of Misamis Oriental.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- accordion  -->
 <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                                <div class="faq_ask">
                                    <h3>Personal Data</h3>
                                        <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Personal Info
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                        <div class="card-body"><p><span>Name: </span>Mr. Eliquim G. Jesto</p>
                                                            <p><span>Resedential Address: </span>Zone 12 - Maria Cristina Iligan City, Lanao Del Norte</p>
                                                            <p><span>Contact No.: </span>+63 9155532814</p>
                                                            <p><span>Email Address: </span>egjesto@tesda.gov.ph</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    Work
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                            <p><span>Present: </span>Computer Trainer/Instructor in TESDA - RTC Iligan City</p>
                                                            <p><span>Past: </span>Supervisor, Lead Computer Technician in Vente Internet Cafe Iligan City</p>
                                                            <p style="text-indent: 35px; text-align: justify;
                                                                    "> Computer Technician in CH@ ME Internet Center - Iligan City</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Education
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                        <p><span>Elementary: </span>Baroy Central Elementary School</p>
                                                        <p><span>Secondary: </span>Lanao Norte National Comprehensive High School</p>
                                                        <p><span>College: </span>Iligan Medical Center College </p>
                                                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course: BS IN COMPUTER SCIENCE </p>
                                                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;St. Peter's College </p>
                                                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course: PROFESSIONAL EDUCATION (2ND Course)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingZero">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                                                National Certificate
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseZero" class="collapse" aria-labelledby="collapseZero" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                        <style>
                                                                table, th, td {
                                                                border: 1px solid black;
                                                                border-collapse: collapse;
                                                                }
                                                                th, td {
                                                                padding: 5px;
                                                                }
                                                                th {
                                                                text-align: left;
                                                                }
                                                            </style>
                                                            <h1></h1>
                                                            <table style="width:100%">
                                                                <tr>
                                                                <th>Name of Qualification</th>
                                                                <th>NC Level</th> 
                                                                <th>NC #</th> 
                                                          
                                                                <th>Date Acquired</th> 
                                                                <th>Date Expired</th> 
                                                                </tr>
                                                                <tr>
                                                                    <td>Computer System Servicing</td>
                                                                    <td>II</td>
                                                                    <td>14040302023918</td>
                                                                    <td>December 5, 2014</td>
                                                                    <td>December 5, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Electronics Products Assembly Servicing</td>
                                                                    <td>II</td>
                                                                    <td>16103502011015</td>
                                                                    <td>November 19, 2016</td>
                                                                    <td>November 18, 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Visual Graphics Design</td>
                                                                    <td>III</td>
                                                                    <td>15100503008796</td>
                                                                    <td>November 11, 2015</td>
                                                                    <td>November 10, 2020</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFour">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                National TVET Trainers Certificate 
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                        <style>
                                                                table, th, td {
                                                                border: 1px solid black;
                                                                border-collapse: collapse;
                                                                }
                                                                th, td {
                                                                padding: 5px;
                                                                }
                                                                th {
                                                                text-align: left;
                                                                }
                                                            </style>
                                                            <h1></h1>
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <th>Name of Qualification</th>
                                                                    <th>NTTC Level</th> 
                                                                    <th>NTTC #</th> 
                                                                    <th>Date Acquired</th> 
                                                                    <th>Date Expired</th> 
                                                                </tr>
                                                                <tr>
                                                                    <td>Computer System Servicing</td>
                                                                    <td>I</td>
                                                                    <td>15131005120044</td>
                                                                    <td>May 4, 2015</td>
                                                                    <td>December 5, 2019</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Electronics Products Assembly Servicing</td>
                                                                    <td>I</td>
                                                                    <td>171310351200045</td>
                                                                    <td>January 5, 2017</td>
                                                                    <td>November 18, 2021</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Visual Graphics Design</td>
                                                                    <td>I</td>
                                                                    <td>171310351300044</td>
                                                                    <td>January 5, 2017</td>
                                                                    <td>November 10, 2020</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-xl-6 col-lg-6">
                            <div class="accordion_thumb">
                                <img src="{{asset('demos/teamcmdb/kimboy.png')}}" alt="">
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- accordion  -->




         <!-- accordion  -->
 <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                                <div class="faq_ask">
                                    <h3>Personal Data</h3>
                                        <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingSeven">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                Personal Info
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion" style="">
                                                        <div class="card-body"><p><span>Name: </span>Mr. Ralf John Dag-Uman Pacapat</p>
                                                            <p><span>Resedential Address: </span>Zone 2 - Fuentes Maria Cristina Iligan City, Lanao Del Norte</p>
                                                            <p><span>Contact No.: </span>+63 9551534085</p>
                                                            <p><span>Email Address: </span>ralppacapat@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingEight">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                    Work
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                            <p><span>Present: </span>Technical Support Staff/Trainer in TESDA - RTC Iligan City</p>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingNine">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                Education
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                        <p><span>Elementary: </span>Napocor Elementary School</p>
                                                        <p><span>Secondary: </span>Maria Cristina National High School</p>
                                                        <p><span>Vocational: </span>TESDA RTC ILIGAN</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Systems Servicing NCII</span>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visual Graphic Design NCII</span>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trainers Methodology Level 1</span>
                                                        <p><span>College: </span>Picardal Institute of Science and Technology</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BS Information Technology</span>
                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTen">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                            National Certificate
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                        <style>
                                                                table, th, td {
                                                                border: 1px solid black;
                                                                border-collapse: collapse;
                                                                }
                                                                th, td {
                                                                padding: 5px;
                                                                }
                                                                th {
                                                                text-align: left;
                                                                }
                                                            </style>
                                                            <h1></h1>
                                                            <table style="width:100%">
                                                                <tr>
                                                                <th>Name of Qualification</th>
                                                                <th>NC Level</th> 
                                                                <th>NC #</th> 
                                                                <th>Date Acquired</th> 
                                                                <th>Date Expired</th> 
                                                                </tr>
                                                                <tr>
                                                                <td>Computer System Servicing</td>
                                                                <td>II</td>
                                                                <td>17103502006581</td>
                                                                <td>August 6, 2017</td>
                                                                <td>August 3, 2022</td>
                                                                </tr>
                                                               
                                                            
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingWa">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseWa" aria-expanded="false" aria-controls="collapseWa">
                                                            National TVET Trainers Certificate 
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseWa" class="collapse" aria-labelledby="headingWa" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                        <style>
                                                                table, th, td {
                                                                border: 1px solid black;
                                                                border-collapse: collapse;
                                                                }
                                                                th, td {
                                                                padding: 5px;
                                                                }
                                                                th {
                                                                text-align: left;
                                                                }
                                                            </style>
                                                            <h1></h1>
                                                            <table style="width:100%">
                                                                <tr>
                                                                <th>Name of Qualification</th>
                                                                <th>NTTC Level</th> 
                                                                <th>NTTC #</th> 
                                                                <th>Date Acquired</th> 
                                                                <th>Date Expired</th> 
                                                                </tr>
                                                                <tr>
                                                                <td>Computer System Servicing</td>
                                                                <td>I</td>
                                                                <td>19181035120314</td>
                                                                <td>May 7, 2019</td>
                                                                <td>August 5. 2022  </td>
                                                                </tr>
                                                               
                                                            
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-xl-6 col-lg-6">
                            <div class="accordion_thumb">
                                <img src="{{asset('demos/teamcmdb/RALF.jpg')}}" width="300" height="550" alt="">
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- accordion  -->




        
@endsection