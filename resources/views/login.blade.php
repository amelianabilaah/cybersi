@extends('layouts.main')

@section('container')
    <center>
        <div class="col-8 mt-7"
      
        >

            <div class="card text-white mt-5" style="max-width: 30rem; background-color: #1F2261">
                <div class="card-body">
                  <h3 class="card-title" style="text-align: left">Selamat Datang</h3>
                  <h6 class="card-subtitle" style="text-align: left"> Silakan memasukkan NIP dan kata sandi</h6>
                  <form action="/proseslogin" method = "POST" class="card-text" style="text-align: left"> <br>
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
                    <button style="text-align:center" type="submit" class="btn btn-light bg-light ">Login</button>
                    <p class = "mt-3">Lupa Kata Sandi?</p>
                    <a href="/registration" style="text-align:center" class="btn btn-light bg-light" >Klik disini</a>
                    </center>
                  </form>
                </center>
@endsection