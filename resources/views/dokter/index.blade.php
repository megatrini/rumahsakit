<title>Dokter | Klinik Siaga COVID-19</title>
@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title"><b> Data Dokter</b></h1>
                  <div class="right">
                   <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
											<th>Id Dokter</th>
                      <th>Nama Dokter</th>
                      <th>Jadwal Praktek</th>
                      <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                @foreach($data_dokter as $dokter)
                <tr>
                <td>{{$dokter->id_dok}}</td>
                <td>{{$dokter->nama_dokter}}</td>
                <td>{{$dokter->jadwal_praktek}}</td>
                <td>
                  <a href="/dokter/edit/{{$dokter->id_dok}}" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/dokter/delete/{{$dokter->id_dok}}" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, apakah anda yakin ?')"> Delete</a>
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
        <h3 class="modal-title" id="exampleModalLabel">Membuat Data Dokter Baru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/dokter/create" method="POST">
        {{csrf_field()}}
          
               <div class="form-group">
                <label for="exampleInputEmail1">Nama Dokter</label>
                <input name="nama_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Dokter">
                </div>
                  <!-- jadwal praktek-->
                  <div class="form-group">
                <label for="exampleFormControlSelect1"> Pilih Hari </label>
                <select name="jadwal_praktek" class="form-control" id="exampleFormControlSelect1">
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="jumat">Jum'at</option>
                <option value="sabtu">sabtu</option>
                <option value="minggu">minggu</option>
              </select>
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