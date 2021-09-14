<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    
    public function index()
    {
       $data_administrasi = \App\administrasi::all();
        return view('administrasi.index',['data_administrasi' => $data_administrasi]);
    }
    public function show($no_antrian)
    {
       $administrasi = \App\administrasi::find($no_antrian);
        return view('administrasi.data',['administrasi' => $administrasi ]);
    }
    public function create(Request $request)
    {
        \App\administrasi::create($request->all());
        return redirect('/administrasi')->with('sukses','Data Berhasil Ditambahkan');
    }
    public function edit($no_antrian)
    {
        $administrasi = \App\administrasi::find($no_antrian);
        return view('administrasi/edit',['administrasi'=> $administrasi]);
    }
    public function update(Request $request,$no_antrian)
    {
        $administrasi = \App\administrasi::find($no_antrian);
        $administrasi->update($request->all());
        return redirect('/administrasi')->with('sukses','Data Berhasil Diubah');
    }
    public function delete($no_antrian)
    {
        $administrasi = \App\administrasi::find($no_antrian);
        $administrasi->delete($administrasi);
        return redirect('/administrasi')->with('sukses','Data Berhasil Dihapus');
    }
    

}
