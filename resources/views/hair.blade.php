@extends('layouts.main')
@section('container')
    <h1 style="text-align:center"> Hair Treatment</h1>
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 38rem;">
                <img src="/FileMedia/hairt.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Hair Treatment merupakan layanan perawatan rambut yang ada di Krone Hair Design Salon. Layanan terdiri dari Hair Cut, Hair Color, Smoothing, Keratin, K-perm.</p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card card" style="width: 38rem;">
                <img src="/FileMedia/haird.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Hair Treatment merupakan layanan perawatan rambut yang ada di Krone Hair Design Salon. Layanan terdiri dari Hair Cut, Hair Color, Smoothing, Keratin, K-perm.</p>
                </div>
              </div>
          </div>
          <table class="table table-striped mt-2" border="2" style="text-align: center">
            <thead class="bg-warning">
                <h5 class="mt-4" style="text-align: center">Hair Treatment Price List</h5>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Layanan</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Hair Cut</td>
                <td>Rp 100.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Hair Coloring</td>
                <td>Rp 130.000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Hair Blow</td>
                <td>Rp 100.000</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Nail Gel</td>
                <td>Rp 125.000</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Nail Gel (Using Brite - Korea)</td>
                <td>Rp 150.000</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Mate Finishing (10 nails)</td>
                <td>Rp 10.000</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Remove Polish (per nail)</td>
                <td>Rp 3.000</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Remove Nail Gel (per nail)</td>
                <td>Rp 10.000</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Remove Gel Extension (per nail)</td>
                <td>Rp 18.000</td>
              </tr>
            </tbody>
            </table>
            <table class="table table-striped mt-2" border="2" style="text-align: center">
                <thead class="bg-warning">
                    <h5 class="mt-4" style="text-align: center">Hair Treatment Price List</h5>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Layanan</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Simple Design (10 nails)</td>
                    <td>Rp 250.000</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Medium Design (10 nails)</td>
                    <td>Rp 350.000</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Complex Design (10 nails)</td>
                    <td>Rp 450.000</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Simple Design By Request (1 nail)</td>
                    <td>Rp 30.000</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Medium Design By Request (1 nail)</td>
                    <td>Rp 40.000</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Advance Design By Request (1 nail)</td>
                    <td>Rp 50.000</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Swarovski (per piece)</td>
                    <td>Rp 10.000</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Fake Nail (10 nails)</td>
                    <td>Rp 250.000</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Press Gel Extension (10 nails)</td>
                    <td>Rp 400.000</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>3D Acrylic Special Design (per nail)</td>
                    <td>Rp 125.000</td>
                  </tr>
                </tbody>
                </table>
        </div>
    </div>
@endsection