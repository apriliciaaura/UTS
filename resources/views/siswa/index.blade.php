@extends('layouts.master')
@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">DATA MAHASISWA</h3>
                <form class="navbar-form navbar-left">
                <form class="form-inline" method="GET" action="/siswa">
                <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search...." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
                </form>

                <div class="right">
                  <a href="/siswa/exportexcel" class="btn btn-sm btn-primary">Export Excel</a>
                  <a href="/siswa/exportpdf" class="btn btn-sm btn-primary">Export PDF</a>
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                </div>
              </div>

                <div class="panel-body">
                  <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data_siswa as $data_siswa)
                    <tr>
                      <td><a href="/siswa/{{$data_siswa->id}}/profile">{{$data_siswa->nama}}</a></td>
                      <td>{{$data_siswa->nim}}</td>
                      <td>{{$data_siswa->email}}</td>
                      <td>{{$data_siswa->jurusan}}</td>
                      <td><a href="/siswa/{{$data_siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$data_siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</a></td>
                    </tr>
                  @endforeach
                  </table>
                </div>
            </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        </div>

  <div class="modal-body">
        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
           <label for="exampleInputEmail1">Nama</label>
             <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">NIM</label>
          <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jurusan</label>
          <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Avatar</label>
          <input name="avatar" type="file" class="form-control">
        </div>
  </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
@stop