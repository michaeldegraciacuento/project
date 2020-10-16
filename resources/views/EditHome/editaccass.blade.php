@extends('layouts.app')


@section('content')
@php
	$all_accass_info=DB::table('accrediredassessment')
                
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
                                        <h3>Edit Accredited Assessment<a href="{{URL::to('addaccfunction')}}"><button class="btn btn-success" style="float: right;">Add Accredited Assessment</button> </a> </h3>
                                        <span>List of Accredited Assessment </span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                            <th>Qualification Title</th>
                                                            <th>Accrreditation Number</th>
                                                            <th>Date of Accreditation</th>
                                                            <th>Date of Expiration</th>
                                                            <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                @foreach($all_accass_info as $v_accrediredassessment)
                                                <tr>
                                                       
				                                        <td>{{ $v_accrediredassessment->accrequali }}</td>
				                                        <td>{{ $v_accrediredassessment->accrediredassessment_acc_no }}</td>
				                                        <td>{{ $v_accrediredassessment->accrediredassessment_date_of_acc }}</td>
                                                        <td>{{ $v_accrediredassessment->accrediredassessment_date_of_exp }}</td>
                                               
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/editaccupdate/'.$v_accrediredassessment->accrediredassessment_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/editaccdelete/'.$v_accrediredassessment->accrediredassessment_id)}}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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
