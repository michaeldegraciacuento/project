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
                                                <h5>Add News and Updates</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/eaddnau')}}" enctype="multipart/form-data">
                                              {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Activities Attended/Conducted:</label>
                                                        <div class="col-sm-10">
                                                            
                                                            <textarea rows="2" class="form-control form-control-normal" cols="50" name="news_conducted" ></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Venue:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="news_venue" id="name" value=""  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Date:</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-normal" name="news_date" id="name" value=""  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Partner:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="news_partner" id="name" value="" placeholder="">
                                                        </div>
                                                    </div>  
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Objective/Outcome/Remarks:</label>
                                                        <div class="col-sm-10">
                                                            
                                                            <textarea rows="4" class="form-control form-control-normal" cols="50" name="news_oor" ></textarea>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Image:</label>
                                                            <div class="col-sm-10">
                                                               
                                                                <input type="file" name="news_image"  onchange="document.getElementById('file_input').value = this.value;">
                                                                
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2"></label>
                                                        <div class="col-sm-10">
                                                        <button class="button3">Confirm</button> </a>
                                                        <a href="{{ URL::to('/nau') }}"> Cancel </a>
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
