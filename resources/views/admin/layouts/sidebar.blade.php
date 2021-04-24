<aside class="main-sidebar elevation-4 sidebar-light-navy">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link sidebar-dark navbar-navy">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-header ">
        <div class="image text-center mt-2">
            <img src="{{ asset('assets/dist/img/avatar5.png') }}"
            class="img-circle elevation-2"
            alt="User Image"
            width="60%">
        </div>
        <div class="info pt-2 text-center">
            <h5 class="d-none d-md-inline brand-text"> {{ Auth::user()->name }}</h5>
          </div>
      </div>


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <div class="dropdown-divider"></div>

          <li class="nav-item menu-open">
            <a href="{{ route('admin.home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
    <div class="dropdown-divider"></div>
    <li class="nav-header">Category</li>
        <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Data Category
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ukuran.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Data Ukuran
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Product
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dataCostumer.index') }}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Data Costumer
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Pesanan
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Return Product
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('image') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
