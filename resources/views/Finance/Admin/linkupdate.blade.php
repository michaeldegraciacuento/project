@extends('layouts.fin')
@section('content')

@php
	$all_updatelink_info=DB::table('linkupdate')
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
                                    <h3>Transparency Update<a href="{{URL::to('addlinkupdate')}}"><button class="btn btn-success btn-round" style="float: right;">Add</button> </a> 
                                    </h3>
                                   
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <div class="container" id="div-id-name">
                                            <table id="dom-table" class="table table-bordered nowrap" >
                                                <thead>
                                                    <tr>    
                                                            <th>Title Description</th>
                                                            <th>Year</th>
                                                            <th>Month/Qtr</th>
                                                            <th>URL</th>
                                                            <th>Action</th>
                                                    </tr>
                                            </thead>
                                                <tbody>
                                                @foreach($all_updatelink_info as $v_linkupdate)
                                                    <tr>
                                                        <td style="overflow:hidden">{{$v_linkupdate->linkupdate_headrep}}</td>
                                                        <td style="overflow:hidden">{{$v_linkupdate->linkupdate_year}}</td>
                                                        <td style="overflow:hidden">{{$v_linkupdate->linkupdate_date}}</td>
                                                        <td style="overflow:hidden">{{$v_linkupdate->linkupdate_url}}</td>
                                                        <td class="dropdown">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                            <div class="dropdown-menu dropdown-menu-right b-none">
                                                                <a class="dropdown-item" href="{{ URL::to('updatelinkupdate/'.$v_linkupdate->linkupdate_id) }}"><i class="icofont icofont-edit"></i>Update</a>
                                                                <a class="dropdown-item" href="{{ URL::to('deletelinkupdate/'.$v_linkupdate->linkupdate_id) }}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                            </table>
    </div>
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