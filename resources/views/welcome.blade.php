
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
            <h1 class="m-0">Data Profil Lulusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Profil Lulusan</li>
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
              <div class="card-tools">
                  <a href="{{ route('cybersi.create') }}" class="btn btn-primary">Add Data</a>
              </div>
          </div>
          
          <div class="card-body">
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
            @endif
              <table class="table table-bordered">
                
                  <tr style="text-align: center">
                      <th>Kode</th>
                      <th>Deskripsi Profil Lulusan</th>
                      <th>Deskripsi Prodi</th>
                      <th>Deskripsi Aptikom</th>
                      <th>Action</th>
                 
                
                  </tr>
                  @foreach ($var1 as $item)
                  <tr  style="text-align: justify">
                      <td>{{ $item->kode}}</td>
                      <td>{{ $item->deskripsiPL}}</td>
                      <td>{{ $item->deskripsiProdi}}</td>
                      <td>{{ $item->deskripsiAptikom}}</td>
                      <td>       
                                             
                        <form action="{{ route('cybersi.destroy',$item->id) }}" method="post">
                          <a class="fas fa-edit" href="{{ route('cybersi.edit',$item->id) }}"></a>
                          @csrf
                          <a>|</a>
                          @method('Delete')
                          <button onclick="return confirm('Data yang dipilih akan dihapus, apakah anda yakin ?')" style="padding:0; border:none; background:none"><a class="fas fa-trash-alt" style="color:red"></a></button>
                        </form>
                      </td>
                  </tr>                    
                  @endforeach
              </table>
            
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