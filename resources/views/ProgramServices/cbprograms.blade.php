@extends('layoutEvery')
@section('content')


@php
	$all_quali_info=DB::table('com_quali')
                ->get();
@endphp



<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Community-Based Programs</h2>
        </div>	
    </div>
    <!-- ##### Breadcumb Area End ##### -->
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
 <section class="elements-area section-padding-100-0">
<div class="container">        
        <div class="card">
            <div class="card-header">
                <h5>COMMUNITY-BASED PROGRAMS</h5>
                <span>It shows the list of the Community-Based Programs.</span>
            </div>                            
				<div class="card-block">
					<div class="dt-responsive table-responsive ">
						<table id="dom-table" class="table table-striped table-bordered nowrap">
							<thead>
								<tr>
									<th>Name of Qualification</th>
									<th>Nominal Hours</th>
									<th>No. of Candidate</th>
								</tr>
							</thead>
							<tbody>
							@foreach($all_quali_info as $v_qualification)
								<tr>
									<td>{{ $v_qualification->com_quali_com_qualititle }}</td>
									<td>{{ $v_qualification->com_quali_no_hours }} Hrs.</td>
									<td>{{ $v_qualification->com_quali_assessment_no_of_candidate }}</td>
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
