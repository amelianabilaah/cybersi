<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function pesan(){
        $krone_cara = [
            ["list" => "1. Membuat Akun Pada Website Krone Hair Design."],
            ["list" => "2. Mengisi Formulir Pemesanan Online."],
            ["list" => "3. Datang Ke Salon Sesuai dengan Jadwal Pemesanan Layanan."], 
            ["list" => "4. Datang Ke Salon Sesuai dengan Jadwal Pemesanan Layanan."], 
            ["list" => "5. Menerima Pelayanan Salon."],
            ["list" => "6. Melakukan Pembayaran Pemesanan Layanan."],
        ];
        return view('pemesanan', [
            "title" => "Pesan Layanan",
            "cara" => $krone_cara
        ]);
    }
}