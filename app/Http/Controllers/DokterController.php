<?php

namespace App\Http\Controllers;

use App\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
       $data_dokter = \App\dokter::all();
        return view('dokter.index',['data_dokter' => $data_dokter]);
    }
    public function show($id_dok)
    {
       $dokter = \App\dokter::find($id_dok);
        return view('dokter.data',['dokter' => $dokter ]);
    }
    
    public function create(Request $request)
    {
        \App\dokter::create($request->all());
        return redirect('/dokter')->with('sukses','Data Berhasil Ditambahkan');
    }
    public function edit($id_dok)
    {
        $dokter = \App\dokter::find($id_dok);
        return view('dokter/edit',['dokter'=> $dokter]);
    }
    public function update(Request $request,$id_dok)
    {
        $dokter = \App\dokter::find($id_dok);
        $dokter->update($request->all());
        return redirect('/dokter')->with('sukses','Data Berhasil Diubah');
    }
    public function delete($id_dok)
    {
        $dokter = \App\dokter::find($id_dok);
        $dokter->delete($dokter);
        return redirect('/dokter')->with('sukses','Data Berhasil Dihapus');
    }
    

}
