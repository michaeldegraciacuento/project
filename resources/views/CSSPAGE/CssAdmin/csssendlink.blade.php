@extends('layouts.css')

@section('content')

@php
	$all_links_info=DB::table('link')
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
                                        <h3>Computer Based Assessment Link<a href="{{URL::to('/cssaddnewlink')}}"><button class="btn btn-success" style="float: right;">Add New Link</button> </a> </h3>
                                        <span>Assessment Link</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="dom-table" class="table table-striped table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                    <th>Computer Based Assessment Link</th>
                                                    <th>Description</th>
                                                    <th>Group Code</th>
                                                    <th style="width:10px">Action</th>
                                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                <tr>
                                                @foreach($all_links_info as $v_links)
                                                        <th>{{ $v_links->link_url}}</th>  
                                                        <th>{{ $v_links->link_desc}}</th>   
				                                        <td>{{ $v_links->link_groupcode}}</td>
		
                                                    <td class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu dropdown-menu-right b-none">
                                                            <a class="dropdown-item" href="{{URL::to('/cssupdatelink/'.$v_links->link_id)}}" ><i class="icofont icofont-edit"></i>Update</a>
                                                            <a class="dropdown-item" href="{{URL::to('/linkdelete/'.$v_links->link_id)}}"id="delete2"><i class="icofont icofont-edit"></i>Delete</a> 
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