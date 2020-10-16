@extends('layouts.app')
@section('content')
@php
	$all_res_info=DB::table('assessor')
                
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
                                        <h3>List of Accredited Assessor<a href="{{URL::to('addAssessor')}}"><button class="btn btn-success" style="float: right;">Add Accredited Assessor</button> </a> </h3>
                                        
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                        <th>Assessor Name</th>
                                                        <th>Assessor Date Accquired</th>
                                                        <th>Assessor Expiration Accredited</th>
                                                        <th>Qualification</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                @foreach($all_res_info as $v_result)
                                                    <tr>
				                                        <td>{{ $v_result->assessor_name }} {{ $v_result->assessor_middlename }} {{ $v_result->assessor_lastname }}</td>
				                                        <td>{{ $v_result->assessor_date_accquired }}</td>
                                                        <td>{{ $v_result->assessor_expiration_accredited }}</td>
                                                        <td>{{ $v_result->assessor_qualification }}</td>
                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/updateAssessor/'.$v_result->assessor_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/deleteAssessor/'.$v_result->assessor_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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