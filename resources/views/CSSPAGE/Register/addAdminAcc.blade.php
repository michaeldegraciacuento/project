@extends('layouts.css')
@section('content')

@php 
    $adminAcc=DB::table('c_s_s_s')
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
                                         <h4>List of Admin Account<a href="{{URL::to('/adminAcc')}}"><button class="btn btn-success" style="float: right;">Add Account</button> </a> </h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Account Name</th>
                                                        <th>Account Username</th>
                                                        <th>Password.</th>  
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($adminAcc as $adminAcc)
                                                    <tr>
                                                        <td>{{ $adminAcc->first_name }} {{ $adminAcc->middle_name }} {{ $adminAcc->last_name }}</td>
                                                        <td>{{ $adminAcc->name }}</td>
                                                        <td><a href="#" class="__cf_email__" data-cfemail="{{ $adminAcc->password }}">[Password&#160;Protected]</a></td>
                                                        
                                                        <td class="dropdown">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                <a class="dropdown-item" href="{{URL::to('/deleteCssAdmin/'.$adminAcc->id)}}"><i class="icofont icofont-eye-alt"></i>Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            
                                        </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Account Name</th>
                                                        <th>Account Username</th>
                                                        <th>Password.</th>  
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
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
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
    </div>     

@endsection