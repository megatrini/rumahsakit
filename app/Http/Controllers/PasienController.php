<?php

namespace App\Http\Controllers;

use App\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_pasien = \App\pasien::where('nama_pasien', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_pasien = \App\pasien::all();
        }
        return view('pasien.index', ['data_pasien' => $data_pasien]);
    }
    public function show($id_pas)
    {
        $pasien = \App\pasien::find($id_pas);
        return view('pasien.data', ['pasien' => $pasien]);
    }
    public function create(Request $request)
    {
        \App\pasien::create($request->all());
        return redirect('/pasien')->with('sukses', 'Data Berhasil Ditambahkan');
    }
    public function edit($id_pas)
    {
        $pasien = \App\pasien::find($id_pas);
        return view('pasien/edit', ['pasien' => $pasien]);
    }
    public function update(Request $request, $id_pas)
    {
        $pasien = \App\pasien::find($id_pas);
        $pasien->update($request->all());
        return redirect('/pasien')->with('sukses', 'Data Berhasil Diubah');
    }
    public function delete($id_pas)
    {
        $pasien = \App\pasien::find($id_pas);
        $pasien->delete($pasien);
        return redirect('/pasien')->with('sukses', 'Data Berhasil Dihapus');
    }
}
