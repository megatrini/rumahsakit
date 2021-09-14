<title>Edit Rekam Medis | Klinik Siaga COVID-19</title>
@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title"><b>Edit Rekam Medis</b></h4>
								</div>
								<div class="panel-body">
                <form action="/rekam_medis/update/{{$rekammedis->no_diagnosa}}" method="POST">
                {{csrf_field()}}
 
                 <!-- No antrian -->
                  <div class="form-group">
                <label for="exampleInputEmail1">No. Antrian (hanya angka)</label>
                <input name="administrasi_no_antrian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="No. Antrian"
                placeholder="No. Antrian" value="{{$rekammedis->administrasi_no_antrian}}">
                </div>
               <!-- Id Pasien -->
               <div class="form-group">
                <label for="exampleInputEmail1">Id Pasien (hanya angka)</label>
                <input name="pasien_id_pas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Id Pasien"
                placeholder="Id Pasien" value="{{$rekammedis->pasien_id_pas}}" >
                </div>
                <!-- Id Dokter -->
                <div class="form-group">
                <label for="exampleInputEmail1">Id Dokter(hanya angka)</label>
                <input name="dokter_id_dok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Id Dokter"
                placeholder="Id Dokter" value="{{$rekammedis->dokter_id_dok}}">
                </div>
                <!-- Diagnosa with text -->
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Diagnosa</label>
                 <textarea name="diagnosa" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$rekammedis->diagnosa}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Ket. Rujukan </label>
                <input name="ket_rujukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Ket. Rujukan"
                placeholder="Ket. Rujukan" value="{{$rekammedis->ket_rujukan}}">
                </div>

              <button type="submit" class="btn btn-warning btn-sm">Update</button>
        </form>
								</div>
							</div>
        </div>
        </div>
        </div>
        </div>
        </div>
@stop
