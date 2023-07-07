@extends('layout.master')



<div class="col-lg-9-center px-4 " style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Data Imunisasi
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataImunisasi">Tambah User</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Tanggal Imunisasi</th>
                                <th scope="col">Nama Imunisasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($imunisasis as $imunisasi)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $imunisasi->nama }}</td>
      <td>{{ $imunisasi->umur }}</td>
      <td>{{ $imunisasi->tanggal }}</td>
      <td>{{ $imunisasi->nama_imunisasi }}</td>
      <td>
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView{{ $imunisasi->id }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $imunisasi->id }}">Edit</button>
      <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $imunisasi->id }}">Delete</button>
      </td>
    </tr>
    <!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $imunisasi->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $imunisasi->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $imunisasi->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('imunisasi.update', $imunisasi->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control" id="nama" name="nama" value="{{ $imunisasi->nama }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Umur</label>
                       <input type="text" class="form-control" id="umur" name="umur" value="{{ $imunisasi->umur }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">tanggal</label>
                       <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $imunisasi->tanggal }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">Nama Imunisasi</label>
                       <input type="text" class="form-control" id="nama_imunisasi" name="nama_imunisasi" value="{{ $imunisasi->nama_imunisasi }}">
                   </div>

                   <div class="form-group">
                       <label for="berat">Keterangan</label>
                       <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $imunisasi->keterangan }}">
                   </div>

                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
      
           </div>
       </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalDelete{{ $imunisasi->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalDelete{{ $imunisasi->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDelete{{ $imunisasi->id }}Label">Konfirmasi Hapus Anak</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus anak ini?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('imunisasi.destroy', $imunisasi->id) }}">
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
<div class="modal fade" id="ModalView{{ $imunisasi->id }}" tabindex="-1" aria-labelledby="ModalView{{ $imunisasi->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalView{{ $imunisasi->id }}Label">Detail Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <h6>Nama Anak: {{ $imunisasi->nama }}</h6>
               <p>Umur: {{ $imunisasi->umur }}</p>
               <p>Tanggal: {{ $imunisasi->tanggal }}</p>
               <p>Nama Imunisasi: {{ $imunisasi->nama_imunisasi }}</p>
               <p>Keterangan: {{ $imunisasi->keterangan }}</p>
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
<div class="modal fade" id="ModalDataImunisasi" tabindex="-1" aria-labelledby="ModalTambahDataImunisasiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataImunisasiLabel">Masukkan Data Ibu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('imunisasi.store3') }}" method="post">
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
        <span class="input-group-text">Nama Imunisasi</span>
          <input type="text" name="nama_imunisasi" class="form-control" placeholder="">
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
