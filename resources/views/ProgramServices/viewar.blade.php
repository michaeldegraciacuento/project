@extends('layoutEvery')
@section('content')
@php
	$all_res_info=DB::table('assessment')
                ->join('qualification', 'qualification.qualification_id', 'assessment.qualification_id')
                ->get();
@endphp
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
<div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Assessment Result</h2>
        </div>	
    </div>
<section class="elements-area section-padding-100-0">
        <div class="container">       
        <div class="card">
            <div class="card-header">
                <h5>ASSESSMENT RESULTS</h5>
                <span>It shows the Assessment Results .</span>
            </div>                                  
                <div class="card-block">
                    <div class="dt-responsive table-responsive ">
                        <table id="dom-table" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Name of Candidate</th>
                                    <th>Qualification Title</th>
                                    <th>Date of Assessment</th>
                                    <th>Certificate Number</th>
                                    <th>Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_res_info as $v_result)
                                <tr>
                                    <td>{{ $v_result->trainee_name }} {{ $v_result->trainee_middlename }} {{ $v_result->trainee_lastname }}</td>
                                    <td>{{ $v_result->qualification_title }}</td>
                                    <td>{{ $v_result->assessment_sched_taken }}</td>
                                    <td>{{ $v_result->assessment_cn }}</td>
                                    @if($v_result->assessment_pof == "Not Yet Competent")
                                        <td><font color="red">Not Yet Competent</font></td>
                                    @else
                                        <td><font color="blue">Competent</font></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </section>
              
                <!-- HTML (DOM) Sourced Data table end -->  

@endsection


 