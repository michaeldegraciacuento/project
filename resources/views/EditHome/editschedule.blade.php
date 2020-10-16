@extends('layouts.app')
@section('content')

@php
	$all_sched_info=DB::table('schedule')
                ->join('qualification', 'qualification.qualification_id', 'schedule.qualification_id')
                ->join('assessor', 'assessor.assessor_id', 'schedule.assessor_id')
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
                                        <h3>Edit Assessment Schedule<a href="{{URL::to('addschedfunction')}}"><button class="btn btn-success" style="float: right;">Add Assessment Schedule</button> </a> </h3>
                                        <span>List of Assessment Schedule</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                            <th>Date of Assessment</th>
                                                            <th>Qualification Title</th>
                                                            <th>Number of Candidates</th>
                                                            <th>Assessor</th>
                                                            <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                       
                                                @foreach($all_sched_info as $v_schedule)
                                                <tr>
				                                        <td>{{ $v_schedule->schedule_date }}</td>
				                                        <td>{{ $v_schedule->qualification_title }}</td>
				                                        <td>{{ $v_schedule->schedule_no_of_candidates }} <font color="red">fx</font></td>
                                                        <td>{{ $v_schedule->assessor_name }} {{ $v_schedule->assessor_middlename }} {{ $v_schedule->assessor_lastname }}</td>
                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/editschedupdate/'.$v_schedule->schedule_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/editscheddelete/'.$v_schedule->schedule_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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