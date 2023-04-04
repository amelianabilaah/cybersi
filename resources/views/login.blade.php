@extends('layouts.main')

@section('container')
    <center>
        <div class="col-8 mt-7"
      
        >

            <div class="card text-white mt-100" style="width: 480px; height:530px; background-color: #1F2261; border-radius: 50px; margin: 70px 0 0 0; padding: 0 50px 0 50px">
                <div class="card-body">
                  <h3 class="card-title" style="text-align: left; margin:10px 0 0 0;"><b>Selamat Datang</b></h3>
                  <h6 class="card-subtitle" style="text-align: left; margin:10px 0 0 0"> Silakan memasukkan NIP dan kata sandi</h6>
                  <form action="/proseslogin" method = "POST" class="card-text" style="text-align: left"> <br>
                    @csrf 
                    <div class="la" style="text-align: left; margin:10px 0 0 0;">
                      <label for="exampleInputEmail1" class="form-label">NIP</label>
                      <input type="string" class="form-control" name="NIP" placeholder="Masukkan NIP dengan benar">
                      {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                    </div>
                    <div class="la" style="text-align: left; margin:10px 0 0 0;">
                      <label for="exampleInputPassword1" class="form-label" >Kata Sandi</label>
                      <input type="password" name="password" class="form-control" placeholder="Masukkan kata sandi dengan benar" ><br><br>
                      {{-- <div id="emailHelp" class="form-text">Pastikan password yang Anda masukkan benar.</div> --}}
                    {{-- <div class="mb-1 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1"> Simpan Saya Sebagai Pengguna Tetap </label>
                    </div> --}}
                    <center class = "mt-3 mb-10">
                    <button type="submit" style="text-align:center; margin: -2px 0 0 0; width:100%; height:50px; border: 2px solid; background: white; border-radius: 10px; font-size:18px; color:#1F2261;  "><b>Masuk</b></button>
                    <p class = "mt-10" style="margin: 50px 0 10px 0">Lupa Kata Sandi?</p>
                    <a href="/registration" style="text-align:center; margin: 0 0 0 0; color: white; text-decoration-line:underline;"><b>klik disini</b></a>
                    </center>
                  </form>
                 

                </center>
            
                  <footer class="main-footer" style="text-align:center; background-color:#1F2261; color:white; font-size:20px; width:1430px; height:80px; margin:60px 0 -24px -70px; padding: 25px">
                    Copyright &copy; 2023 - Sistem Infromasi Universitas Airlangga. All Rights Reserved</footer>
@endsection