@extends('layouts.tm')
@section('content')

@php
	$all_tmposts_info=DB::table('tmpost')
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
                                        <h3>Post Test Result<a href="{{URL::to('/tmpostadd')}}"><button class="btn btn-success" style="float: right;">Add Result</button> </a> </h3>
                                        <span>List of Post Test Result</span>
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
                                               
                                                @foreach($all_tmposts_info as $v_tmposts)
                                                        <th>{{ $v_tmposts->tmpost_traineename}}</th>   
				                                        <td>{{ $v_tmposts->tmpost_result}}</td>
		
		
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/tmpostupdate/'.$v_tmposts->tmpost_id)}}"><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item"  href="{{URL::to('/tmpostdelete/'.$v_tmposts->tmpost_id)}}"id="delete2"><i class="icofont icofont-edit"></i>Delete</a> 
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