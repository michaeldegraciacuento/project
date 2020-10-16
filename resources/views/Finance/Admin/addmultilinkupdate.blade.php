@extends('layouts.fin')
@section('content')
@php
        $months=DB::table('month_table_update');
@endphp



<link rel="stylesheet" id="bootstrap-css" href="{{ URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}">
<script src="{{ URL::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('https://code.jquery.com/jquery-1.11.1.min.js') }}"></script>

<script>
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";        
        cols += '<td width="10%"><input type="text" class="form-control"required=""  name="linkupdate_year[]' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" required="" name="linkupdate_url[]' + counter + '"/></td>';
   

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger " required="" value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});
function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}
function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>

<style>
.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 10%;
}
</style>

<body> 
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                <form method="post" action="{{ URL::to('/eaddmultilinkupdate')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="card-header table-card-header">
                                        <h3>Update URL Link<button class="btn btn-success" style="float: right;">Submit</button> </h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive" >
                                        
                                            <table id="myTable" class=" table order-list">
                                            <thead>
                                                <tr>
                                                    
                                                    <td>Title Description:</td>
                                                    <td width="10%" >
                                                        <input width="100%" height="100%" type="text"id="name" value="" name="linkupdate_headrep" required="" class="form-control"/>
                                                    </td>
                                                    
                                                </tr>
                                                
                                                    <td>Sub Title:</td>
                                                        <td width="10%" >
                                                            <input width="100%" height="100%" type="text"id="name" required=""value="" name=""  class="form-control"/>
                                                        </td>
                                                
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <td>Year/Qrt</td>
                                                    <td >URL</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="10%" height="10">
                                                        <input width="100%" height="100%" type="text" id="name" value=""name="linkupdate_year[]"  required="" class="form-control"/>
                                                    </td>
                                                    <td width="90%" >
                                                        <input type="text" id="name" value="" name="linkupdate_url[]"  required="" class="form-control"/>
                                                    </td>
                                                    <td class="col-sm-2"><a class="deleteRow"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                                    <div class="wrapper" >
                                                        <td>
                                                        <label class="col-sm-2"></label>
                                                        <div class="col-sm-50">
                                                            <input type="button" class="btn btn-success " id="addrow" value="Add Row" />
                                                        </td>
                                                    <div>    
                                            </table>
                                        </div>
                                    </div>
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

    
@endsection

