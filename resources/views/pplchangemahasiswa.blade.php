@extends('layouts.main')

@section('container')
    <h2 style="text-align: center">Mengubah Data Mahasiswa</h2>
    <center>
    <div class="card mt-4" style="width: 30rem;">
        <div class="card-body">
          <table class="table table-striped">
            <div class="row">
                <form id="edit_layanan" action="{{ $data->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Program Studi</label>
                        <select class="form-select" name="prodi" aria-label="Default select example">
                            <option selected>{{ $data->prodi }}</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Statistika">Statistika</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Biomedis">Teknik Biomedis</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="form-label">Semester yang Ditempuh</label>
                        <select class="form-select" name="semester" aria-label="Default select example">
                            <option selected>{{ $data->semester }}</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $data->nama }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>Nomor Induk Mahasiswa</label>
                        <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" value="{{ $data->nim }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label>Nomor HP</label>
                        <input type="text" name="nohp" class="form-control" placeholder="Nomor HP" value="{{ $data->nohp}}">
                    </div>
                    <p class="card-text">Anda akan mengubah data mahasiswa dalam daftar mahasiswa yang mengambil mata kuliah Pembangunan Perangkat Lunak</p>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <a href="/daftarmahasiswa" class="btn btn-danger">Back</a>
                        </div>
                        <div class="col">
                          <button class="btn btn-warning">Save</button>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
          </table>
        </div>
      </div>
    </center>
@endsection
