@extends('admin.dashboard.layouts.app')
@section('content')
<!--<a href="{{url('admin/customers/add_customers')}}">ADD</a>-->
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Product Stock</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Product Stock</a></li>
      <li class="breadcrumb-item active">Edit Product Stock</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Product Stock</h5>
                    <form action="{{url('admin/productstock/edit_stock/'.$oldRecord->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Product Name :</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="productid" required>
                                        <option  value="">Select Product Name</option>
                                        @foreach($getRecord as $value)
                                        <option {{($value->id == $oldRecord->productid)  ? 'selected' : '' }} value="{{$value->id}}">{{$value->productname}}</option>
                                        @endforeach
                                    </select>
                                
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Batch ID :</label>
                            <div class="col-sm-10">
                                <input type="text" name="batchid" class="form-control" value="{{$oldRecord->batchid}}" required/>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Expiry Date :</label>
                            <div class="col-sm-10">
                                <input type="date" name="expiry_date" class="form-control" value="{{$oldRecord->expiry_date}}" required/>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Quantity :</label>
                            <div class="col-sm-10">
                                <input type="number" name="quantity" class="form-control" value="{{$oldRecord->quantity}}" required/>
                            </div>
                        </div>
                        <br>
                       
                        <br>
                        <div class="row md-3">
                        <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</textarea>
                            </div>
                        </div>
                    </form> 
              </div>
            </div>
        </div>
    </div>
</section>
@endsection
