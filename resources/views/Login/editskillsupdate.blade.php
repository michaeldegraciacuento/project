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
                                                <h5>Update Skill Validation</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/editskillsupdates/'.$quali_desc_edit->skills_id) }}">
                                              {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Name of Skills</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="skills_title" value="{{ $quali_desc_edit->skills_title }}" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nominal Hours</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control"name="skills_no_hours" id="name"value="{{ $quali_desc_edit->skills_no_hours }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">CPTR Number</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-capitalize"name="skills_cptr" id="name"value="{{ $quali_desc_edit->skills_cptr }}"  required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Date Registered</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-uppercase"name="skills_date_of_reg"value="{{ $quali_desc_edit->skills_date_of_reg }}" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/editskills') }}"> Cancel </a>
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
                   
                </div>
            </div>

@endsection
