@extends('layoutEvery')
@section('content')

 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>PHILGEPS  POSTING</h2>
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
    <section class="elements-area mt-50">
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

  <a href="{{URL::to('/philgepsposting')}}" class="center" >
							     <img src="{{asset('asset/img/images/philgeps.png')}}" alt=""></a>
                    </div>
                    <!-- Post Title -->
									<table>
			<font color="blue"><p><strong>TESDA-10 PUBLIC BIDDING ACTIVITIES, AWARDED CONTRACTS AND NOTICE TO PROCEED</font></p>
			  <tr>
			  	<th>NO.</th>
				<th>DOCUMENTS</th>
			  </tr>
			  <tr>
				<th>1</th>
				<td><a  ><font color="green">Revised Procurement of Starter Toolkits for the Special Skills Training Skills Program (SSTP) for CY (TESDA-RO 2018-01)</td>
			  </tr>
			  <tr>
				<th>2</th>
				<td><a  ><font color="green">Annual Procurement Plan (APP) CY 2019</td>
			  </tr>
			  <tr>
				<th>3</th>
				<td><a  ><font color="green">Procurement Monitoring Report 1st Semester (PMR) CY 2019</td>
			  </tr>
			  <tr>
				<th>4</th>
				<td><a  ><font color="green">Agency Procurement Compliance Indicator (APCPI) 1st Semester CY 2019</td>
			  </tr>
			</table>
                                </div>
                            </div>
		
			<br></br>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->
    
@endsection
