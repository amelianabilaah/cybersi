<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $data = mahasiswa::all();
        return view('ppllistmahasiswa', compact('data'), [
            "title" => "List Layanan"
        ]);
    }
    public function addlayanan(){
        return view('ppladdmahasiswa',[
            "title" => "Tambah Layanan"
        ]);
    }
    public function insertdata(Request $request){
        mahasiswa::create($request->all());
        return redirect('daftarmahasiswa');
    }
    public function updatedata($id){
        $data = mahasiswa::find($id);
        return view('pplchangemahasiswa', compact('data'), [
            "title" => "Ubah Layanan"
        ]);
    }
    public function layananchange(Request $request, $id){
        $data = mahasiswa::find($id);
        $data->update($request->all());
        return redirect('daftarmahasiswa');
    }
    public function deletedata($id){
        $data = mahasiswa::find($id);
        $data->delete();
        return redirect('daftarmahasiswa');
    }
}
