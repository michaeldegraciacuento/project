@extends('layoutForCSSPage')
@section('content')

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Success Stories</h3>
                </div>
            </div>
        </div>
    </div>
</div>

 <section data-image="img/bg3.jpg" class="project-hight bg-dark-section background-image">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title center">
              <br><br><br>
            </div>
          </div>
          <div class="col-md-12">
            <div class="video-iframe">
            <iframe width="1100" height="600" src="{{URL::to('https://www.youtube.com/embed/ZUQOD0vQD68')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            </div>
          </div>
        </div>
      </div>
    </section>
        
@endsection