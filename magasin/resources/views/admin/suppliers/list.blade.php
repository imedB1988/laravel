@extends('admin.dashboard.layouts.app')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Suppliers List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Suppliers</li>
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
                <a href="{{url('admin/suppliers/add_suppliers')}}" class="btn btn-primary">Add Supplier</a>
              
              </h5>

              <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Supplier Name</th>
                      <th scope="col">Supplier Email</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Address</th>
                    
                      <th scope="col">Action</th>
                    </tr>
                  </thead> 
                 <tbody>
                  @foreach($getRecord as $value)
                 <tr>
                      <th scope="row">{{$value->id}}</th>
                      <td>{{$value->supplier_name}}</td>
                      <td>{{$value->supplier_email}}</td>
                      <td>{{$value->contact_number}}</td>
                      <td>{{$value->address}}</td>
                      
                     
                      
                     <td><a href="{{url('admin/suppliers/edit_suppliers/'.$value->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                     <a href="{{url('admin/suppliers/delete/'.$value->id)}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete ?')"><i class="bi bi-trash"></i></a>
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
