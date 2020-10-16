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
                                                <h5>Update Assessment Result</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/updateAssessors/'.$res_desc_edit->assessor_id) }}">
                                             {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">First Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="assessor_name" id="name" value="{{ $res_desc_edit->assessor_name }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Middle Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="assessor_middlename" id="name" value="{{ $res_desc_edit->assessor_middlename }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Last Name:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="assessor_lastname" id="name" value="{{ $res_desc_edit->assessor_lastname }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Gender:</label>
                                                        <div class="col-sm-10">
                                                            <select name="assessor_gender" class="form-control" required="">
                                                                <option  value="" selected="" >Choose Gender</option>
                                                              
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                           
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Age:</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control form-control-normal" name="assessor_age" id="name" value="{{ $res_desc_edit->assessor_age}}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Assessor Date Accquired:</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-normal" name="assessor_date_accquired" id="name" value="{{ $res_desc_edit->assessor_date_accquired }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Assessor Expiration Accredited:</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-normal" name="assessor_expiration_accredited" id="name" value="{{ $res_desc_edit->assessor_expiration_accredited }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Qualification:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="assessor_qualification" id="name" value="{{$res_desc_edit->assessor_qualification}}" required="" placeholder="">
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/editassessor') }}"> Cancel </a>
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
