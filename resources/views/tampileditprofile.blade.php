@extends('layouts.myprofile')
@section('container')
<center>
    <h3> Profil Saya </h3>
    <br>
</center>
<div class="container">
    <div class="row">
      <div class="col">
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
      <div class="card">
        <img src={{asset $data->foto}} class="card-img-top" alt="..." style="width: 100px;">
        <div class="card-body">
          <h5 class="card-title">Halo, Tria! Selamat Datang di Krone Hair Design!</h5>
      </div>
    </div>
</div>
<div class="col">
   <h5>Nama</h5>
   <p>{{ $data->nama }}</p>
   <h5>Email</h5>
   <p>{{ $data->email }}</p>
   <h5>Password</h5>
   <p>********</p>
   <h5>Nomor Telepon</h5>
   <p>{{ $data->notelp }}</p>
   <h5>Alamat</h5>
   <p>{{ $data->alamat }}</p>
    <a href="/tampilprofile/{{$data->id}}" class="btn btn-warning" role="button">Ubah Profil
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="dark" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
  </a>
    </div>
</div>

@endsection