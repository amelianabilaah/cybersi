@extends('layouts.main')

@section('container')
    <h2 style="text-align: center"> Mengubah Data Pesanan </h2>
    <center>
    <div class="card mt-4" style="width: 30rem;">
        <div class="card-body" >
          <h5 class="card-title">KHD100000222</h5>
          <table class="table table-striped">
            <tbody>
                <tr>
                <th scope="row">Pesanan Nomor</th>
                <td>{{$data->id}}</td>
                </tr>
                <tr>
                  <th scope="row">ID Pelanggan</th>
                  <td>USR000000001</td>
                </tr>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $data->nama }}</td>
                </tr>
                  <tr>
                    <th scope="row">Nomor HP</th>
                    <td>{{ $data->nomorhp }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal Layanan</th>
                    <td>{{ $data->tanggallayanan }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Waktu Layanan</th>
                    <td>{{ $data->waktulayanan }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Layanan</th>
                    <td>{{ $data->jenislayanan }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Nama Layanan</th>
                    <td>{{ $data->namalayanan }}</td>
                  </tr>
          </table>
          <p class="card-text">Anda akan mengubah data pesanan layanan yang telah dimasukkan oleh pelanggan.</p>
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="/ubahdata" class="btn btn-warning">Back</a>
              </div>
              <div class="col">
                <a href="/tampildata/{{ $data->id }}" class="btn btn-warning">Edit</a>
              </div>
            </div>
            <a href="/delete/{{ $data->id }}" class="btn btn-warning">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="dark" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
              </svg>
          </a>
          </div>
        </div>
      </div>
    </center>
@endsection
