@extends('layouts.app')
@section('content')
@php
        $qualification_all=DB::table('qualification')
                            ->get();
@endphp

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                            <h3 class="sub-title"><b>General Information</b></h3>
                                <!-- HTML5 Export Buttons table start -->
                                <div class="card">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" value=" {{ucwords(trans($reservation_all->res_lname))}} {{ucwords(trans($reservation_all->res_fname))}} {{ucwords(trans($reservation_all->res_mname))}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Complete Permanent Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ucwords(trans($reservation_all->res_barangay))}} {{ucwords(trans($reservation_all->res_province))}} {{ucwords(trans($reservation_all->res_city))}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email / Facebook Acc.</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_email}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Contact No.</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_contact}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nationality</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ucfirst(strtolower($reservation_all->res_nationality))}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Qualification</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->qualification_title}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                   
                                    <style>
                                    hr { 
                                    display: block;
                                    margin-top: 0.5em;
                                    margin-bottom: 0.5em;
                                    margin-left: auto;
                                    margin-right: auto;
                                    border-style: inset;
                                    border-width: 1px;
                                    } 
                                    </style>
                                    <hr>

                                    <h3 class="sub-title"><b>Personal Information</b></h3>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_gender}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Civil Status</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_civilstat}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Employment Status</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_employstat}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Educational Attainment</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_educational}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Birth Date</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_birthdate}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$reservation_all->res_age}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Birth Place</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ucwords(trans($reservation_all->res_birthcity))}} {{ucwords(trans($reservation_all->res_birthprov))}}"  class="form-control" readonly>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10" >
                                            <a href="{{ URL::to('/resList') }}"><button type="button" style="float: right;" class="btn btn-primary m-b-0">Back</button>
                                        </div>
                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection