@extends('layout.master')

<div class="col-lg-9-center px-4" style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Data Hasil Timbangan
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataTimbang">Tambah Data</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Hasil Timbangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($timbangdatas as $timbangdata)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $timbangdata->nama }}</td>
      <td>{{ $timbangdata->umur }}</td>
      <td>{{ $timbangdata->tanggal }}</td>
      <td>{{ $timbangdata->hasil_timbangan }}</td>
      <td>
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><a href="{{ route('lihat') }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"><a>Edit</a></button>
      <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"><a>Delete</a></button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
  </div>
</div>
</div>



<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataTimbang" tabindex="-1" aria-labelledby="ModalTambahDataTimbangLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataTimbangLabel">Masukkan Data Timbangan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('timbang.store4')}}" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="nama" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Umur</span>
          <input type="text" name="umur" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Tanggal</span>
          <input type="text" name="tanggal" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Hasil Timbangan</span>
          <input type="text" name="hasil_timbangan" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Keterangan</span>
          <input type="text" name="keterangan" class="form-control" placeholder="">
        </div>
        </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-Danger" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>

