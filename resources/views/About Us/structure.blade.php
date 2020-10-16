@extends('layoutEvery')
@section('content')


<div class="breadcumb-area bg-img" style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
<div class="bradcumbContent">
    <h2>Organizational Structure</h2>
</div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Elements Area Start ##### -->
<section class="elements-area mt-50">
<div class="container">
<br>
<img class='zoom' src="{{asset('asset/img/3.jpg')}}" alt='Daisy!' />


</div>
<br><br><br>
</section>
<!-- ***** Elements Area End ***** -->

<script src="{{asset('asset/js/wheelzoom.js')}}"></script>
<script>
wheelzoom(document.querySelector('img.zoom'));
</script>
    


@endsection