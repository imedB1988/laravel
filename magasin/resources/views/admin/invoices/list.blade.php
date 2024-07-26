@extends('admin.dashboard.layouts.app')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Invoices List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Invoices</li>
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
                <a href="{{url('admin/invoices/add_invoices')}}" class="btn btn-primary">Add Invoices</a>
              
              </h5>
              <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      
                      <th scope="col">Invoice Date</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Quantity</th>
                
                    </tr>
                  </thead> 
                 <tbody>
                  @foreach($getRecord as $value)
                 <tr>
                      <th scope="row">{{$value->id}}</th>
                      <td>{{date('d-m-Y', strtotime($value->invoices_date))}}</td>
                      <td>{{!empty($value->getCustomersNames->name) ? $value->getCustomersNames->name : ''}}</td>
                      <td>{{!empty($value->getProductNames->productname) ? $value->getProductNames->productname : ''}}</td>
                      <td>{{$value->quantity}}</td>
                      <td><a href="{{url('admin/invoices/edit_invoice/'.$value->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                     <a href="{{url('admin/invoices/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete ?')"><i class="bi bi-trash"></i></a>
                     <a href="{{url('admin/invoices/changeStock/'.$value->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i>change stock</a>
                     <a class="btn btn-success" href="">Export PDF</a>
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
