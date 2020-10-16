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
                                                <h5>Add RTC-Alumni</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/eaddAlumni')}}" enctype="multipart/form-data">
                                              {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">First Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="alumnipeps_firstname" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Middle Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="alumnipeps_middlename" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Last Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="alumnipeps_lastname" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Date Graduated:</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-normal" name="alumnipeps_dategrad" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Alumni Batch:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="alumnipeps_batch" id="name" value="" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Qualification Taken:</label>
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
                                                            <label class="col-sm-2 col-form-label">Image:</label>
                                                            <div class="col-sm-10">
                                                               
                                                                <input type="file" name="alumnipeps_image" onchange="document.getElementById('file_input').value = this.value;">
                                                             
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/alumnipeps') }}"> Cancel </a>
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
                  
                </div>
            </div>
@endsection
