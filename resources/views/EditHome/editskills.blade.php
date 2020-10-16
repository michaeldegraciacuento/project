@extends('layouts.app')

@section('content')

@php
	$all_skills_info=DB::table('skills')
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
                                        <h3>List of Skils<a href="{{URL::to('addskillsfunction')}}"><button class="btn btn-success" style="float: right;">Add Skills</button> </a> </h3>
                                        <span>List of Skills Registered Programs</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                        <th>Name of Skill</th>
                                                        <th>Nominal Hours</th>
                                                        <th>Date Registered</th>
                                                        <th>CTPR Number</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                       
                                                <tr>
                                                    @foreach($all_skills_info as $v_skills)
                                                    <td>{{ $v_skills->skills_title }}</td>
                                                    <td>{{ $v_skills->skills_no_hours }}</td>
                                                    <td>{{ $v_skills->skills_date_of_reg }}</td>
                                                    <td>{{ $v_skills->skills_cptr }}</td>
                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/editskillsupdate/'.$v_skills->skills_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/editskilldelete/'.$v_skills->skills_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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