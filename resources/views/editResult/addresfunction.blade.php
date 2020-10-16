@extends('layouts.app')
@section('content')

@php
	$all_quali_info=DB::table('qualification')
                ->get();

@endphp

@php
	$all_assessor_info=DB::table('assessor')
                ->join('qualification', 'qualification.qualification_id', 'assessor.qualification_id')
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
                                                <h5>Add Assessment Result</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/addresfunctions')}}">
                                              {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">First Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="trainee_name" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Middle Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="trainee_middlename" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Last Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="trainee_lastname" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Qualification:</label>
                                                            <div class="col-sm-10">
                                                                <select name="qualification_id" class="form-control" required="">
                                                                    <option  value="" selected="" >Select One Value Only</option>
                                                                    @foreach($all_quali_info as $v_trainee)
                                                                         <option value="{{$v_trainee->qualification_id}}">{{$v_trainee->qualification_id }}. {{$v_trainee->qualification_title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">RESULT:</label>
                                                            <div class="col-sm-10">
                                                                <select name="assessment_pof" class="form-control" required="">
                                                                    <option  value="" selected="" >Please Choose .. </option>
                                                                  
                                                                         <option value="Competent">Competent</option>
                                                                         <option value="Not Yet Competent">Not Yet Competent</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Certificate No.:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control " name="assessment_cn"  value="" required="" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Assessor:</label>
                                                            <div class="col-sm-10">
                                                                <select name="assessor_id" class="form-control" required="">
                                                                    <option  value="" selected="" >Please Choose .. </option>
                                                                  
                                                                        @foreach($all_assessor_info as $v_assessor)
                                                                            <option value="{{$v_assessor->assessor_id}}">{{$v_assessor->assessor_id }}. {{$v_assessor->assessor_name }} {{$v_assessor->assessor_middlename }} {{$v_assessor->assessor_lastname }} - {{$v_assessor->qualification_title }}</option>
                                                                        @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Schedule Taken:</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control form-control-normal" name="assessment_sched_taken" id="name" value="" required="" placeholder="">
                                                            </div>
                                                        </div>





                                                    
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/editresult') }}"> Cancel </a>
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
