@extends('admin.dashboard.layouts.app')
@section('content')
<!--<a href="{{url('admin/customers/add_customers')}}">ADD</a>-->
<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Suppliers</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Supplier</a></li>
      <li class="breadcrumb-item active">Add Supplier</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Product</h5>
                    <form action="{{url('admin/suppliers/add_suppliers')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Supplier Name :</label>
                            <div class="col-sm-10">
                                <input type="text" name="supplier_name" class="form-control" required/>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Supplier Email :</label>
                            <div class="col-sm-10">
                                <input type="email" name="supplier_email" class="form-control" required/>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Contact Number :</label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_number" class="form-control" required/>
                            </div>
                        </div><br>
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Address :</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" required/>
                            </div>
                        </div>
                        <br>
                       
                   
                        <div class="row md-3">
                        <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</textarea>
                            </div>
                        </div>
                    </form> 
              </div>
            </div>
        </div>
    </div>
</section>
@endsection
