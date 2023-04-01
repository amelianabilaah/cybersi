@extends('layouts.main')

@section('container')
    <center>
        <br>
    <div > <button type="button" class="btn btn-danger"> <h6> Anda tidak memiliki hak akses untuk layanan tersebut! Silakan login ulang! <h6> </button> </div>
        <div class="col-8 mt-7">
            <div class="card text-black bg-warning mt-5" style="max-width: 30rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Login Page</h5>
                  <form action="/proseslogin" method = "POST" class="card-text" style="text-align: left">
                    @csrf
                    <div class="mb-1">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                      <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div>
                    </div>
                    <div class="mb-1">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      <div id="emailHelp" class="form-text">Pastikan password yang Anda masukkan benar.</div>
                    <div class="mb-1 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1"> Simpan Saya Sebagai Pengguna Tetap </label>
                    </div>
                    <center class = "mt-3">
                    <button style="text-align:center" type="submit" class="btn btn-dark bg-dark ">Login</button>
                    <p class = "mt-3">Belum Memiliki Akun?</p>
                    <a href="/registration" style="text-align:center" class="btn btn-dark bg-dark" >Registrasi</a>
                    </center>
                  </form>
                </center>
@endsection