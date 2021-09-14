<title>Pasien | Klinik Siaga COVID-19</title>
@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h1 class="panel-title"><b>Data Pasien</b></h1>
              <div class="right">
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Id Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Kota Asal</th>
                    <th>Golongan Darah</th>
                    <th>Nama Wali</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_pasien as $pasien)
                  <tr>
                    <td>{{$pasien->id_pas}}</td>
                    <td>{{$pasien->nama_pasien}}</td>
                    <td>{{$pasien->jk}}</td>
                    <td>{{$pasien->tgl_lahir}}</td>
                    <td>{{$pasien->alamat}}</td>
                    <td>{{$pasien->kota_asal}}</td>
                    <td>{{$pasien->goldar}}</td>
                    <td>{{$pasien->nama_wali}}</td>
                    <td> <a href="/pasien/edit/{{$pasien->id_pas}}" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/pasien/delete/{{$pasien->id_pas}}" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, apakah anda yakin ?')"> Delete</a>
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
        <h3 class="modal-title" id="exampleModalLabel">Membuat Data Pasien Baru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pasien/create" method="POST">
          {{csrf_field()}}
          <!-- nama pasien -->
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Pasien</label>
            <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Pasien">
          </div>
          <!-- jenis kelamin with select-->
          <div class="form-group">
            <label for="exampleFormControlSelect1"> Pilih Jenis Kelamin</label>
            <select name="jk" class="form-control" id="exampleFormControlSelect1">
              <option value="L"> Laki-laki </option>
              <option value="P"> Perempuan </option>
            </select>
          </div>
          <!-- Tanggal lahir with data picker liat di head dalam master layout ada link tambahan -->
          <label>Tanggal Lahir</label>
          <input name="tgl_lahir" type="text" class="datepicker">
          <script type="text/javascript">
            $('.datepicker').datepicker();
          </script>
          <!-- alamat with text -->
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <!-- kota asal -->
          <div class="form-group">
            <label for="exampleInputEmail1">Kota Asal</label>
            <input name="kota_asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kota Asal">
          </div>
          <!-- goldar with select -->
          <div class="form-group">
            <label for="exampleFormControlSelect1"> Pilih Golongan Darah </label>
            <select name="goldar" class="form-control" id="exampleFormControlSelect1">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
            </select>
          </div>
          <!-- Nama Wali-->
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Wali</label>
            <input name="nama_wali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Wali">
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