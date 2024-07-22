  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='dashboard')@else collapsed @endif" href="{{url('admin/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='customers')@else collapsed @endif" href="{{url('admin/customers')}}">
          <i class="bi bi-person"></i>
          <span>Customers</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='products')@else collapsed @endif" href="{{url('admin/products')}}">
        <i class="bi bi-box-seam-fill"></i>
          <span>Products</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='productstock')@else collapsed @endif" href="{{url('admin/productstock')}}">
        <i class="bi bi-database-fill"></i>
          <span>Products Stocks</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='suppliers')@else collapsed @endif" href="{{url('admin/suppliers')}}">
        <i class="bi bi-people-fill"></i>
          <span>Suppliers</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='invoices')@else collapsed @endif" href="{{url('admin/invoices')}}">
        <i class="bi bi-card-list"></i>
          <span>Invoices</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='myaccount')@else collapsed @endif" href="{{url('admin/myaccount')}}">
        <i class="bi bi-gear"></i>
          <span>My Account</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)=='logout')@else collapsed @endif"  href="{{url('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
          <span>Sign out</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

          </ul>

  </aside><!-- End Sidebar-->
