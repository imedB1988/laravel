@extends('admin.dashboard.layouts.app')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Customer List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Customers</li>
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
                <a href="{{url('admin/customers/add_customers')}}" class="btn btn-primary">Add Customer</a>
              
              </h5>

              <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Address</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead> 
                 <tbody>
                 <tr>
                      <th scope="row">ID</th>
                      <td>Name</td>
                      <td>Email</td>
                      <td>Email</td>
                    </tr>
                  
                </tbody>
              </table>
                </div>
            </div>
</div>
</div>
            
    </section>

  </main><!-- End #main -->
@endsection
