@extends('layouts.app')
@section('content')

@php
	$all_skills_info=DB::table('com_skills')
                ->get();
@endphp

@php
	$all_quali_info=DB::table('com_quali')
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
                                        <h4>EDIT COMMUNITY-BASED LANGUAGE SKILLS INSTITUTE<a href="{{URL::to('/combasedSkills')}}"><button class="btn btn-success" style="float: right;">Add Comm-based Skills</button> </a> </h4>
                                        <span>It shows the all the list of community-based language skills institute.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                                 <th>Name of Qualification</th>
                                                                <th>Nominal Hours</th>
                                                                <th>No. of Candidates</th>
                                                                <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                @foreach($all_skills_info as $v_skills)
                                                <tr>

                                                        <td>{{ $v_skills->com_skills_title }}</td>
                                                        <td>{{ $v_skills->com_skills_no_hours }}</td>
                                                        <td>{{ $v_skills->com_skills_no_can }}</td>
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/updateComSkills/'.$v_skills->com_skills_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/deleteComSkills/'.$v_skills->com_skills_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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
