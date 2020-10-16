@extends('layoutEvery')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img"  style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Citizen Charter</h2>
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
	<section class="elements-area mt-50 ">
        <div class="container">					
		<div class="col-12">
		<div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
			<!-- Post Thumb -->
			<div class="blog-post-thumb mb-50">
			<style>
                        .center {
                          display: block;
                          margin-left: auto;
                          margin-right: auto;
                          width: 50%;
                        }
                    </style>
					
	
			<a href="{{URL::to('/citizencharter')}}" class="center" >
							     <img src="{{asset('asset/img/images/citchart.gif')}}" alt=""></a>
			</div>
												
			<table>
			
			  <tr>
				<th>Annexes</th>
				<th>Attachment</th>
			  </tr>
			  <tr>
				<td><a  >Annex 1</td>
				<td><a  ><font color="blue">Customer Inquiry and Feedback Form</td>
			  </tr>
			  <tr>
				<td><a  >Annex 2</td>
				<td><a  ><font color="blue">Registration Form (Manpower Profile)</td>
			  </tr>
			  <tr>
				<td><a  >Annex 3</td>
				<td><a  ><font color="blue">TWC Preliminary Interview Sheet</td>
			  </tr>
			  <tr>
				<td><a  >Annex 4</td>
				<td><a href=""><font color="blue">FSTP Letter of Acceptance – Template</td>
			  </tr>
			 <tr>
				<td><a  >Annex 5</td>
				<td><a  ><font color="blue">Program Registration Requirement Checklist (Land-Based)</td>
			  </tr>
			  <tr>
				<td><a  >Annex 6</td>
				<td><a  ><font color="blue">Program Registration Requirement Checklist (Sea-Based)</td>
			  </tr>
			  <tr>
				<td><a  >Annex 7</td>
				<td><a  ><font color="blue">DTS Checklist of Documentary Requirements</td>
			  </tr>
			  <tr>
				<td><a  >Annex 8</td>
				<td><a  ><font color="blue">KASH Application for Registration of Apprenticeship Program</td>
			  </tr>
			  <tr>
				<td><a  >Annex 9</td>
				<td><a  ><font color="blue">Competency Assessors’ Accreditation – Checklist of Requirements</td>
			  </tr>
			  <tr>
				<td><a  >Annex 10</td>
				<td><a  ><font color="blue">Competency Assessment Center – Checklist of Requirements</td>
			  </tr>
			  <tr>
				<td><a  >Annex 11</td>
				<td><a  ><font color="blue">Competency Assessment Application Form</td>
			  </tr>
			  <tr>
				<td><a  >Annex 12</td>
				<td><a  ><font color="blue">Special Order – Template</td>
			  </tr>
			  <tr>
				<td><a  >Annex 13</td>
				<td><a  ><font color="blue">Use of NTTA Facilities – Request Form</td>
			  </tr>
			  <tr>
				<td><a  >Annex 14</td>
				<td><a  ><font color="blue">Order of Payment Form</td>
			  </tr>
			</table>
			<br></br>
			
		>
								
								
								
                            </div>
			
    </section>
    <!-- ***** Elements Area End ***** -->
@endsection