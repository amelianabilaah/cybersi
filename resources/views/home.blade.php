
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content"> 
      {{-- <div class="card card-info card-outline">
          <div class="card-header">
              <div class="card-tools">
                  
              </div>
          </div>
           --}}
          <div class="card-body">
           <div class="grid-row-2" style="margin: 55px">
              <div class="grid-cols-3" style="margin-bottom: 55px">
                <a href="/"> 
                  <svg width="320" height="170" style="margin-right: 45px">
                    <rect width="320" height="170" rx="20" ry="20" style="fill:rgb(0, 0, 0);" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="font-family: 'Trebuchet MS'; fill:white; font-size:25px">Mata Kuliah</text>
                  </svg>
                </a>
                <a href="/"> 
                  <svg width="320" height="170" style="margin-right: 45px">
                    <rect width="320" height="170" rx="20" ry="20" style="fill:rgb(0, 0, 0);" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="font-family: 'Trebuchet MS'; fill:white; font-size:25px">Bahan Kajian</text>
                  </svg>
                </a>
                <a href="/"> 
                  <svg width="320" height="170" style="margin-right: 45px">
                    <rect width="320" height="170" rx="20" ry="20" style="fill:rgb(0, 0, 0);" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="font-family: 'Trebuchet MS'; fill:white; font-size:25px">CPMK</text>
                  </svg>
                </a>
              </div>
              <div class="grid-cols-2" style="padding-left: 180px">
                <a href="/"> 
                  <svg width="320" height="170" style="margin-right: 45px">
                    <rect width="320" height="170" rx="20" ry="20" style="fill:rgb(0, 0, 0);" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="font-family: 'Trebuchet MS'; fill:white; font-size:25px">Data Lulusan Mahasiswa</text>
                  </svg>
                </a>
                <a href="/"> 
                  <svg width="320" height="170" style="margin-right: 45px">
                    <rect width="320" height="170" rx="20" ry="20" style="fill:rgb(0, 0, 0);" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="font-family: 'Trebuchet MS'; fill:white; font-size:25px">Data Mahasiswa</text>
                  </svg>
                </a>
              </div>
           </div>
              
            
          </div>
      {{-- </div> --}}

  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">

    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
 @include('template.script')