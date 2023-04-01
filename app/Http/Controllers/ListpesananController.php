<?php

namespace App\Http\Controllers;

use App\Models\listpesanan;
use Illuminate\Http\Request;

class ListpesananController extends Controller
{
    public function pemesanan(){
            $krone_cara = [
                ["list" => "1. Membuat Akun Pada Website Krone Hair Design."],
                ["list" => "2. Mengisi Formulir Pemesanan Online."],
                ["list" => "3. Datang Ke Salon Sesuai dengan Jadwal Pemesanan Layanan."], 
                ["list" => "4. Datang Ke Salon Sesuai dengan Jadwal Pemesanan Layanan."], 
                ["list" => "5. Menerima Pelayanan Salon."],
                ["list" => "6. Melakukan Pembayaran Pemesanan Layanan."],
            ];
        return view('pemesanan', [
            "title" => "Pemesanan Berhasil",
            "cara" => $krone_cara
        ]);
    }
    public function pemesananberhasil(){
        return view('pemesananberhasil', [
            "title" => "Pemesanan Berhasil"
        ]);  
    }
    public function insertpesanan(Request $request) {
        listpesanan::create($request->all());
        return redirect()->route('pemesananberhasil');
    }
    public function ubahdata(){
        $data = listpesanan::all();
        return view ('pemesananadmin', compact('data'), [
            "title" => "List Pesanan"
        ]);
    }
    public function tampildata($id){
        $data = listpesanan::find($id);
        //dd($data);
        return view('change', compact ('data'), [
            "title" => "Ubah Data Pesanan"
        ]);
    }
    public function datapesanan($id){
        $data = listpesanan::find($id);
        return view('tampiledit', compact ('data'), [
            "title" => "Data Pesanan"
        ]);
    }
    public function updatedata(Request $request, $id){
        $data = listpesanan::find($id);
        $data->update($request->all());
        return redirect()->route('ubahdata')->with('success', 'Data Berhasil Diubah');
    }
    public function delete($id){
        $data = listpesanan::find($id);
        $data->delete();
        return redirect()->route('ubahdata')->with('success', 'Data Berhasil Dihapus');
    }
}
