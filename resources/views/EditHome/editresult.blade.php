@extends('layouts.app')
@section('content')
@php
	$all_res_info=DB::table('assessment')
                ->join('qualification', 'qualification.qualification_id', 'assessment.qualification_id')
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
                                        <h3>List of Assessment Result<a href="{{URL::to('addresfunction')}}"><button class="btn btn-success" style="float: right;">Add Assessment Result</button> </a> </h3>
                                        <span>List of Skills Registered Programs</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                         <th>Name of Candidate</th>
                                                        <th>Qualification Title</th>
                                                        <th>Date of Assessment</th>
                                                        <th>Certificate Number</th>
                                                        <th>Result</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                       
                                                @foreach($all_res_info as $v_result)
                                                <tr>
                                                    <td>{{ $v_result->trainee_name }} {{ $v_result->trainee_middlename }} {{ $v_result->trainee_lastname }}</td>
                                                    <td>{{ $v_result->qualification_title }}</td>
                                                    <td>{{ $v_result->assessment_sched_taken }}</td>
                                                    <td>{{ $v_result->assessment_cn }}</td>
                                                    @if($v_result->assessment_pof == "Not Yet Competent")
                                                        <td><font color="red">Not Yet Competent</font></td>
                                                    @else
                                                        <td><font color="blue">Competent</font></td>
                                                    @endif
                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/editresupdate/'.$v_result->assessment_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/editresdelete/'.$v_result->assessment_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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