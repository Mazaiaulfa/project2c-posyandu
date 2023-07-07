@extends('layout.master')



<div class="col-lg-9-center px-4" style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Jadwal Posyandu
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataJadwal">Tambah Data</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Agenda</th>
                                <th scope="col">Aksi</th>
                            </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($jadwallls as $jadwalll)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $jadwalll->tahun }}</td>
      <td>{{ $jadwalll->bulan }}</td>
      <td>{{ $jadwalll->tanggal }}</td>
      <td>{{ $jadwalll->tema }}</td>
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
<div class="modal fade" id="ModalDataJadwal" tabindex="-1" aria-labelledby="ModalTambahDataJadwalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataJadwalLabel">Masukkan Jadwal Posyandu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('jadwal.store8') }}" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Tahun</span>
          <input type="text" name="tahun" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Bulan</span>
          <input type="text" name="bulan" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Tanggal</span>
          <input type="text" name="tanggal" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Tema</span>
          <input type="text" name="tema" class="form-control" placeholder="">
        </div>
        </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-Danger" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>


