@extends('layoutEvery')
@section('content')

<!-- ##### FRONT CAROUSEL FOR PROGRAMS OFFERED START ###### -->
<div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/carousel1.jpg);">
	<div class="container">	
		<div class="hero-slides owl-carousel">

<!-- ##### WOMEN CENTER ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/women-center.jpg')}}" alt="First Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>
			
<!-- ##### TESDA HOTLINE ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/hotline.png')}}" alt="First Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>
<!-- ##### TESDA ON THE GO ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/TESDA1.jpg')}}" alt="Second Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>
<!-- ##### WARNING NC FAKE ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/Warning to the Public v5.jpg')}}" alt="Second Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>
<!-- ##### AUTOMOTIVE TECHNOLOGY ###### -->			
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/automotive-technology.jpg')}}" alt="Third Slide" />
						<div class="carousel-caption">
        					

        				</div>
					</div>
				</div>
			</div>

<!-- ##### CONSTRUCTION TECHNOLOGY ###### -->
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/construction-technology.jpg')}}" alt="First Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>	
			
<!-- ##### ELECTICAL TECHNOLOGY START ###### -->			
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/electrical-technology.jpg')}}" alt="Fourth Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>	
<!-- ##### ELECTRONICS TECHNOLOGY START ###### -->			
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/computer-electronics.jpg')}}" alt="Fifth Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>		
<!-- ##### MECHANICAL TECHNOLOGY START ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/mechanical-technology.jpg')}}" alt="Sixth Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>	
<!-- ##### TRAINER'S METHODOLOGY START ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/tm1.jpg')}}" alt="First Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>	
<!-- ##### ICT VGD NC III START ###### -->				
			<div class="row"> 
				<div class="col-0 col-lg-12">
					<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
						<img src="{{asset('asset/img/bg-img/ict-vgd.jpg')}}" alt="First Slide" />
						<div class="carousel-caption">
        			
        				</div>
					</div>
				</div>
			</div>	
	

		</div>
	</div>
</div>
<!-- ##### FRONT CAROUSEL FOR PROGRAMS OFFERED END ###### -->
<!-- ##### UPDATES ##### --> 
<div class="top-features-area wow fadeInUp" data-wow-delay="800ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-contract"></i>
                                <a href="{{URL::to('/reservation')}}"><h5>Online Reservation </h5></a>
                                </div>
                            </div>
                            
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                     <a href="{{URL::to('/requirements')}}"><h5>Enrollment Requirements</h5></a>
                                </div>
                            </div>
							<div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-id-card"></i>
                                     <a href="{{URL::to('/acahome')}}"><h5>Assessment Schedule</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
    <!-- ##### #Question and A Start #### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
               
                <!-- Single Course Area  Center-->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        
                        <div class="course-content">
                            <h4>What is TWSP?</h4>
                            <p><strong>Training for Work Scholarship Program</strong></p>
                            <p>or TWSP, is a TESDA-initiative that is geared towards “filling up the skills gap and job requirements of priority industries and sectors with high employment demand (i.e. IT, semiconductor and electronics, automotive, etc.)—supportive of the government’s thrust of rapid, inclusive and sustained economic growth.”</p>
                        </div>
                    </div>
                </div>
                 <!-- Single Course Area -->
                 <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                       				
						<div class="course-content">
                            
							<h4>What is UAQTEA?</h4>
                            <p><strong>RA 10931:  "Univerasal Access to Quality Tertiary Education Act"</strong></p> 
							<p>An Act promoting Universal Access to Quality Tertiary Education by providing for FREE tuition and other school fees in State Universities and Colleges , Local Universities and Colleges and State-run Technical-Vocational Institutions, Establishing the Tertiary Education Subsidy and Student loan program, strengthening the Unified Student Financial Assistance System for Tertiary Education, and appropriating fund thereof.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area Right-->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        
                        <div class="course-content">
                            <h4>What is STEP?</h4>
                            <p><strong>Special Training for Employment Program</strong></p><p > or STEP, it is a community-based specialty training program that seeks to address the specific needs of the communities and promote employment, particularly, through entrepreneurial, self-employment and service oriented activities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ##### Question and Answer End ##### -->
   
  <!-- ##### RTC Personell Start here ##### -->
	
