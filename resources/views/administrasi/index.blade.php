<title>Administrasi | Klinik Siaga COVID-19</title>
@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h1 class="panel-title"><b>Administrasi</b></h1>
              <div class="right">
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No. Antrian</th>
                    <th>Tanggal Masuk</th>
                    <th>Keluhan</th>
                    <th>No. Kamar</th>
                    <th>Nama Kamar</th>
                    <th>Pasien</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_administrasi as $administrasi)
                  <tr>
                    <td>{{$administrasi->no_antrian}}</td>
                    <td>{{$administrasi->tgl}}</td>
                    <td>{{$administrasi->keluhan}}</td>
                    <td>{{$administrasi->no_kamar}}</td>
                    <td>{{$administrasi->nama_kamar}}</td>
                    <td> <a href="/pasien/{{$administrasi->pasien_id_pas}}">{{$administrasi->pasien->nama_pasien}} </a> </td>
                    <td>
                      <a href="/administrasi/edit/{{$administrasi->no_antrian}}" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/administrasi/delete/{{$administrasi->no_antrian}}" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, apakah anda yakin ?')"> Delete</a>
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
        <h3 class="modal-title" id="exampleModalLabel">Membuat Administrasi Baru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/administrasi/create" method="POST">
          {{csrf_field()}}

          <!-- Tanggal Masuk with data picker liat di head dalam master layout ada link tambahan -->
          <label>Tanggal Masuk</label>
          <input name="tgl" type="text" class="datepicker">
          <script type="text/javascript">
            $('.datepicker').datepicker();
          </script>
          <!-- Keluhan with text -->
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Keluhan</label>
            <textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <!-- no kamar with select-->
          <div class="form-group">
            <label for="exampleFormControlSelect1"> Pilih Nomer Kamar </label>
            <select name="no_kamar" class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option></option>
            </select>
          </div>
          <!-- nama kamar with text select -->
          <div class="form-group">
            <label for="exampleFormControlSelect1"> Pilih Nama Kamar </label>
            <select name="nama_kamar" class="form-control" id="exampleFormControlSelect1">
              <option>Melati</option>
              <option>Anggrek</option>
              <option>Kamboja</option>
              <option></option>
            </select>
          </div>
          <!-- Id Pasien relasi one to many with pasien table -->
          <div class="form-group">
            <label for="exampleInputEmail1">Id Pasien (hanya angka) </label>
            <input name="pasien_id_pas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Id Pasien">
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