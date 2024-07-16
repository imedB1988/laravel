@extends('admin.dashboard.layouts.app')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
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
                <a href="{{url('admin/products/add_products')}}" class="btn btn-primary">Add Products</a>
              
              </h5>

              <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Product Name</th>
                    
                      <th scope="col">Action</th>
                    </tr>
                  </thead> 
                 <tbody>
                  @foreach($getRecord as $value)
                 <tr>
                      <th scope="row">{{$value->id}}</th>
                      <td>{{$value->productname}}</td>
                     
                      
                     <td><a href="{{url('admin/products/edit_products/'.$value->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                     <a href="{{url('admin/products/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete ?')"><i class="bi bi-trash"></i></a>
                      </td>
                      
                    </tr>
                  @endforeach
                </tbody>
              </table>
                </div>
            </div>
</div>
</div>
            
    </section>

  </main><!-- End #main -->
@endsection
