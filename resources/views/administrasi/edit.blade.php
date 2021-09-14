<title>Edit Administrasi| Klinik Siaga COVID-19</title>
@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"><b>Edit Administrasi</b></h4>
            </div>
            <div class="panel-body">
              <form action="/administrasi/update/{{$administrasi->no_antrian}}" method="POST">
                {{csrf_field()}}
                <!-- Tanggal Masuk with data picker liat di head dalam master layout ada link tambahan -->
                <label>Tanggal Masuk</label>
                <input name="tgl" type="text" class="datepicker" placeholder="Tanggal Masuk" value="{{$administrasi->tgl}}">
                <script type="text/javascript">
                  $('.datepicker').datepicker();
                </script>
                <!-- Keluhan with text -->
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Keluhan</label>
                  <textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$administrasi->keluhan}}</textarea>
                </div>
                <!-- no kamar with select-->
                <div class="form-group">
                  <label for="exampleFormControlSelect1"> Pilih Nomer Kamar </label>
                  <select name="no_kamar" class="form-control" id="exampleFormControlSelect1">
                    <option value="1" @if($administrasi->no_kamar == '1') selected @endif>1</option>
                    <option value="2" @if($administrasi->no_kamar == '2') selected @endif>2</option>
                    <option value="3" @if($administrasi->no_kamar == '3') selected @endif>3</option>
                    <option value="4" @if($administrasi->no_kamar == '4') selected @endif>4</option>
                    <option value="" @if($administrasi->no_kamar == '') selected @endif></option>
                  </select>
                </div>
                <!-- nama kamar with text select -->
                <div class="form-group">
                  <label for="exampleFormControlSelect1"> Pilih Nama Kamar </label>
                  <select name="nama_kamar" class="form-control" id="exampleFormControlSelect1">
                    <option value="Melati" @if($administrasi->nama_kamar == 'Melati') selected @endif>Melati</option>
                    <option value="Anggrek" @if($administrasi->nama_kamar == 'Anggrek') selected @endif>Anggrek</option>
                    <option value="Kamboja" @if($administrasi->nama_kamar == 'Kamboja') selected @endif>Kamboja</option>
                    <option value="" @if($administrasi->nama_kamar == '') selected @endif></option>
                  </select>
                </div>
                <!-- Id Pasien relasi one to many with pasien table -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Pasien</label>
                  <input name="pasien_id_pas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Id Pasien" placeholder="Id Pasien" value="{{$administrasi->pasien_id_pas}}">
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