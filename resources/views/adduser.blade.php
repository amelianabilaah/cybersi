@extends('layouts.main')
@section('container')
    <center>
        <div class="col-8 mt-7">
            <div class="card text-black bg-warning mt-5" style="max-width: 30rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Register Page</h5>
                  <form action="/insertdata" method="POST" enctype="multipart/form-data" class="card-text" style="text-align: left">
                   @csrf  
                    <div class="mb-1">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('email')
                      <div class="alert alert-danger">{{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-1">
                      <label for="exampleInputName1" class="form-label">Nama</label>
                      <input type="name" name="nama" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">  
                        @error('password')
                        <div class="alert alert-danger">{{ $message }} </div>
                          @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputNoTelp1" class="form-label">No. Telepon</label>
                        <input type="notelp" name="notelp" class="form-control" id="exampleInputNoTelp1">  
                        @error('notelp')
                        <div class="alert alert-danger">{{ $message }} </div>
                          @enderror
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
                </center>
@endsection