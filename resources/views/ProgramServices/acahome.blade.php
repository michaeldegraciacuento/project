@extends('layoutEvery')
@section('content')

@php
$all_sched_info=DB::table('schedule')
            ->join('qualification', 'qualification.qualification_id', 'schedule.qualification_id')
            ->join('assessor', 'assessor.assessor_id', 'schedule.assessor_id')
            ->get();
@endphp

<div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent", align ="center">
			<h3><font color="white">Competency Assessment and Certification</h3></font>
        </div>	
    </div>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">
		<br><br>	
	<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-contract"></i>
                                <a href="{{URL::to('aca')}}"><h5>Accredited Assessment Centers </h5></a>
                                </div>
                            </div>
                            
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                     <a href="{{URL::to('listaa')}}"><h5>List of Accredited Assessors</h5></a>
                                </div>
                            </div>
							<div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-id-card"></i>
                                     <a href="{{URL::to('viewar')}}"><h5>View Assessment Results</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>			
</section>	
			
    
    
<!-- ##### Elements Area Start ##### -->
<section class="elements-area mt-50 ">
<div class="container">
                
        <div class="card">
            <div class="card-header">
                <h5>ASSESSMENT SCHEDULE</h5>
                <span>It shows the availability of the Assessment Schedule conducted by the RTC-Iligan.</span>

            </div>                            
                    <div class="card-block">
                        <div class="dt-responsive table-responsive ">
                            <table id="dom-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Date of Assessment</th>
                                        <th>Qualification Title</th>
                                        <th>Number of Candidates</th>
                                        <th>Assign Accredited Assessor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($all_sched_info as $v_schedule)
                                    <tr>
                                    <td>{{ $v_schedule->schedule_date }}</td>
                                    <td>{{ $v_schedule->qualification_title }}</td>
                                    <td>{{ $v_schedule->schedule_no_of_candidates }} <font color="red">fx</font></td>
                                    <td>{{ $v_schedule->assessor_name }} {{ $v_schedule->assessor_middlename }} {{ $v_schedule->assessor_lastname }}</td>


                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>
        </section>
              

@endsection
