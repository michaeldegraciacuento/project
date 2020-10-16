@extends('layouts.app')

@section('content')

@php
	$all_skills_info=DB::table('news')
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
                                        <h3>List of News and Updates &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{URL::to('addnau')}}">
                                                <button class="btn btn-success" style="float: right;">Add News or Updates</button> 
                                              
                                            </a>
                                            <a href="{{URL::to('deleteallnau')}}" id="delete">
                                               
                                                <button class="btn btn-success" >Delete All</button>
                                            </a>
                                            
                                         </h3>
                                         
                                   
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        <style>
                                        table {
                                            font-family: arial, sans-serif;
                                
                                            width: 100%;
                                        }

                                        td, th {
                                          
                                            text-align: left;
                                            padding: 8px;
                                        }

                                    
                                        textarea {
                                            resize: none;
                                        }
                                        </style >
                                            <table id="dom-table" class="table table-bordered nowrap" >
                                            
                                                <thead>
                                                    <tr>
                                                            <th>Activities Attended/Conducted</th> 
                                                            <th>Venue</th>
                                                            <th>Date</th>
                                                            <th>Partner</th>
                                                            <th>Objective/Outcome/Remarks</th>
                                                            <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($all_skills_info as $v_skills)
                                                    <tr>
                                                        <td><textarea style="border: none" readonly rows="2" cols="15">{{ $v_skills->news_conducted }}</textarea></td>
				                                        <td><textarea style="border: none" readonly rows="2" cols="15">{{ $v_skills->news_venue }}</textarea></td>
				                                        
				                                        <td><textarea style="border: none" readonly rows="2" cols="15">{{ $v_skills->news_date }}</textarea></td>
                                                        <td><textarea style="border: none" readonly rows="2" cols="15">{{ $v_skills->news_partner }}</textarea></td>
                                                        <td><textarea style="border: none" readonly rows="2" cols="25">{{ $v_skills->news_oor }}</textarea></td>

                                                        <td class="dropdown">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                            <div class="dropdown-menu dropdown-menu-right b-none">
                                                                <a class="dropdown-item" href="{{ URL::to('updatenau/'.$v_skills->news_id) }}"><i class="icofont icofont-edit"></i>Update</a>
                                                                <a class="dropdown-item" href="{{ URL::to('deletenau/'.$v_skills->news_id) }}" id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
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