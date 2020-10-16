@extends('layouts.app')

@section('content')

@php 
    $reservation_all=DB::table('reservation')
                    ->join('qualification', 'qualification.qualification_id', 'reservation.qualification_id')
                    ->get();
@endphp


<script>
        function printContent(el)
        {
            var restorepage=document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }

</script>
<script>
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
    

</script>

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- HTML5 Export Buttons table start -->
                                <div class="card">
                                    <div class="card-header table-card-header">
                                        <h3>List of Reservation </h3>

                                     
                                        <a href="{{URL::to('/resList')}}" >
                                            <style>
                                                .btn-success {
                                                        margin-right: 5px;
                                                    }
                                            </style>
                                            <button class="btn btn-success" id="print" onclick="printContent('div-id-name')" style="float: right;">Print</button> 
                                            
                                            
                                        </a>  
                                      
                                        <button class="btn btn-success" id="print" onclick="exportTableToExcel('dom-table', 'List-of-Reservations')" style="float: right;">Excel</button> 
                      
                                   
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <div class="container" id="div-id-name">
                                            <table id="dom-table" class="table table-bordered nowrap" >
                                            
                                                <thead>
                                                
                                                    <tr>    
                                                            <th>Full Name</th> 
                                                            <th>Contact No.</th>
                                                            <th>Gender</th>
                                                            <th>Age</th>
                                                            <th>Address</th>
                                                            <th>Qualification</th>
                                                            <th>Educational Attainment</th>
                                                            <th>Reserved Date</th>
                                                            <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($reservation_all as $reservation_all)
                                                    <tr>
                                                        <td>{{ucwords(trans($reservation_all->res_lname))}} {{ucwords(trans($reservation_all->res_fname))}} {{ucwords(trans($reservation_all->res_mname))}} </td>
                                                        <td>{{$reservation_all->res_contact}}</td>
                                                        <td>{{$reservation_all->res_gender}}</td>
                                                        <td>{{$reservation_all->res_age}}</td>
                                                        <td>{{ucwords(trans($reservation_all->res_city))}} {{ucwords(trans($reservation_all->res_province))}}</td>
                                                        <td>{{$reservation_all->qualification_title}}</td>
                                                        <td>{{$reservation_all->res_educational}}</td>
                                                        <td>{{$reservation_all->registeredDate}}</td>
                                                   
                                                        <td class="dropdown">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                            <div class="dropdown-menu dropdown-menu-right b-none">
                                                                <a class="dropdown-item" href="{{ URL::to('/viewReserved/'.$reservation_all->res_id) }}"><i class="icofont icofont-edit"></i>View</a>
                                                                <a class="dropdown-item" href="{{URL::to('/resDelete/'.$reservation_all->res_id)}}"id="delete"><i class="icofont icofont-edit"></i>Delete</a> 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                            </table>
    </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- HTML5 Export Buttons end -->
                                
                                
                                
                                <!-- Custom File (JSON) table end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
       
    </div>
    </div>  

@endsection