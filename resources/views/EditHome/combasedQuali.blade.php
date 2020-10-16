@extends('layouts.app')
@section('content')
<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                               

                                      
                                        <!-- Input Alignment card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Add Community-Based Qualification</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/addcomsquali')}}">
                                              {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Name of Qualification</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="com_quali_com_qualititle" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nominal Hours</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control form-control-normal"name="com_quali_no_hours" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">CPTR Number</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-capitalize"name="com_quali_cptr" id="name"  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">No. of Candidates</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control form-control-capitalize"name="com_quali_assessment_no_of_candidate" id="name" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Date Registered</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-uppercase"name="com_quali_date_of_reg" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/comquali') }}"> Cancel </a>
                                                     </div>
                              
                                                     </div>
                                                   
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Input Alignment card end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
                   
                </div>
            </div>
@endsection
