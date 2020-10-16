@extends('layoutEvery')
@section('content')
@php
	$all_skills_info=DB::table('skills')
                ->get();
@endphp

@php
	$all_quali_info=DB::table('qualification')
                ->get();
@endphp



<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Center-Based Programs</h2>
        </div>	
    </div>
    <!-- ##### Breadcumb Area End ##### -->

 <!-- ##### Elements Area Start ##### -->
 <section class="elements-area section-padding-100-0">
<div class="container">        
        <div class="card">
            <div class="card-header">
                <h5>REGISTERED PROGRAMS</h5>
                <span>It shows the list of all registered programs by UTPRAS.</span>
            </div>                            
				<div class="card-block">
					<div class="dt-responsive table-responsive ">
						<table id="dom-table" class="table table-striped table-bordered nowrap">
							<thead>
								<tr>
									<th>Name of Qualification</th>
									<th>Nominal Hours</th>
									<th>Date Registered</th>
									<th>CTPR Number</th>
									
								</tr>
							</thead>
							<tbody>
							@foreach($all_quali_info as $v_qualification)
								<tr>
									<td>{{ $v_qualification->qualification_title }}</td>
									<td>{{ $v_qualification->qualification_no_hours }} Hrs.</td>
									<td>{{ $v_qualification->qualification_date_of_reg }}</td>
									<td>{{ $v_qualification->qualification_cptr }}</td>
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
		
<section class="elements-area">
<div class="container">           
        <div class="card">
            <div class="card-header">
                <h5>LANGUAGE SKILLS INSTITUTE</h5>
                <span>It shows the list of all Language Skills Institute with CTPR.</span>
            </div>                            
				<div class="card-block">
					<div class="dt-responsive table-responsive ">
						<table id="simpletable" class="table table-striped table-bordered nowrap">
							<thead>
								<tr>
									<th>Name of Qualification</th>
									<th>Nominal Hours</th>
									<th>Date Registered</th>
									<th>CTPR Number</th>
									
								</tr>
							</thead>
							<tbody>
							@foreach($all_skills_info as $v_skills)
								<tr>
									<td>{{ $v_skills->skills_title }}</td>
									<td>{{ $v_skills->skills_no_hours }} Hrs.</td>
									<td>{{ $v_skills->skills_date_of_reg }}</td>
									<td>{{ $v_skills->skills_cptr }}</td>
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
