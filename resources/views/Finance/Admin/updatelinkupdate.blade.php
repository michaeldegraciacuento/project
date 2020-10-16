@extends('layouts.fin')
@section('content')

<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                               

                                      
                                        <!-- Input Alignment card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Add</h5>
                                         
                                                
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ URL::to('/eupdatelinkupdate/'.$linkupdate_desc_edit->linkupdate_id )}}" enctype="multipart/form-data">
                                              {{ csrf_field() }}
                                              <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Title Description</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="linkupdate_headrep"  value="{{ $linkupdate_desc_edit->linkupdate_headrep }} "  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Year</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="linkupdate_year" value="{{ $linkupdate_desc_edit->linkupdate_year }} "  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Month/Qtr</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="linkupdate_date" value="{{ $linkupdate_desc_edit->linkupdate_date }} "  placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">URL</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-normal" name="linkupdate_url"  value="{{ $linkupdate_desc_edit->linkupdate_url }} "  placeholder="">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group row">
                                                     <label class="col-sm-2"></label>
                                                     <div class="col-sm-10">
                                                    <button class="button3">Confirm</button> </a>
                                                    <a href="{{ URL::to('/linkupdate') }}"> Cancel </a>
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
