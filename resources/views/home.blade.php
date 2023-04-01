@extends('layouts.main')

@section('container')
<center>
    <h3> Krone Hair Design </h3>
    <p> Krone Hair Design merupakan salon perawatan rambut, kuku, dan juga tubuh. </p>
</center>

<center>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="/FileMedia/salonfix1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="/FileMedia/naildesign.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="/FileMedia/bodyspaa.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
</center>
<div class="row">
    <div class="col-8">
    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/FileMedia/hairstyle.jpg" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">HAIR TREATMENT</h5>
              <p class="card-text">Hair Treatment merupakan layanan perawatan rambut yang ada di Krone Hair Design Salon. Layanan terdiri dari Hair Cut, Hair Color, Smoothing, Keratin, K-perm.</p>
              <p class="card-text"><small class="text-muted">
                <button type="button" class="btn btn-outline-secondary"><a class = "text-black" href="layanan/hair">Pilihan Layanan Hair Treatment</a></button></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 800px; max-height: 200px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/FileMedia/nailart.jpg" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">NAIL TREATMENT</h5>
              <p class="card-text">Nail Treatment merupakan layanan perawatan kuku yang ada di Krone Hair Design. Terdapat berbagai layanan menarik seperti nail art dan nail design. Ada harga khusus untuk Wedding Package!</p>
              <p class="card-text"><small class="text-muted">
                <button type="button" class="btn btn-outline-secondary"><a class = "text-black" href="layanan/nail">Pilihan Layanan Nail Treatment</a></button></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/FileMedia/bspa.jpg" class="img-fluid rounded-start" style="height: 235px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">BODY TREATMENT</h5>
              <p class="card-text">Body Treatment merupakan layanan perawatan tubuh yang ada di Krone Hair Design. Body Treatment menyediakan layanan body scrub dan body reflexy yang akan memanjakan tubuh Anda.</p>
              <p class="card-text"><small class="text-muted">
                <button type="button" class="btn btn-outline-secondary"><a class = "text-black" href="layanan/body"> Pilihan Layanan Body Treatment</a></button></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
        <div class="card text-black bg-warning mb-3" style="max-width: 27rem;">
            <div class="card-header" style="text-align:center">Daftarkan Diri Anda Sebagai Member Untuk Mendapatkan Promo Menarik!</div>
            <div class="card-body">
              <h5 class="card-title text-center">Register Form</h5>
              <form action="/insertdata" method="POST" enctype="multipart/form-data" class="card-text">
                @csrf
                <div class="mb-1">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                  <label for="exampleInputName1" class="form-label">Nama</label>
                  <input type="name" name="nama" class="form-control" id="exampleInputName1">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">  
                </div>
                <div class="mb-1">
                    <label for="exampleInputNoTelp1" class="form-label">No. Telepon</label>
                    <input type="notelp" name="notelp" class="form-control" id="exampleInputNoTelp1">  
                </div>
                <div class="mb-1">
                    <label for="exampleInputAlamat1" class="form-label">Alamat</label>
                    <input type="alamat" name="alamat" class="form-control" id="exampleInputAlamat1">  
                </div>
                <div class="mb-1">
                  <label for="exampleInputFoto1" class="form-label">Foto Profil</label>
                  <input type="file" name="foto" class="form-control">  
              </div>
                <center class = "mt-3">
                <button style="text-align:center" type="submit" class="btn btn-dark bg-dark ">Register</button>
                <p class = "mt-3">Sudah Memiliki Akun?</p>
                <a href="/login" style="text-align:center" class="btn btn-dark bg-dark" >Login</a>
                </center>
              </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection