@extends('layouts.css')
@section('content')

@php
	$all_asss_info=DB::table('assresult')
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
                                        <h3>Assessment Result<a href="{{URL::to('/assresultadd')}}"><button class="btn btn-success" style="float: right;">Add Result</button> </a> </h3>
                                        <span>List of Assessment Result</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                    <th>Trainee Name</th>
                                                    <th>Result</th>
                                                    <th style="width:10px">Action</th>
                                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                <tr>
                                                @foreach($all_asss_info as $v_asss)
                                                        <th>{{ $v_asss->assresult_traineename}}</th>   
				                                        <td>{{ $v_asss->assresult_result}}</td>
		
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/assresultupdate/'.$v_asss->assresult_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" id="delete2" href="{{URL::to('/assresultdelete/'.$v_asss->assresult_id)}}"><i class="icofont icofont-edit"></i>Delete</a> 
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