@extends('layouts.app')
@section('content')



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
                                        <h4>EDIT COMMUNITY-BASED QUALIFICATION<a href="{{URL::to('/combasedQuali')}}"><button class="btn btn-success" style="float: right;">Add Comm-based Qualification</button> </a> </h4>
                                        <span>It shows the all the list of community-based qualification.</span>
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
                                            
                                                @foreach($all_quali_info as $all_quali_info)
                                                <tr>

                                                                <td>{{ $all_quali_info->com_quali_com_qualititle }}</td>
                                                                <td>{{ $all_quali_info->com_quali_no_hours }}</td>
                                                                <td>{{ $all_quali_info->com_quali_assessment_no_of_candidate }}</td>

                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/updateComQuali/'.$all_quali_info->com_quali_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/deleteComQuali/'.$all_quali_info->com_quali_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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
