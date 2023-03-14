<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.layouts.head')
</head>

<body>
  <div class="app-admin-wrap">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')
    <!--=============== Left side End ================-->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
      <div class="breadcrumb">
        <h1>@yield('title')</h1>
      </div>

      <div class="separator-breadcrumb border-top"></div>

      @section('main-content')

      @show

      <!-- Footer Start -->
      <div class="flex-grow-1"></div>
      <div class="app-footer">
        <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
          <span class="flex-grow-1"></span>
          <div class="d-flex align-items-center">
            <img class="logo" src="assets/images/logo.jpg" alt="">
            <div>
              <p class="m-0">&copy; 2019-{{Carbon\carbon::now()->year}}</p>
              <p class="m-0">All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
      <!-- fotter end -->
    </div>
    <!-- ============ Body content End ============= -->
  </div>
  <!--=============== End app-admin-wrap ================-->

  <!-- ============ Search UI Start ============= -->
  {{-- <div class="search-ui">
    <div class="search-header">
      <img src="assets/images/logo.png" alt="" class="logo">
      <button class="search-close btn btn-icon bg-transparent float-right mt-2">
        <i class="i-Close-Window text-22 text-muted"></i>
      </button>
    </div>

    <input type="text" placeholder="Type here" class="search-input" autofocus>

    <div class="search-title">
      <span class="text-muted">Search results</span>
    </div>

    <div class="search-results list-horizontal">
      <div class="list-item col-md-12 p-0">
        <div class="card o-hidden flex-row mb-4 d-flex">
          <div class="list-thumb d-flex">
            <!-- TUMBNAIL -->
            <img src="assets/images/products/headphone-1.jpg" alt="">
          </div>
          <div class="flex-grow-1 pl-2 d-flex">
            <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
              <!-- OTHER DATA -->
              <a href="" class="w-40 w-sm-100">
                <div class="item-title">Headphone 1</div>
              </a>
              <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
              <p class="m-0 text-muted text-small w-15 w-sm-100">
                $300
                <del class="text-secondary">$400</del>
              </p>
              <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                <span class="badge badge-danger">Sale</span>
              </p>
            </div>

          </div>
        </div>
      </div>
      <div class="list-item col-md-12 p-0">
        <div class="card o-hidden flex-row mb-4 d-flex">
          <div class="list-thumb d-flex">
            <!-- TUMBNAIL -->
            <img src="assets/images/products/headphone-2.jpg" alt="">
          </div>
          <div class="flex-grow-1 pl-2 d-flex">
            <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
              <!-- OTHER DATA -->
              <a href="" class="w-40 w-sm-100">
                <div class="item-title">Headphone 1</div>
              </a>
              <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
              <p class="m-0 text-muted text-small w-15 w-sm-100">
                $300
                <del class="text-secondary">$400</del>
              </p>
              <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                <span class="badge badge-primary">New</span>
              </p>
            </div>

          </div>
        </div>
      </div>
      <div class="list-item col-md-12 p-0">
        <div class="card o-hidden flex-row mb-4 d-flex">
          <div class="list-thumb d-flex">
            <!-- TUMBNAIL -->
            <img src="assets/images/products/headphone-3.jpg" alt="">
          </div>
          <div class="flex-grow-1 pl-2 d-flex">
            <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
              <!-- OTHER DATA -->
              <a href="" class="w-40 w-sm-100">
                <div class="item-title">Headphone 1</div>
              </a>
              <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
              <p class="m-0 text-muted text-small w-15 w-sm-100">
                $300
                <del class="text-secondary">$400</del>
              </p>
              <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                <span class="badge badge-primary">New</span>
              </p>
            </div>

          </div>
        </div>
      </div>
      <div class="list-item col-md-12 p-0">
        <div class="card o-hidden flex-row mb-4 d-flex">
          <div class="list-thumb d-flex">
            <!-- TUMBNAIL -->
            <img src="assets/images/products/headphone-4.jpg" alt="">
          </div>
          <div class="flex-grow-1 pl-2 d-flex">
            <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
              <!-- OTHER DATA -->
              <a href="" class="w-40 w-sm-100">
                <div class="item-title">Headphone 1</div>
              </a>
              <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
              <p class="m-0 text-muted text-small w-15 w-sm-100">
                $300
                <del class="text-secondary">$400</del>
              </p>
              <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                <span class="badge badge-primary">New</span>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- PAGINATION CONTROL -->
    <div class="col-md-12 mt-5 text-center">
      <nav aria-label="Page navigation example">
        <ul class="pagination d-inline-flex">
          <li class="page-item">
            <a class="page-link" href="dashboard.v1.html#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="dashboard.v1.html#">1</a></li>
          <li class="page-item"><a class="page-link" href="dashboard.v1.html#">2</a></li>
          <li class="page-item"><a class="page-link" href="dashboard.v1.html#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="dashboard.v1.html#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div> --}}
  <!-- ============ Search UI End ============= -->

  @include('admin.layouts.footer')
</body>

</html>