@extends('layouts.trainee')
@section('content')


<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Post Test Result</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

 <!-- ##### Elements Area Start ##### -->
 <section class="elements-area section-padding-100-0">
<div class="container">
        
        <div class="card">
		
            <div class="card-header">
                <h5>Postre Test Result</h5>
                <span>It shows the all the list of post test result</span>
				<form action="/search1" align="right" method="get" >
					<div  class="input-group">
						<input  type="search" name="search1" class="form-control">
						<span class="input-group-prepend">
							<button type="submit" class="btn btn-primary">Search</button>
						</button>
					</div>
				</form>
            </div>  
			                          
				<div class="card-block">
				
					<div class="dt-responsive table-responsive ">
						<table id="order-table" class="table table-striped table-bordered nowrap">
							<thead>
								<tr>
									<th>Name of Trainee</th>
									<th width="20%" >Result</th>
									
									
								</tr>
							</thead>
							<tbody>
								@foreach($post as $post)
								<tr>
									<td>{{ $post->post_traineename }}</td>
                                  	<td>{{ $post->post_result }}</td>
                                                               
									
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