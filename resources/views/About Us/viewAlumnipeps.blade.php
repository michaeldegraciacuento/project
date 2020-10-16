@extends('layoutEvery')
@section('content')

     <!-- ##### Breadcumb Area Start ##### -->
     <div class="breadcumb-area bg-img" style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Profile</h2>
        </div>
    </div>
    <br><br><br><br>
  
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4  user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="{{URL::to($quali_desc_edit->alumnipeps_image)}}" width="200" height="400" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600">{{$quali_desc_edit->alumnipeps_firstname}} {{$quali_desc_edit->alumnipeps_middlename}} {{$quali_desc_edit->alumnipeps_lastname}}</h6>
                                                                <p>{{$quali_desc_edit->qualification_title}}</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Date Graduated</p>
                                                                        <h6 class="text-muted f-w-400">{{$quali_desc_edit->alumnipeps_dategrad  }}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Batch</p>
                                                                        <h6 class="text-muted f-w-400">{{ $quali_desc_edit->alumnipeps_batch }}</h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Personal Data</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">First Name:</p>
                                                                        <h6 class="text-muted f-w-400">{{$quali_desc_edit->alumnipeps_firstname}} </h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Middle Name:</p>
                                                                        <h6 class="text-muted f-w-400">{{$quali_desc_edit->alumnipeps_middlename}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Last Name:</p>
                                                                        <h6 class="text-muted f-w-400"> {{$quali_desc_edit->alumnipeps_lastname}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Qualification Taken:</p>
                                                                        <h6 class="text-muted f-w-400">{{$quali_desc_edit->qualification_title}}</h6>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           


@endsection