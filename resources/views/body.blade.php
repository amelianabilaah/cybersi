@extends('layouts.main')
@section('container')
<center>
    <h1 style="text-align:center"> Body Treatment</h1>
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 38rem;">
                <img src="/FileMedia/spa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Body Treatment merupakan salah satu layanan perawatan tubuh yang disediakan oleh Krone Hair Design. Body Treatmen memiliki dua layanan, yaitu body refelxy dan body scrub.</p>
                </div>
              </div>
          </div>
        </div>
    </center>
          <div class="col">
          <table class="table table-striped mt-2" border="2" style="text-align: center">
            <thead class="bg-warning">
                <h5 class="mt-4" style="text-align: center">Body Treatment Price List</h5>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Layanan</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Back Scrub</td>
                <td>Rp 150.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Reflexy (60 mins)</td>
                <td>Rp 100.000</td>
              </tr>
            </tbody>
            </table>
          </div>
    </div>
@endsection