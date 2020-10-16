@extends('layouts.app')

@section('content')


@php
$all_skills_info=DB::table('skills')
            ->count('skills_id');

@endphp
@php
$all_qualification_info=DB::table('qualification')
            ->count('qualification_id');

@endphp
@php
$all_assessor_info=DB::table('assessor')
            ->count('assessor_id');

@endphp
@php
$all_assessment_info=DB::table('assessment')
            ->count('assessment_id');

@endphp

<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">

                                            <!-- statustic-card start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Skills</p>
                                                                <h4 class="m-b-0">{{$all_skills_info}}</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Qualifications</p>
                                                                <h4 class="m-b-0">{{$all_qualification_info}}</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Assessor</p>
                                                                <h4 class="m-b-0">{{$all_assessor_info}}</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-user f-50 text-c-pink"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-blue text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Assessment</p>
                                                                <h4 class="m-b-0">{{$all_assessment_info}}</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather  icon-credit-card f-50 text-c-blue"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic-card start -->

                                                 <!--Section our some work-->
                                                 <section id="portfolio" class="section-portfolio bg-white-section background-image">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="container">
                                                                    <div class="col-xl-12">
                                                                        <div class="heading-title center">
                                                                    
                                                                        <h2><span>ACCOMPLISHMENT REPORT</span></h2>
                                                                        <h5>AO 2016 - 2019</h5>
                                                                            <div id="tesda_main" style="width: 230%; height: 300px;"></div>
                                                                        </div>
                                                                        <div class="controls-portfolio center">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </section>
                                         
                                          
                                            
                                          

                                            
                                            
                                            <!-- latest activity end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
@endsection
