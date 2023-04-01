@extends('layouts.main')
@section('container')
    <h1 style="text-align:center"> Nail Treatment</h1>
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 38rem;">
                <img src="/FileMedia/nailt.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Nail Treatment merupakan layanan naik treatment yang menyediakan layanan perawatan kuku seperti manicure, pedicure, nail polish, dan lain-lain. Layanan ini mengarah pada kesehatan kuku Anda.</p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card card" style="width: 38rem;">
                <img src="/FileMedia/naild.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Nail Art merupakan layanan nail treatment yang menyediakan layanan menghias kuku dengan design yang Anda inginkan. Nail Art membuat kuku Anda lebih cantik dan indah. Terdapat layanan untuk membuat hiasan kuku & kuku palsu.</p>
                </div>
              </div>
          </div>
          <table class="table table-striped mt-2" border="2" style="text-align: center">
            <thead class="bg-warning">
                <h5 class="mt-4" style="text-align: center">Nail Treatment Price List</h5>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Layanan</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Manicure</td>
                <td>Rp 100.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Pedicure</td>
                <td>Rp 130.000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Nail Polish</td>
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
                    <h5 class="mt-4" style="text-align: center">Nail Art Price List</h5>
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