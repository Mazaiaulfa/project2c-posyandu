@extends('layout.master')





<!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $anaks->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $anak->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $anaks->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('anak.update', $anaks->id) }}" method="POST">
                   @csrf
                   @method('PUT')

                   <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control" id="nama" name="nama" value="{{ $anaks->nama }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                       <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $anaks->tempat_lahir }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">Alamat</label>
                       <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $anaks->alamat }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">Nama Orang Tua</label>
                       <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="{{ $anaks->nama_ortu }}">
                   </div>

                   <div class="form-group">
                       <label for="berat">Berat Badan</label>
                       <input type="text" class="form-control" id="berat" name="berat" value="{{ $anaks->berat }}">
                   </div>

                   <div class="form-group">
                       <label for="tinggi_badan">Tinggi Badan</label>
                       <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="{{ $anaks->tinggi_badan }}">
                   </div>

                   <div class="form-group">
                       <label for="umur">Umur</label>
                       <input type="text" class="form-control" id="umur" name="umur" value="{{ $anaks->umur }}">
                   </div>

                   <div class="form-group">
                       <label for="jenis_kelamin">Jenis Kelamin</label>
                       <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $anaks->jenis_kelamin }}">
                   </div>

                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
           </div>
       </div>
   </div>
</div>
