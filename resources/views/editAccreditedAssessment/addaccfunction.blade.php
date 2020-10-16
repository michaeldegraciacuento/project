@extends('layouts.app')
@section('content')


@php
	$all_quali_info=DB::table('qualification')
                ->get();

@endphp
<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                               

                                      
                                        <!-- Input Alignment card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Add Accredited Assessment</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/addaccfunctions')}}">
                                              {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Qualification Title:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal"  name="accrequali" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Accredition Number:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal"  name="accrediredassessment_acc_no" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Date of Accredition:</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-normal"name="accrediredassessment_date_of_acc" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Date of Expiration:</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-normal"name="accrediredassessment_date_of_exp" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/editaccass') }}"> Cancel </a>
                                                     </div>
                              
                                                     </div>
                                                   
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Input Alignment card end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
                    <div id="styleSelector">

                    </div>
                </div>
            </div>
@endsection
