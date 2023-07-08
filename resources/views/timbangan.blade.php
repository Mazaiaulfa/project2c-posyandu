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
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView{{ $timbangdata->id }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $timbangdata->id }}">Edit</button>
      <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $timbangdata->id }}">Delete</button>
   </td>
    </tr>
    <!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $timbangdata->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $timbangdata->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $timbangdata->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('timbang.update', $timbangdata->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="nama">Tahun</label>
                       <input type="text" class="form-control" id="nama" name="nama" value="{{ $timbangdata->nama }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Bulan</label>
                       <input type="text" class="form-control" id="umur" name="umur" value="{{ $timbangdata->umur }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">Tanggal</label>
                       <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $timbangdata->tanggal }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">Hasil Timbanga</label>
                       <input type="text" class="form-control" id="hasil_timbangan" name="hasil_timbangan" value="{{ $timbangdata->hasil_timbangan }}">
                   </div>
                   <div class="form-group">
                       <label for="nama_ortu">Keterangan</label>
                       <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $timbangdata->keterangan }}">
                   </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
           </div>
       </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalDelete{{ $timbangdata->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalDelete{{ $timbangdata->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDelete{{ $timbangdata->id }}Label">Konfirmasi Hapus Anak</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('timbang.destroy', $timbangdata->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ModalView-->
<div class="modal fade" id="ModalView{{ $timbangdata->id }}" tabindex="-1" aria-labelledby="ModalView{{ $timbangdata->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalView{{ $timbangdata->id }}Label">Detail Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <h6>Nama: {{ $timbangdata->nama }}</h6>
               <p>Umur: {{ $timbangdata->umur }}</p>
               <p>Tanggal: {{ $timbangdata->tanggal }}</p>
               <p>Hasil Timbangan: {{ $timbangdata->hasil_timbangan }}</p>
               <p>Keterangan: {{ $timbangdata->keterangan }}</p>
               
           </div>
       </div>
   </div>
</div>
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

