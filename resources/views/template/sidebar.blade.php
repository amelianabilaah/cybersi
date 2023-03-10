<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('pic/logounair.png') }}" alt="no img..." class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">S1 Sistem Informasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('pic/profiladmin.png') }}" class="img-circle elevation-2" alt="no img...">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/PL" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profil Lulusan               
              </p>
            </a>
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Mata Kuliah
              </p>
            </a>
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CPL
              </p>
            </a>
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CPMK
              </p>
            </a>
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bahan Kajian
              </p>
            </a>
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bobot Penelitian
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>