<div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/rtcpersonnel.jpg);">
	<div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                      <span><h3>RTC-Iligan PERSONNEL</h3></span>
                    </div>
                </div>
            </div>

<!-- ##### MARIO S. LABISIG ##### -->
<div class="hero-slides owl-carousel">
	<div class="row">  	
		<div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>MARIO S. LABISIG </strong></ul>
							<ul>Supervising TESD Specialist/OIC-Center Administrator</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn 
                            academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/msl.jpg')}});"></div>
                    </div>
        </div>
		 <!-- ##### ALEX P. SABELLA ##### -->
		 <div class="col-12 col-lg-6">
			<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>ALEX P. SABELLA</strong></ul>
							<ul>Senior TESD Specialist/UTPRAS/CAC</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/aps.jpg')}});"></div>
            </div>
        </div>
	</div>
		<div class="row">  	
		<div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>VICTORIA E. MIRADOR</strong></ul>
							<ul>Senior TESD Specialist /Administrative Unit Head/HR Focal/GAD/Cashier</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/vem.jpg')}});"></div>
                    </div>
        </div>
		 <!-- ##### GUADALUPE B. TINOY ##### -->
			<div class="col-12 col-lg-6">
				<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>GUADALUPE B. TINOY</strong></ul>
							<ul>Senior TESD Specialist /Jobs Linkaging and Networking Services (JoLiNS) Focal</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/gbt.jpg')}});"></div>
				</div>
            </div>
		</div>
		<div class="row">  	
			<div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>EDGARDO A. OPLE</strong></ul>
							<ul>TESD Specialist II/Training Cum Production</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/eao.jpg')}});"></div>
                    </div>
			</div>
		 <!-- ##### PETER C. AGUSTINO ##### -->
			<div class="col-12 col-lg-6">
				<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>PETER C. AGUSTINO </strong></ul>
							<ul>TESD Specialist II/Designated Supply Officer/PIO/Health & Wellness Focal/TCP Electrical Installation & Maintenance</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/pca.jpg')}});"></div>
				</div>
            </div>
		</div>	
<!-- ##### MARK ANRON V. LAGUIT ##### -->
				<div class="col-12 col-lg-6">
				<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <strong><ul>MARK ANRON V. LAGUIT</strong></ul>
							<ul>Administrative Aide V/Financial Analyst/IQA on Customer Satisfaction</ul>							
                            <div class="course-ratings">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>"Strategic Decisions, Effectiveness, Responsiveness, Value Added Performance, Integrity, Citizen focus, Efficiency"</p>
                            <!-- <a href="#" class="btn academy-btn btn-sm">View Profile</a> -->
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{('asset/img/bg-img/mavl.jpg')}});"></div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
  <!-- ##### END OF LIST OF PERSONNELS ##### -->  
 <!-- ##### UPDATES ##### --> 
<div class="top-features-area wow fadeInUp" data-wow-delay="800ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                <a href="{{URL::to('/news')}}"><h5>WEEKLY ACTIVITY REPORTS! </h5></a>
                                </div>
                            </div>
                            
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                  <!-- try your adds here -->
								  <div class="col-12">
									<marquee><h5>The Galing Mason Project of HOLCIM Philippines in Partnership with TESDA RTC – Iligan in support to Rebuilding Marawi through Community - Driven Shelter and Livelihood Project of UN – Habitat has officially started during the Opening Ceremony held at Bagumbayan Hall, Marawi City Hall last November 4, 2019.</h5></marquee>	
								</div>	
							</div>
							<div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                     <a href="{{URL::to('/alumni')}}"><h5>RTC-Iligan Alumni Association</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
     <!--Section our some work-->
  <section id="portfolio" class="section-portfolio bg-white-section background-image">
      <div class="container-fluid">
        <div class="row">
            <div class="container">
                    <div class="col-xl-12">
                        <div class="heading-title center">
                        <br><br> <br><br>
                        <h2><span>ACCOMPLISHMENT REPORT</span></h2>
                        <h5>AO 2016 - 2019</h5>
                            <div id="tesda_main" style="width: 100%; height: 300px;"></div>
                        </div>
                        <div class="controls-portfolio center">
                    </div>
            </div>
        </div>
        
      </div>
    </section>

    <br><br><br>
@endsection