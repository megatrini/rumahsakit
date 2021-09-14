<title>Rekam Medis | Klinik Siaga COVID-19</title>
@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title"><b>Rekam Medis</b></h1>
                  <div class="right">
                   <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
											<th>No. Diagnosa</th>
                      <th>No. Antrian</th>
                      <th>Id Pasien</th>
                      <th>Dokter</th>
                      <th>Diagnosa</th>
                      <th>Ket. Rujukan</th>
                      <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                @foreach($data_rekam_medis as $rekammedis)
                <tr>
                <td>{{$rekammedis->no_diagnosa}}</td>
                <!-- one to one relation kalo jadi -->
                <!-- <td><a href="/administrasi/{{$rekammedis->administrasi_no_antrian}}">{{$rekammedis->administrasi_no_antrian}} </a></td> -->
                <td> {{$rekammedis->administrasi_no_antrian}}</td> 
                <td>{{$rekammedis->pasien_id_pas}}</td>
                <td> <a href="dokter/{{$rekammedis->dokter_id_dok}}">{{$rekammedis->dokter->nama_dokter}} </a> </td>
                <td>{{$rekammedis->diagnosa}}</td>
                <td> {{$rekammedis->ket_rujukan}} </td>
                <td>
                  <a href="/rekam_medis/edit/{{$rekammedis->no_diagnosa}}" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/rekam_medis/delete/{{$rekammedis->no_diagnosa}}" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, apakah anda yakin ?')"> Delete</a>
               </td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Membuat Rekam Medis  Baru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/rekam_medis/create" method="POST">
        {{csrf_field()}}
          
                <!-- No antrian -->
                <div class="form-group">
                <label for="exampleInputEmail1">No. Antrian (hanya angka)</label>
                <input name="administrasi_no_antrian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="No. Antrian">
                </div>
                <!-- Id Pasien -->
                <div class="form-group">
                <label for="exampleInputEmail1">Id Pasien (hanya angka)</label>
                <input name="pasien_id_pas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Id Pasien">
                </div>
                 <!-- Id Dokter -->
                 <div class="form-group">
                <label for="exampleInputEmail1">Id Dokter(hanya angka)</label>
                <input name="dokter_id_dok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Id Dokter">
                </div>
                 <!-- Diagnosa with text -->
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Diagnosa</label>
                 <textarea name="diagnosa" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ket rujukan -->
                <div class="form-group">
                <label for="exampleInputEmail1">Ket. Rujukan </label>
                <input name="ket_rujukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Ket. Rujukan">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@stop