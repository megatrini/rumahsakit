<title>Edit Data Dokter| Klinik Siaga COVID-19</title>
@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title"><b>Edit Data Dokter</b></h4>
								</div>
								<div class="panel-body">
                <form action="/dokter/update/{{$dokter->id_dok}}" method="POST">
                {{csrf_field()}}
                 <!-- nama dokter-->
                <div class="form-group">
                <label for="exampleInputEmail1">Nama Dokter</label>
                <input name="nama_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Dokter"
                placeholder="Nama Dokter" value="{{$dokter->nama_dokter}}">
                </div>
                  <!-- jadwal praktek-->
                  <div class="form-group">
              <label for="exampleFormControlSelect1"> Pilih Hari </label>
              <select name="jadwal_praktek" class="form-control" id="exampleFormControlSelect1">
                <option value="senin" @if($dokter->jadwal_praktek == 'senin') selected @endif>Senin</option>
                <option value="selasa" @if($dokter->jadwal_praktek == 'selasa') selected @endif>Selasa</option>
                <option value="Rabu" @if($dokter->jadwal_praktek == 'rabu') selected @endif>Rabu</option>
                <option value="Kamis"  @if($dokter->jadwal_praktek == 'kamis') selected @endif>Kamis</option>
                <option value="jumat"  @if($dokter->jadwal_praktek == 'jumat') selected @endif>Jum'at</option>
                <option value="sabtu"  @if($dokter->jadwal_praktek == 'sabtu') selected @endif>sabtu</option>
                <option value="minggu"  @if($dokter->jadwal_praktek == 'minggu') selected @endif>minggu</option>
              </select>
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
