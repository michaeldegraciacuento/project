@extends('layoutEvery')
@section('content')
@php 
        $all_res_info=DB::table('alumnipeps')
            ->join('qualification', 'qualification.qualification_id', 'alumnipeps.qualification_id')
            ->get();
@endphp
 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>RTC ALUMNI</h2>
        </div>	
    </div>
     <!-- ##### Elements Area Start ##### -->
 <section class="elements-area section-padding-100-0">
<div class="container">        
        <div class="card">
            <div class="card-header">
                <h5>List of RTC-ALUMNI</h5>
                <span>It shows the all the list of Regional Training Center - Alumni.</span>
            </div>                            
				<div class="card-block">
					<div class="dt-responsive table-responsive ">
						<table id="dom-table" class="table table-striped table-bordered nowrap">
							<thead>
								<tr>
                                    
                                    <th>Alumni Name</th>
                                    <th>Qualification</th>
                                    <th>Date Graduate</th>
                                    <th>Batch</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($all_res_info as $all_res_info)
								<tr>
                                    
                                    <td>{{ $all_res_info->alumnipeps_firstname }} {{ $all_res_info->alumnipeps_middlename }} {{ $all_res_info->alumnipeps_lastname }}</td>
                                    <td>{{ $all_res_info->qualification_title }}</td>
                                    <td>{{ $all_res_info->alumnipeps_dategrad }}</td>
                                    <td>{{ $all_res_info->alumnipeps_batch }}</td>
                                    <td class="dropdown">
                                        <a href="{{ URL::to('/viewAlumnipeps/'.$all_res_info->alumnipeps_id) }}"> <button type="button" class="btn btn-success">View</button> </a>
                                    </td>
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
