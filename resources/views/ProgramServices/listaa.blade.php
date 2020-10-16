@extends('layoutEvery')
@section('content')
@php
	$all_res_info=DB::table('assessor')
               
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
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Accredited Assessors</h2>
        </div>	
    </div>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Elements Area Start ##### -->
<section class="elements-area section-padding-100-0">
<div class="container">
                
        <div class="card">
            <div class="card-header">
                <h5>ACCREDITED ASSESSOR</h5>
                <span>It shows the list of RTC-Iligan Accredited Assessors.</span>

            </div>                            
                    <div class="card-block">
                        <div class="dt-responsive table-responsive ">
                            <table id="dom-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                      <th>Assessor Name</th>
                                  
                                      <th>Date Accredited</th>
                                      <th>Date of Expiration</th>
                                      <th>Qualification Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($all_res_info as $v_result)
                                    <tr>
                                    <td>{{ $v_result->assessor_name }} {{ $v_result->assessor_middlename }} {{ $v_result->assessor_lastname }}</td>
                                 
                                    <td>{{ $v_result->assessor_date_accquired }}</td>
                                    <td>{{ $v_result->assessor_expiration_accredited }}</td>
                                    <td>{{ $v_result->assessor_qualification  }}</td>
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
    