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
              <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Product Name </th>
                      <th scope="col">Batch ID</th>
                      <th scope="col">Expiry Date</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Updated At</th>
                      <th scope="col">Created At</th>
                    </tr>
                  </thead> 
                 <tbody>
                  @foreach($getRecord as $value)
                 <tr>
                      <th scope="row">{{$value->id}}</th>
                      <td>{{!empty($value->getProductNames->productname) ? $value->getProductNames->productname : ''}}</td>
                      <td>{{$value->batchid}}</td>
                      <td>{{date('d-m-Y', strtotime($value->expiry_date))}}</td>
                      <td>{{$value->quantity}}</td>
                      <td>{{date('d-m-Y', strtotime($value->updated_at))}}</td>
                      <td>{{date('d-m-Y', strtotime($value->created_at))}}</td>
                     <td><a href="{{url('admin/productstock/edit_stock/'.$value->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                     <a href="{{url('admin/productstock/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete ?')"><i class="bi bi-trash"></i></a>
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
