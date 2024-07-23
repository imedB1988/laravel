@extends('admin.dashboard.layouts.app')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

              
                <div class="card-body">
                  <h5 class="card-title">Users <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$user->count()}}</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

               

                <div class="card-body">
                  <h5 class="card-title">Products</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$product->count()}}</h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

               

                <div class="card-body">
                  <h5 class="card-title">Product stock</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$productstock->count()}}</h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

              
                <div class="card-body">
                  <h5 class="card-title">Suppliers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$supplier->count()}}</h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

              
                <div class="card-body">
                  <h5 class="card-title">Invoices</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$invoice->count()}}</h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

           

        

       

      

          </div>
        </div><!-- End Left side columns -->

       
      </div>
    </section>

  </main><!-- End #main -->
@endsection
