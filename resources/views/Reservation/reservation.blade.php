@extends('layoutEvery')
@section('content')
@php
        $qualification_all=DB::table('qualification')
                            ->get();
@endphp



<div class="breadcumb-area bg-img" style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Online Reservation</h2>
        </div>
    </div>
    



<!-- ##### Elements Area Start ##### -->
<section class="elements-area section-padding-100-0">
    <div class="container"> 
         <?php 
            $exception=Session::get('exception');
                if($exception)
                {
                    ?> 
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>        
                            <strong><?php echo $exception; ?></strong> You successfully submitted your reservation. 
                        </div> 
                    <?php
                Session::put('exception',null);
            }
        ?>
        <hr>
        <h3 class="sub-title"><b>General Information</b></h3>
        <form method="post" action="{{URL::to('/eaddReservation')}}" enctype="multipart/form-data"> 
        {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="res_lname" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="res_fname" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Middle Name</label>
                <div class="col-sm-10">
                    <input type="text" name="res_mname" required="" class="form-control">
                </div>
            </div>
           
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Complete Permanent Address</label>
                <div class="col-sm-2">
                    <input type="text" name="res_barangay" required="" class="form-control" placeholder="Barangay">
                </div>
                <div class="col-sm-2">
                    <input type="text" name="res_city" required="" class="form-control" placeholder="City/Town">
                </div>
               
                <div class="col-sm-2">
                    <input type="text" name="res_province" required="" class="form-control" placeholder="Province">
                </div>
                <div class="col-sm-2">
                    <input type="text" name="res_region" required="" class="form-control" placeholder="Region">
                </div>
                <div class="col-sm-2">
                    <input type="text" name="res_district" required="" class="form-control" placeholder="District">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email / Facebook Acc.</label>
                <div class="col-sm-10">
                    <input type="text" name="res_email" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Contact No.</label>
                <div class="col-sm-10">
                    <input type="number" name="res_contact" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nationality</label>
                <div class="col-sm-10">
                    <input type="text" name="res_nationality" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Qualification:</label>
                <div class="col-sm-10">
                    <select name="qualification_id" required="" class="form-control">
                        <option value="" selected="">Please Choose a Qualification to take</option>
                        @foreach($qualification_all as $qualification_all)
                        <option value="{{ $qualification_all->qualification_id }}">{{ $qualification_all->qualification_id }}. {{ $qualification_all->qualification_title }}</option>
                        @endforeach
                    </select>
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
                    <select name="res_gender" required="" class="form-control">
                        <option value="" selected="">Please Choose</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Civil Status</label>
                <div class="col-sm-10">
                    <select name="res_civilstat" required="" class="form-control">
                        <option value="" selected="">Please Choose </option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow/er">Widow/er</option>
                        <option value="Separated">Separated</option>
                        <option value="Solo Parent">Solo Parent</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Employment Status</label>
                <div class="col-sm-10">
                    <select name="res_employstat" required="" class="form-control">
                        <option value="" selected="">Please Choose</option>
                        <option value="Employed">Employed</option>
                        <option value="Unemployed">Unemployed</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Educational Attainment</label>
                <div class="col-sm-10">
                    <select name="res_educational" required="" class="form-control">
                        <option value="" selected="">Please Choose</option>
                        <option value="No Grade Completed<">No Grade Completed</option>
                        <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                        <option value="Elementary Graduate">Elementary Graduate</option>
                        <option value="gh School Undergraduate">High School Undergraduate</option>
                        <option value="High School Graduate">High School Graduate</option>
                        <option value="Post Secondary Non-Tertiary/Technical Vocational Course Undergraduate">Post Secondary Non-Tertiary/Technical Vocational Course Undergraduate</option>
                        <option value="Post Secondary Non-Tertiary/Technical Vocational Course Graduate">Post Secondary Non-Tertiary/Technical Vocational Course Graduate</option>
                        <option value="College Undergraduate">College Undergraduate</option>
                        <option value="College Graduate">College Graduate</option>
                        <option value="Masteral">Masteral</option>
                        <option value="Doctorate">Doctorate</option>
                        <option value="Junior High(K-12)">Junior High(K-12)</option>
                        <option value="Senior High(K-12)">Senior High(K-12)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Birth Date</label>
                <div class="col-sm-10">
                    <input type="date" name="res_birthdate" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" name="res_age" required="" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Birth Place</label>
                <div class="col-sm-4">
                    <input type="text" name="res_birthcity" required="" class="form-control" placeholder="City/Municipality">
                </div>
                <div class="col-sm-3">
                    <input type="text" name="res_birthprov" required="" class="form-control" placeholder="Province">
                </div>
                <div class="col-sm-3">
                    <input type="text" name="res_birthreg" required="" class="form-control" placeholder="Region">
                </div>
            </div>

            <?php 

            $month = date('m');
            $day = date('d');
            $year = date('Y');

            $today = $year . '-' . $month . '-' . $day;
            ?>

                    <input type="hidden" value="<?php echo $today; ?>" name="registeredDate" required="" class="form-control">
           
            <hr>
            <div class="form-group row">
                <label class="col-sm-2"></label>
                <div class="col-sm-10" >
                    <button type="submit" style="float: right;" class="btn btn-primary m-b-0">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
