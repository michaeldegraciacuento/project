@extends('layouts.css')
@section('content')
<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                               

                                      
                                        <!-- Input Alignment card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Add New Assessment Link</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/addlinkfunctions')}}">
                                            {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Assessment Link</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="link_url" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Description</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control form-control-normal" name="link_desc" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label required="" class="col-sm-2 col-form-label">Group Code</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control form-control-normal" name="link_groupcode" id="name" required="" placeholder="">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button8">Confirm</button> </a>
                                                    <a  href="{{URL::to('csssendlink')}}"> Cancel </a>
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
