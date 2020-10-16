@extends('layouts.app')
@section('content')
@php
	$all_res_info=DB::table('alumnipeps')
                ->join('qualification', 'qualification.qualification_id', 'alumnipeps.qualification_id')
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
                                <!-- HTML5 Export Buttons table start -->
                                <div class="card">
                                    <div class="card-header table-card-header">
                                        <h3>List of RTC-Alumni Result<a href="{{URL::to('addAlumni')}}"><button class="btn btn-success" style="float: right;">Add RTC-Alumni</button> </a> </h3>
                                      
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                    <th>Image</th>
                                                                <th>Alumni Name</th>
                                                                <th>Qualification</th>
                                                                <th>Date Graduate</th>
                                                                <th>Batch</th>
                                                                <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                       
                                                <tr>
                                                @foreach($all_res_info as $all_res_info)
				                                        <td><img class="img-sm rounded-circle " src="{{URL::to($all_res_info->alumnipeps_image)}}" alt="user" style="width:50px" ></td>
				                                        <td>{{ $all_res_info->alumnipeps_firstname }} {{ $all_res_info->alumnipeps_middlename }} {{ $all_res_info->alumnipeps_lastname }}</td>
                                                        <td>{{ $all_res_info->qualification_title }}</td>
                                                        <td>{{ $all_res_info->alumnipeps_dategrad }}</td>
                                                        <td>{{ $all_res_info->alumnipeps_batch }}</td>
                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{ URL::to('/updateAlumni/'.$all_res_info->alumnipeps_id) }}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{ URL::to('/deleteAlumni/'.$all_res_info->alumnipeps_id) }} " id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            
                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- HTML5 Export Buttons end -->
                                
                                
                                
                                <!-- Custom File (JSON) table end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
       
    </div>
    </div>     


@endsection