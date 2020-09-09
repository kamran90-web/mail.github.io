@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 20px;">
    
    <br/>
    <div class="container">
    <form action="{{ route('store') }}" method="POST">
        @csrf
       
        <div class = "card" style = "width:100%">
                            <div class = "card-header">Add Menu</div>
                            <div class = "card-body">
                     
                            <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>category</th>
                
            </tr>
            <tr>  
                <td><input type="text" name="name" placeholder="Enter Name" class="form-control" /></td>  
                <td><select name="qty" id="qty" style = "width:170px;height:33px">
                <option disabled selected>Select your Quantity</option>
                <option value3="quarter" name="quarter" class="form-control" />Quarter</option>
                <option value4="half" name="half" class="form-control" />Half kg</option>
                <option value5="full" name="full" class="form-control" />Full kg</option>
                </select</td>
                <td><input type="text" name="price" placeholder="Enter Price" class="form-control" /></td>
                <td><select name="category" id="category" style = "width:150px;height:33px">
                <option disabled selected>Select your taste</option>
                <option value1="veg" name="[veg" class="form-control" />Vegeterian</option>
                <option value2="nonveg" name="nonveg" class="form-control" />Non-Vegeterian</option>
                </select</td>
                  
            </tr>  
        </table> 
        <button type="submit" class="btn btn-success">Save</button>
        <button type="submit" class="btn btn-danger">Back</button>
    </form>
        </div>
     
<style type="text/css">
    .card-header {
        border-radius: .625rem !important;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 
                    0 0.9375rem 1.40625rem rgba(90,97,105,.1), 
                    0 0.25rem 0.53125rem rgba(90,97,105,.12), 
                    0 0.125rem 0.1875rem rgba(90,97,105,.1);
    }
</style>



@endsection