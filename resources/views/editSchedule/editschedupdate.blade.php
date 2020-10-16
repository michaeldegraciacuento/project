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
                                                <h5>Update Assessment Schedule</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/editschedupdates/'.$sched_desc_edit->schedule_id) }}">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date:</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-normal" name="schedule_date" id="name" required="" value="{{ $sched_desc_edit->schedule_date }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Qualification:</label>
                                                <div class="col-sm-10">
                                                    <select name="qualification_id" class="form-control" required="">
                                                        <option  value="" selected="" >Select One Qualification</option>
                                                        @foreach($all_quali_info as $v_trainee)
                                                            <option value="{{$v_trainee->qualification_id}}">{{$v_trainee->qualification_id }}. {{$v_trainee->qualification_title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No. of Candidates:</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control form-control-capitalize"name="schedule_no_of_candidates" required="" id="name" value="{{ $sched_desc_edit->schedule_no_of_candidates }}"  placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Assessor:</label>
                                                <div class="col-sm-10">
                                                    <select name="assessor_id" class="form-control" required="">
                                                        <option  value="{{ $sched_desc_edit->assessor_id }}" selected="" >Please Choose .. </option>
                                                    
                                                            @foreach($all_assessor_info as $v_assessor)
                                                                <option value="{{$v_assessor->assessor_id}}">{{$v_assessor->assessor_id }}. {{$v_assessor->assessor_name }} {{$v_assessor->assessor_middlename }} {{$v_assessor->assessor_lastname }} - {{$v_assessor->qualification_title }}</option>
                                                            @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                             <label class="col-sm-2"></label>
                                             <div class="col-sm-10">
                                            <button class="button3">Confirm</button> </a>
                                            <a href="{{ URL::to('/editschedule') }}"> Cancel </a>
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
