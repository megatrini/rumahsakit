<title> | Klinik Siaga COVID-19</title>
@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title"><b>Rekam Medis Ditangani oleh : {{$dokter->nama_dokter}}</b></h1>
                  <div class="right">
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                      <th>No. Diagnosa</th>
                      <th>No. Antrian</th>
                      <th>Id Pasien</th>
                      <th>Id Dokter</th>
                      <th>Diagnosa</th>
                      <th>Ket. Rujukan</th>
											</tr>
										</thead>
										<tbody>
                @foreach($dokter->rekam_medis as $rekammedis)
                <tr>
                <td>{{$rekammedis->no_diagnosa}}</td>
                <td> {{$rekammedis->administrasi_no_antrian}}</td> 
                <td>{{$rekammedis->pasien_id_pas}}</td>
                <td> {{$rekammedis->dokter_id_dok}}</td>
                <td>{{$rekammedis->diagnosa}}</td>
                <td> {{$rekammedis->ket_rujukan}} </td>
 
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