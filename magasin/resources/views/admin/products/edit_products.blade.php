@extends('admin.dashboard.layouts.app')
@section('content')
<!--<a href="{{url('admin/customers/add_customers')}}">ADD</a>-->
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Products</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Products</a></li>
      <li class="breadcrumb-item active">Edit Products</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Products</h5>
                    <form action="{{url('admin/products/edit_products/'.$getRecord->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row md-3">
                            <label class="col-sm-2 col-form-label">Product Name :</label>
                            <div class="col-sm-10">
                                <input type="text" name="productname" class="form-control" required value="{{$getRecord->productname}}"/>
                            </div>
                        </div>
                        <br>
                     
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
