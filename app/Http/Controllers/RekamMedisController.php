<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
        public function index()
    {
       $data_rekam_medis = \App\rekam_medis::all();
        return view('rekam_medis.index',['data_rekam_medis' => $data_rekam_medis]);
    }
    public function create(Request $request)
    {
        \App\rekam_medis::create($request->all());
        return redirect('/rekam_medis')->with('sukses','Data Berhasil Ditambahkan');
    }
    public function edit($no_diagnosa)
    {
        $rekammedis = \App\rekam_medis::find($no_diagnosa);
        return view('rekam_medis/edit',['rekammedis'=> $rekammedis]);
    }
    public function update(Request $request,$no_diagnosa)
    {
        $rekammedis = \App\rekam_medis::find($no_diagnosa);
        $rekammedis->update($request->all());
        return redirect('/rekam_medis')->with('sukses','Data Berhasil Diubah');
    }
    public function delete($no_diagnosa)
    {
        $rekammedis = \App\rekam_medis::find($no_diagnosa);
        $rekammedis->delete($rekammedis);
        return redirect('/rekam_medis')->with('sukses','Data Berhasil Dihapus');
    }
}
