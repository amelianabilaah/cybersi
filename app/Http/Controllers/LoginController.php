<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view ('login', [
            "title" => "Login"]);
    }
    public function proseslogin (Request $request){
       if(Auth::attempt($request->only('email','password'))){
            if (auth()->user()->level==1){
                return redirect('/admin'); 
            }
            return redirect('/dosen');
        }
        return view ('loginfailed', [
            "title" => "Login"]);
    }
    public function loginakses(){
        return view ('loginakses', [
            "title" => "Login"]);
    }
    public function logout(Request $request){
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/');

    }
    public function registration(){
        return view('adduser', [
            "title" => "Registrasi"
        ]);
    }
    public function insertdata(Request $request) {
        $this->validate($request,[
            'password' => 'required|unique',
            'notelp' => 'required|min:10|max:13',
            'password' => 'required|min:3'
        ]);

        $data = User::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'notelp' => $request->notelp,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('FileMedia/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
    
        return view('/registrationsuccess', [
            "title" => "Registrasi Berhasil"
        ]);

    }
    public function registrationsuccess(){
        return view('registrationsuccess', [
            "title" => "Registrasi Berhasil"
        ]);  
    }
    public function myprofile ($id){
        $data = User::find($id);
        return view('profilpengguna',compact ('data'), [
            "title" => "My Profile"
        ]); 
    }
    public function datapesanan($id){
        $data = User::find($id);
        return view('tampileditprofile', compact ('data'), [
            "title" => "Data Profil"
        ]);
    }
    public function tampilprofile(Request $request, $id){
        $data = User::find($id);
        //dd($data);
        return view('changeprofile', compact ('data'), [
            "title" => "Ubah Profile"
        ]);
    }
    public function updateprofile(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('FileMedia/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
    
        return view('profilpengguna', compact ('data'), [
            "title" => "Profile Updated"
        ]);
    }
}
