@extends('layoutEvery')
@section('content')
@php
	$headrep=DB::table('linkupdate')->groupBy('linkupdate_headrep')->get();
	$data=DB::table('linkupdate')->get();
									
	$datas=DB::table('linkupdate')->get();


	
@endphp
<body>
   

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Transparency Seal</h2>
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
    <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">					
		<a href=""><img src="{{('asset/img/images/translogowback.jpg')}}" alt=""></a>
		
		<p>A Transparency Seal, prominently displayed on the main page of the website of a particular government agency, is a certificate that it has complied with the requirements of Section 93. This Seal links to a page within the agency’s website which contains an index of downloadable items of each of the above-mentioned documents.</p>
		
			<font color="blue"><strong>SYMBOLISM</font></strong>		
			<p align="justify">A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value.
			The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance.</p>

			<p align="justify">This initiative is envisioned as a step in the right direction towards solidifying the position of the Philippines as the Pearl of the Orient – a shining example for democratic virtue in the region. </p>
			
			<p align="justify">	<font color="blue"><strong>Compliance with Sec. 91 (Transparency Seal) R.A. No. 10633 (General Appropriations Act FY 2014)</font></strong></p>
			<table>
					<tr>
						<th>I. The agency’s mandates and functions, names of its officials with their position and designation, and contact information</th>
					</tr>
				<th> 
					<div class="container">
						<a href=""><font color="blue"><li>Mandate and Function</li></a></font>
						<a href=""><font color="blue"><li>Directory of Officials</li></a></font>
						<a href=""><font color="blue"><li>List of Training Schedule</li></a></font>
					</div>	 
				</th>
			</table>
			<br>
			<!-- <table>
					<tr>
						<th>II. Annual Report</th>
					</tr>
						@foreach($headrep as $v_linkupdate)						
							<tr>
								<th>{{$v_linkupdate->linkupdate_headrep}}									
										<div class="container">
											@foreach($data as $d)
												
												@if($d->linkupdate_date == null)
													@if($d->linkupdate_headrep == $v_linkupdate->linkupdate_headrep)
														<a ><font color="blue" class="mr-2">{{$d->linkupdate_year ?? ''}}&nbsp;</a>
													@endif
												@else
													@if($d->linkupdate_headrep == $v_linkupdate->linkupdate_headrep)
													<a ><font color="black" class="mr-2">{{$d->linkupdate_year ?? ''}}&nbsp;</a>
													@foreach($datas as $dd)
														
													@if($dd->linkupdate_year == $d->linkupdate_year && $d->linkupdate_headrep == $dd->linkupdate_headrep)
															<a href="{{$dd->linkupdate_url ?? ''}}"><font color="blue" class="mr-2">{{$dd->linkupdate_date ?? ''}}</a>
														@endif
														
													@endforeach
													<br>
													@endif
												@endif
												
											@endforeach
										</div>
								</th>
							</tr>									
						@endforeach	
				</table> -->

			<table>
					<tr>
						<th>II. Annual Report</th>
					</tr>
						@foreach($headrep as $v_linkupdate)						
							<tr>
								<th>{{$v_linkupdate->linkupdate_headrep}}									
										<div class="container">
											@foreach($data as $d)
												
												@if($d->linkupdate_date == null)
													@if($d->linkupdate_headrep == $v_linkupdate->linkupdate_headrep)
														<a ><font color="blue" class="mr-2">{{$d->linkupdate_year ?? ''}}&nbsp;</a>
													@endif
												@else
													@if($d->linkupdate_headrep == $v_linkupdate->linkupdate_headrep)
													<a ><font color="black" class="mr-2">{{$d->linkupdate_year ?? ''}}&nbsp;</a>
													@foreach($datas as $dd)
														
													@if($dd->linkupdate_year == $d->linkupdate_year )
															<a href="{{$dd->linkupdate_url ?? ''}}"><font color="blue" class="mr-2">{{$dd->linkupdate_date ?? ''}}</a>
														@endif
														
													@endforeach
													<br>
													@endif
												@endif
												
											@endforeach
										</div>
								</th>
							</tr>									
						@endforeach	
				</table>

				
			<br>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->



@endsection