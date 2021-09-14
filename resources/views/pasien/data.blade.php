<title> Riwayat Administrasi Pasien | Klinik Siaga COVID-19</title>
@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title"><b>Riwayat administrasi A.N : {{$pasien->nama_pasien}}</b></h1>
                  <div class="right">
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                      <th>Id Pasien </th>
                      <th>No. Antrian</th>
                      <th>Tanggal Masuk</th>
                      <th>Keluhan</th>
                      <th>No. Kamar</th>
                      <th>Nama Kamar</th>
											</tr>
										</thead>
										<tbody>
                @foreach($pasien->administrasi as $administrasi)
                <tr>
                <td>{{$administrasi->pasien_id_pas}}</td>
                <td>{{$administrasi->no_antrian }}</td>
                <td>{{$administrasi->tgl}}</td>
                <td>{{$administrasi->keluhan}}</td>
                <td>{{$administrasi->no_kamar}}</td>
                <td>{{$administrasi->nama_kamar}}</td>
 
               </tr>
               @endforeach
										</tbody>
									</table>
								</div>
							</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop