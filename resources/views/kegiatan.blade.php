@extends('layout.master')



<div class="col-lg-9-center px-4 " style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Kegiatan
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataKegiatan">Tambah Data</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Nama Tamu</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Aksi</th>
                            </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($kegiatans as $kegiatan)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $kegiatan->kegiatan }}</td>
      <td>{{ $kegiatan->nama_tamu }}</td>
      <td>{{ $kegiatan->tanggal }}</td>
      <td>{{ $kegiatan->waktu }}</td>
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
<div class="modal fade" id="ModalDataKegiatan" tabindex="-1" aria-labelledby="ModalTambahDataKegiatanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataKegiatanLabel">Masukkan Data Kegiatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('kegiatan.store5') }}" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Kegiatan</span>
          <input type="text" name="kegiatan" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Nama Tamu</span>
          <input type="text" name="nama_tamu" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Tanggal</span>
          <input type="text" name="tanggal" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Waktu</span>
          <input type="text" name="waktu" class="form-control" placeholder="">
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

