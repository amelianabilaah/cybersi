@extends('layouts.main')

@section('container')
<center>
<div class="col-8">
  <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data" class="card-text">
    @csrf
      <h3 style="text-align:center"> Data Pesanan </h3>
      <div class="mb-1">
          <label for="exampleInputName" class="form-label">Nama</label>
          <input type="name" name="nama" class="form-control" id="exampleInputName1"
          value = "{{ $data->nama }}">
        </div>
        <div class="mb-1">
          <label for="exampleInputNumber" class="form-label">Nomor HP</label>
          <input type="string" name="nomorhp" class="form-control" id="exampleInputNumber1"
          value = "{{ $data->nomorhp }}">
        </div>
      <div class="mb-1">
        <label for="exampleInputTgl1" class="form-label">Tanggal Layanan</label>
        <input type="date" name="tanggallayanan" class="form-control" id="exampleInputTgl1"
        value = "{{ $data->tanggallayanan }}">
      </div>
      <div class="mb-1">
          <label for="exampleInputTime" class="form-label">Waktu Layanan</label>
          <input type="time" name="waktulayanan" class="form-control" id="exampleInputTime1"
          value = "{{ $data->waktulayanan }}">
        </div>
        <label for="exampleInputJenis" class="form-label">Jenis Layanan</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>{{ $data->jenislayanan }}</option>
          <option value="Hair Treatment">Hair Treatment</option>
          <option value="Nail Treatment">Nail Treatment</option>
          <option value="Body Treatment">Body Treatment</option>
        </select>
        <div class="mb-1">
          <label for="exampletreatmentName1" class="form-label">Nama Layanan</label>
          <input type="treatmentName" name="namalayanan" class="form-control" id="exampletreatmentName1"
          value = "{{ $data->namalayanan }}">
        </div>
      <center class = "mb-3 mt-3">
      <button style="text-align:center" type="submit" class="btn btn-dark bg-dark ">Ubah Data Pesanan</button>
      </center>
    </form>
</div>
</center>
@endsection
