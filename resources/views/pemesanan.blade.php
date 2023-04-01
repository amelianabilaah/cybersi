@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 25rem;">
            <div class="card-header bg-light" style="text-align:center">
              Tata Cara Pemesanan Layanan Krone Hair Design
              <img src="FileMedia\tempat salon 2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            @foreach ($cara as $cara)
    <ul class = "list-group list-group-flush">
        <li class="list-group-item" >{{ $cara["list"] }}</li>
    </ul>
    @endforeach
          </div>
    </div>
    <div class="col-8">
        <form action="insertpesanan" method="POST" enctype="multipart/form-data" class="card-text">
          @csrf
            <h3 style="text-align:center"> Form Pemesanan </h3>
            <div class="mb-1">
                <label for="exampleInputName" class="form-label">Nama</label>
                <input type="name" name="nama" class="form-control" id="exampleInputName1">
              </div>
              <div class="mb-1">
                <label for="exampleInputNumber" class="form-label">Nomor HP</label>
                <input type="string" name="nomorhp" class="form-control" id="exampleInputNumber1">
              </div>
            <div class="mb-1">
              <label for="exampleInputTgl1" class="form-label">Tanggal Layanan</label>
              <input type="date" name="tanggallayanan" class="form-control" id="exampleInputTgl1">
            </div>
            <div class="mb-1">
                <label for="exampleInputTime" class="form-label">Waktu Layanan</label>
                <input type="time" name="waktulayanan" class="form-control" id="exampleInputTime1">
              </div>
              <label for="exampleInputJenis" class="form-label">Jenis Layanan</label>
              <select class="form-select" name="jenislayanan" aria-label="Default select example">
                <option selected>Pilih jenis layanan yang diinginkan</option>
                <option value="Hair Treatment">Hair Treatment</option>
                <option value="Nail Treatment">Nail Treatment</option>
                <option value="Body Treatment">Body Treatment</option>
              </select>
              <div class="mb-1">
                <label for="exampletreatmentName1" class="form-label">Nama Layanan</label>
                <input type="treatmentName" name="namalayanan" class="form-control" id="exampletreatmentName1">
              </div>
            <center class = "mb-3 mt-3">
            <button style="text-align:center" type="submit" class="btn btn-dark bg-dark ">Pesan Layanan</button>
            </center>
          </form>
    </div>
    <center>
          <div class="row mt-4">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="FileMedia\hairstyle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">HAIR TREATMENT</h5>
                  <p class="fs-6" class="card-text">Hair Treatment merupakan layanan perawatan rambut yang ada di Krone Hair Design Salon. Layanan terdiri dari Hair Cut, Hair Color, Smoothing, Keratin, K-perm.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/300x235/?nail" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">NAIL TREATMENT</h5>
                  <p class="fs-6" class="card-text">Nail Treatment merupakan layanan perawatan kuku yang ada di Krone Hair Design. Terdapat berbagai layanan menarik seperti nail art dan nail design. Ada harga khusus untuk Wedding Package!</p>
                </div>
              </div>
            </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img src="https://source.unsplash.com/300x235/?spa" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BODY TREATMENT</h5>
                    <p class="fs-6" class="card-text">Body Treatment merupakan layanan perawatan tubuh yang ada di Krone Hair Design. Body Treatment menyediakan layanan body scrub dan body reflexy yang akan memanjakan tubuh Anda.</p>
                  </div>
                </div>
              </div>
          </div>
    </center>
    </div>
  </div>
@endsection

