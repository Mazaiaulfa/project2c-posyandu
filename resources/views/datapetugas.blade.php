@extends('layout.master')



<div class="col-lg-9-center px-4" style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Data Petugas
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataPetugas">Tambah Data</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($petugasdatas as $petugasdata)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $petugasdata->nama }}</td>
      <td>{{ $petugasdata->email }}</td>
      <td>{{ $petugasdata->alamat }}</td>
      <td>{{ $petugasdata->no_hp }}</td>
      <td>
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView{{ $petugasdata->id }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $petugasdata->id }}">Edit</button>
      <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $petugasdata->id }}">Delete</button>
         </td>
    </tr>
    <!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $petugasdata->id }}" tabindex="-1" aria-labelledby="ModalEdit{{$petugasdata->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $petugasdata->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('petugas.update', $petugasdata->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control" id="nama" name="nama" value="{{ $petugasdata->nama }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Email</label>
                       <input type="text" class="form-control" id="email" name="email" value="{{ $petugasdata->email }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">Alamat</label>
                       <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $petugasdata->alamat }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">No HP</label>
                       <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $petugasdata->no_hp }}">
                   </div>

                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
      
           </div>
       </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalDelete{{ $petugasdata->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalDelete{{ $petugasdata->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDelete{{ $petugasdata->id }}Label">Konfirmasi Hapus Anak</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('petugas.destroy', $petugasdata->id) }}">
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
<div class="modal fade" id="ModalView{{ $petugasdata->id }}" tabindex="-1" aria-labelledby="ModalView{{ $petugasdata->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalView{{ $petugasdata->id }}Label">Detail Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <h6>Nama: {{ $petugasdata->nama }}</h6>
               <p>Email: {{ $petugasdata->email }}</p>
               <p>Alamat: {{ $petugasdata->alamat }}</p>
               <p>No HP: {{ $petugasdata->no_hp }}</p>
            
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
<div class="modal fade" id="ModalDataPetugas" tabindex="-1" aria-labelledby="ModalTambahDataPetugasLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataPetugasLabel">Masukkan Data Petugas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('petugas.store6') }}" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="nama" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Email</span>
          <input type="text" name="email" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Alamat</span>
          <input type="text" name="alamat" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">No HP</span>
          <input type="text" name="no_hp" class="form-control" placeholder="">
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

