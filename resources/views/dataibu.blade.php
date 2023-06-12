@extends('layout.master')



<div class="col-lg-9-center px-4 " style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Data Ibu
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataIbu">Tambah Data</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No BPJS</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
    </tr>
  </thead>
  <tbody>
  <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        
                                    </td>
                                    <td> </td>
                                    <td class="d-flex">
                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"><a>View</a></button>
                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><a>Edit</a></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"><a>Delete</a></button>

                                    </td>
                                </tr>
  </tbody>
</table>
  </div>
  </div>
</div>
</div>
<footer class="bg-secondary text-body-secondary text-center py-3 fixed-bottom">
  <div class="container">
  Sistem informasi mahasiswa | copyright {{date("Y")}} Teknik Informatika 
  
      </div>
</footer>

<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataIbu" tabindex="-1" aria-labelledby="ModalTambahDataIbuLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataIbuLabel">Masukkan Data Ibu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Tempat,Tanggal Lahir</span>
          <input type="text" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Alamat</span>
          <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Status</span>
          <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">No KK</span>
          <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">No BPJS</span>
          <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">No HP</span>
          <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">Keterangan</span>
          <input type="text" class="form-control" placeholder="">
        </div>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-Danger" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>


