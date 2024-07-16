@extends('admin.dashboard.layouts.app')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products Stock</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Products Stock</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          @include('_message')
          <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                <a href="{{url('admin/productstock/add_stock')}}" class="btn btn-primary">Add New Product Stock</a>
              
              </h5>

             
                </div>
            </div>
</div>
</div>
            
    </section>

  </main><!-- End #main -->
@endsection
