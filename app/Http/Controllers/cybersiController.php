<?php

namespace App\Http\Controllers;

use App\Models\cybersi;
use Illuminate\Http\Request;

class cybersiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = cybersi::get();
        return view('PL',[
            'var1' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/crud/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
    
        $kodepl = $request->validate([
            'kode' => 'required',
            'deskripsiPL' => 'required',
            'deskripsiProdi' => 'required',
            'deskripsiAptikom' => 'required',
        ]);
     
        cybersi::create($kodepl);
        return redirect()->route('cybersi.index')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cybersi  $cybersi
     * @return \Illuminate\Http\Response
     */
    public function show(cybersi $cybersi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cybersi  $cybersi
     * @return \Illuminate\Http\Response
     */
    public function edit(cybersi $cybersi)
    {
        return view('/crud/edit',[
            'var1' => $cybersi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cybersi  $cybersi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cybersi $cybersi)
    {
        $request->validate([
            'kode' => 'required',
            'deskripsiPL' => 'required',
            'deskripsiProdi' => 'required',
            'deskripsiAptikom' => 'required',
        ]);
 
        $cybersi->update($request->all());
        return redirect()->route('cybersi.index')->with('success','Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cybersi  $cybersi
     * @return \Illuminate\Http\Response
     */
    public function destroy(cybersi $cybersi)
    {
        $cybersi->delete();
        return back()->with('success','Data berhasil dihapus');
    }
}
