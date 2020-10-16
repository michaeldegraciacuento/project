@extends('layoutForCSSPage')
@section('content')

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Calendar</h3>
                </div>
            </div>
        </div>
    </div>
</div>
         
<div class="about_mission">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-xl-12 col-md-6">
                    <div class="about_text">
                        <h4>Training Calendar: </h4>
                        <p>
                            <a href="{{URL::to('https://drive.google.com/open?id=11NBbS-Vg2o70IAuqPUBfC3C2XiSGwAGY')}}"> TRAINING CALENDAR 2016 </a>
                            
                        </p>  
                        <p>
                            <a href="{{URL::to('https://drive.google.com/open?id=1VFWcvPTJdzhFc9L6E1eAhhmqplw4U_Ws')}}"> TRAINING CALENDAR 2017 </a>
                        </p>
                        <br>
                        <h4>Assessment Schedule:</h4>
                        <p>
                            <a href="{{URL::to('https://drive.google.com/open?id=152n7nmbUBoC9BbWADWWHGEr_zYgef5HQ')}}"> ASSESSMENT SCHEDULE 2015</a>
                        </p> 
                        <p>
                            <a href="{{URL::to('https://drive.google.com/open?id=11IacTOwwQtoA4qXENOOeq3AGNvGj1ICh')}}"> ASSESSMENT SCHEDULE 2016</a>
                        </p>  
                        <p>
                            <a href="{{URL::to('https://drive.google.com/open?id=1TK7jvvz0afEArql9gctpJazO-jC-ShmE')}}"> ASSESSMENT SCHEDULE 2017</a>
                        </p>  
                        <br>
                        <h4>Institutional SAG:</h4>
                        <p>
                            <a href="{{URL::to('https://drive.google.com/open?id=1--kBNPRkhOgk3znciqOWUs3988FGi4ju')}}"> SELF ASSESSMENT GUIDE</a>
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection