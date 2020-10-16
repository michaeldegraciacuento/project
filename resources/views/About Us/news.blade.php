@extends('layoutEvery')
@section('content')

@php

    $news_all_info=DB::table('news')
                ->get();

@endphp

  <div class="breadcumb-area bg-img" style="background-image: url({{asset('asset/img/bg-img/breadcumb.jpg')}});">
        <div class="bradcumbContent">
            <h2>Weekly Activity Reports</h2>
        </div>
    </div>
    <br><br><br><br>
    <section class="elements-area mt-20 ">
    <div class="container">
        
                    <h4>News And Updates  </h4>
                    <style>
                    table {
                        font-family: arial, sans-serif;
            
                        width: 100%;
                    }

                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                  
                    textarea {
                        resize: none;
                    }
                    </style >
                        <table>
                            
                            <tr>
                                <th colspan="6" >ESTABLISHMENT PROFILE</th>
                                
                            </tr>
                            <tr>
                                <th>Activities Attended/Conducted</th>
                                <th>Venue</th>
                                <th>Date</th>
                                <th>Partner</th>
                                <th>Objective/Outcome/Remarks</th>
                                <th >Photos    </th>
                            </tr>
                            
                            @foreach($news_all_info as $news_all_info)
                        
                            <tr>
                        
                                <td><textarea style="border: none" readonly rows="5" cols="15">{{ $news_all_info->news_conducted }}</textarea></td>
                                <td><textarea style="border: none" readonly rows="5" cols="15">{{ $news_all_info->news_venue }}</textarea></td>
                                <td><textarea style="border: none" readonly rows="5" cols="15">{{ $news_all_info->news_date }}</textarea></td>
                                <td><textarea style="border: none" readonly rows="5" cols="15">{{ $news_all_info->news_partner }}</textarea></td>
                                <td ><textarea style="border: none" readonly rows="5" cols="30">{{ $news_all_info->news_oor}}.</textarea></td>
                                <td >
                                      
                                                    <a href="{{URL::to($news_all_info->news_image)}}"  data-lightbox="1" data-title="">
                                                        <p width="100" height="100"><img src="{{URL::to($news_all_info->news_image)}}" style="width:150px" alt=""  class="img-fluid img-thumbnail"></p>
                                                    </a>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    <br><br>
       
                    </div>
            </section>


@endsection