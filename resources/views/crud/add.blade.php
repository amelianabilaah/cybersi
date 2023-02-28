
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
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content"> 
        <div class="card card-info card-outline">
            <div class="card-header">
              <h3>Input Data Profil Lulusan</h3>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                Mohon inputkan data dengan benar<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
            @endif
            <div class="card-body">
               <form action="{{ route('cybersi.store') }}" method="post">
                @csrf

                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" id="kode" name="kode" class="form-control" placeholder="Kode">
                </div>
                <div class="form-group">
                  <label>Deskripsi Profil Lulusan</label>
                  <input type="text" id="deskripsiPL" name="deskripsiPL" class="form-control" placeholder="Deskripsi Profil Lulusan">
                </div>
                <div class="form-group">
                  <label>Deskripsi Prodi</label>
                  <input type="text" id="deskripsiProdi" name="deskripsiProdi" class="form-control" placeholder="Deskripsi Prodi">
                </div>
                <div class="form-group">
                  <label>Deskripsi Aptikom</label>
                  <input type="text" id="deskripsiAptikom" name="deskripsiAptikom" class="form-control" placeholder="Deskripsi Aptikom">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
               </form>
            </div>
        </div>

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