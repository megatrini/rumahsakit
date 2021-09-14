<title>Edit Data Pasien| Klinik Siaga COVID-19</title>
@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title"><b>Edit Data Pasien</b></h4>
								</div>
								<div class="panel-body">
                <form action="/pasien/update/{{$pasien->id_pas}}" method="POST">
                {{csrf_field()}}
               <!-- nama pasien -->
               <div class="form-group">
                <label for="exampleInputEmail1">Nama Pasien</label>
                <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Pasien"
                placeholder="Nama Pasien" value="{{$pasien->nama_pasien}}">
              </div>
               <!-- jenis kelamin with select-->
               <div class="form-group">
              <label for="exampleFormControlSelect1"> Pilih Jenis Kelamin</label>
              <select name="jk" class="form-control" id="exampleFormControlSelect1">
                <option value="L" @if($pasien->jk == 'L')selected @endif> Laki-laki </option>
                <option value="P" @if($pasien->jk == 'P')selected @endif> Perempuan </option>
              </select>
              </div>
               <!-- Tanggal lahir with data picker liat di head dalam master layout ada link tambahan -->
                <label>Tanggal Lahir</label>
              <input name="tgl_lahir" type="text" class="datepicker" placeholder="Tanggal Lahir" value="{{$pasien->tgl_lahir}}">
                <script type="text/javascript">
                  $('.datepicker').datepicker();
                </script>
                  <!-- alamat with text -->
              <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pasien->alamat}}</textarea>
            </div>
             <!-- kota asal -->
             <div class="form-group">
                <label for="exampleInputEmail1">Kota Asal</label>
                <input name="kota_asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kota Asal"
                placeholder="Kota Asal" value="{{$pasien->kota_asal}}">
              </div>
                <!-- goldar with select -->
             <div class="form-group">
              <label for="exampleFormControlSelect1"> Pilih Golongan Darah </label>
              <select name="goldar" class="form-control" id="exampleFormControlSelect1">
                <option value="A" @if($pasien->goldar == 'A') selected @endif>A</option>
                <option value="B" @if($pasien->goldar == 'B') selected @endif>B</option>
                <option value="AB" @if($pasien->goldar == 'AB') selected @endif>AB</option>
                <option value="O" @if($pasien->goldar == 'O') selected @endif>O</option>
                <option value="" @if($pasien->goldar == '') selected @endif></option>
              </select>
              </div>
                             <!-- Nama Wali-->
                             <div class="form-group">
                <label for="exampleInputEmail1">Nama Wali</label>
                <input name="nama_wali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Wali"
                placeholder="Nama Wali" value="{{$pasien->nama_wali}}">
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
