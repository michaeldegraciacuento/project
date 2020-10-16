@extends('layouts.tm')
@section('content')
<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                               

                                      
                                        <!-- Input Alignment card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Update Post Assessment Result</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/tmpreupdates/'.$tmpres_desc_edit->tmpre_id)}}">
                                            {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Trainee Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="tmpre_traineename" id="name" required=""value="{{$tmpres_desc_edit->tmpre_traineename}}" placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Result</label>
                                                            <div class="col-sm-3">
                                                                <select required="" name="tmpre_result" class="form-control">
                                                                    <option value="">Select One Value Only</option>
                                                                    <option value="Competent">Competent</option>
                                                                    <option value="Not Yet Competent">Not Yet Competent</option>
                                                                   
                                                                </select>
                                                            </div>
                                                     </div>
                                                   
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button7">Confirm</button> </a>
                                                    <a  href="{{URL::to('tmpretest')}}"> Cancel </a>
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
