@extends('layouts.main')

@section('container')
    <center>
        <div class="col-8 mt-7">
            <div class="card text-white" style="position: relative; display: flex; justify-content: center; width: 480px; background-color: #1F2261; border-radius: 50px; margin: 180px 0 0 0; padding: 0 50px 0 50px">
                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{session()->get('status')}}
                    </div>
                  @endif
                  <h4 class="card-subtitle" style="text-align: Center; margin:10px 0 0 0">Masukkan kata sandi yang baru</h4>
                  <form action="{{ route('password.update') }}" method = "POST" class="card-text" style="text-align: left"> <br>
                    @csrf 
                    <div class="la" style="text-align: left; margin:10px 0 0 0;">
                      <input type="hidden" class="form-control" name="token" value="{{ request()->token }}">
                      <input type="hidden" class="form-control" name="email" value="{{ request()->email }}">
                      <label for="exampleInputEmail1" class="form-label">Password baru</label>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan password baru anda">
                      <label for="exampleInputEmail1" class="form-label">Konfirmasi password baru</label>
                      <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi password baru anda anda">
                      {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                    </div>
                    <center class = "mt-3 mb-10">
                    <input type="submit" value="Update Password" style="text-align:center; margin: -2px 0 0 0; width:100%; height:50px; border: 2px solid; background: white; border-radius: 10px; font-size:18px; color:#1F2261;">
                    </center>
                  </form>
                </div>
            </div>
        </div>    
                </center>
            @endsection