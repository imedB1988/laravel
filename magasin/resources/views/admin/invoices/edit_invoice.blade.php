@extends('admin.dashboard.layouts.app')
@section('content')
<!--<a href="{{url('admin/customers/add_customers')}}">ADD</a>-->
<main id="main" class="main">

<div class="pagetitle">
  <h1>Update Invoice</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Invoices</a></li>
      <li class="breadcrumb-item active">Update Invoice</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Invoice</h5>
                    <form action="{{url('admin/invoices/edit_invoice/'.$oldRecord->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Invoice Date :</label>
                            <div class="col-sm-10">
                                <input type="date" name="invoices_date" class="form-control" required value="{{$oldRecord->invoices_date}}"/>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Customer ID :</label>
                            <div class="col-sm-10">
                               <!-- <input type="text" name="customers_id" class="form-control" required/>-->
                               <div class="col-sm-10">
                                <select class="form-control" name="customers_id" required>
                                        <option value="">Select Customer Name</option>
                                        @foreach($getRecord as $value)
                                        <option {{($value->id == $oldRecord->customers_id)  ? 'selected' : '' }} value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                
                            </div>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Product Name :</label>
                            <div class="col-sm-10">
                               <!-- <input type="text" name="customers_id" class="form-control" required/>-->
                               <div class="col-sm-10">
                                <select class="form-control" name="productid" required>
                                        <option value="">Select Product Name</option>
                                        @foreach($getRecords as $value)
                                        <option {{($value->id == $oldRecord->productid)  ? 'selected' : '' }} value="{{$value->id}}">{{$value->productname}}</option>
                                        @endforeach
                                    </select>
                                
                            </div>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Quantity :</label>
                            <div class="col-sm-10">
                                <input type="text" name="quantity" class="form-control" required value="{{$oldRecord->quantity}}"/>
                            </div>
                        </div>
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
