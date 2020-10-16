@extends('layoutEvery')
@section('content')


    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>TVET Programs</h2>
        </div>	
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
			<a href="{{URL::to('centerbasedd')}}" class="btn academy-btn btn-sm mt-15">Institution-Based Programs</a>
			<p>These refer to training provisions being undertaken in the TESDA Regional (15) and Provincial (45) Training Centers totaling 60 in selected trade areas in the different regions and provinces in the country.</p>
			<a href="{{URL::to('/cbprograms')}}" class="btn academy-btn btn-sm mt-15">Community-Based Programs</a>
			<p align="justify">Community-based Training for Enterprise development Program is primarily addressed to the poor and marginal groups, those who cannot access, or are not accessible by formal training provisions. They have low skills, limited management abilities, and have few economic options. They have no access to capital – most of them are unqualified for formal credit programs. The program goes further than just mere skills training provision. It is purposively designed to catalyzed the creation of livelihood enterprises that shall be implemented by the trainees, immediately after the training. Likewise, it is designed to assist partner agencies such as LGUs, NGOs, people organizations and other agencies organizations with mission to help the poor get into productive undertakings to help themselves and their communities.</p>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->
@endsection