@extends('layoutEvery')
@section('content')

    <script>
$(function(){
    $('#myCarousel.slide').carousel({
        interval: 5000,
        pause: "hover"
    });

    $('input').focus(function(){
       $("#myCarousel").carousel('pause');
    }).blur(function() {
       $("#myCarousel").carousel('pause');
    });
});
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  </style><div class="breadcumb-area bg-img" style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Success Stories</h2>
        </div>	
    </div><br><br>
<div class="container">

  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
 
    
   
    <div class="carousel-inner" role="listbox">
    
                                <div class="item active">  
                                     <div class="single-blog-post mb-50 wow fadeInUp" > 
                                     
                                        <iframe width="1050" height="600" src="{{URL::to('https://www.youtube.com/embed/pujwfwYVo0Q')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </iframe> 
                                          
                                    </div> 
                                    
                                </div>

                                <div class="item">  
                                     <div class="single-blog-post mb-50 wow fadeInUp" > 
                                     <iframe width="1050" height="600" src="{{URL::to('https://www.youtube.com/embed/ZUQOD0vQD68')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                    </div> 
                                </div>
                                                         
     </div>                         
         
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
@endsection
