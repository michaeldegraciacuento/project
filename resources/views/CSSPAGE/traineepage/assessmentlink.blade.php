@extends('layouts.trainee')
@section('content')
@php
	$all_links_info=DB::table('link')
                ->get();

@endphp

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Assessment Link</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<section id="portfolio" class="section-portfolio bg-white-section background-image">
      <div class="container-fluid">
        <div class="row">
            <div class="container">
                    <div class="col-xl-12">
                    <div class="card">
                                            <div class="card-header">
                                                <h5>Computer Based Assessment Link</h5>
                                                

                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                  
                                                                <th>Computer Based Assessment Link</th>
                                                                
                                                                <th>Group Code</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                              @foreach($all_links_info as $v_links)
                                                            <tr>
                                                            
                                                            
                                                                <td><a href="{{ $v_links->link_url }}">{{ $v_links->link_desc }}</a></td>
                                                                <td>{{ $v_links->link_groupcode }}</td>
                                                               
                                                            </tr>

                                                                @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                    </div>
            </div>
        </div>
        
      </div>
    </section>
@endsection