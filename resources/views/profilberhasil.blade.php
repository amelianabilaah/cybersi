@extends('layouts.myprofile')

@section('container')
    <center>
      <br>
      <br>
      <i class="bi bi-light bi-check-square-fill bg-warning" ></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
      </svg>
      <br>
      <br>
      <br>
      <h5> Selamat! Anda berhasil mengubah profil!
      </h5>
      <br>
      <br>
      <a href="/" style="text-align:center" class="btn btn-dark bg-warning" >Back</a>
      <br>
    </center>
      <footer class="mt-5">
    <center>
    <div class="grid bg-secondary">
      <h4 class="text-light">Krone Hair Design</h4>
      <p class="text-light">Jl. Kemanggisan Raya No.39, RW.7, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</p>
      <h5 class="text-light mt-4"> FIND US ON OUR SOCIAL MEDIA </h5>
      <div class="container">
        <div class="row text-light">
          <div class="col">
            Instagram : @kronehairdesign
          </div>
          <div class="col">
            Twitter : @kronehairdesign
          </div>
          <div class="col">
            Facebook : Krone Hair Design
          </div>
          <div class="col">
            Telepon: 0812-8687-1358
          </div>
        </div>
        <h1 class="text-light">...</h1>
    </div>
    </center> 
</footer>
@endsection