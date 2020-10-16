@extends('layoutEvery')
@section('content')
@php
	$all_accass_info=DB::table('accrediredassessment')
               
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
<style>
.button {
  background-color: #FFA500;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button:hover {
  background-color: darkorange;
}
</style>

<style>
.button3 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button3:hover {
  background-color: green;
}
</style>

<style>
.button1 {
  background-color: #DC143C;
  border: none;
  color: white;
  padding: 2px 4px;
  text-align: center;
  font-size: 12px;
  cursor: pointer;
}

.button1:hover {
  background-color: red;
}

</style>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Accredited Assessment Center </h2>
        </div>	
    </div>
    <!-- ##### Breadcumb Area End ##### -->


<!-- ##### Elements Area Start ##### -->
<section class="elements-area section-padding-100-0">
<div class="container">
                
        <div class="card">
            <div class="card-header">
                <h5>ACCREDITED ASSESSMENT CENTER</h5>
                <span>It shows the list of Accredited Assessment Centers</span>

            </div>                            
                    <div class="card-block">
                        <div class="dt-responsive table-responsive ">
                            <table id="dom-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                    <th>Qualification Title</th>
                                    <th>Accreditation Number</th>
                                    <th>Date of Accreditation</th>
                                    <th>Date of Expiration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($all_accass_info as $v_accrediredassessment)
                                    <tr>
                                    <td>{{ $v_accrediredassessment->accrequali }}</td>
                                    <td>{{ $v_accrediredassessment->accrediredassessment_acc_no }}</td>
                                    <td>{{ $v_accrediredassessment->accrediredassessment_date_of_acc }}</td>
                                    <td>{{ $v_accrediredassessment->accrediredassessment_date_of_exp }}</td>


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
