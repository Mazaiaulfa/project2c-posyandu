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
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView{{ $jadwalll->id }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $jadwalll->id }}">Edit</button>
      <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $jadwalll->id }}">Delete</button>
    </td>
    </tr>
<!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $jadwalll->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $jadwalll->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $jadwalll->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('jadwal.update', $jadwalll->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="nama">Tahun</label>
                       <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $jadwalll->tahun }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Bulan</label>
                       <input type="text" class="form-control" id="bulan" name="bulan" value="{{ $jadwalll->bulan }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">Tanggal</label>
                       <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $jadwalll->tanggal }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">Tema</label>
                       <input type="text" class="form-control" id="tema" name="tema" value="{{ $jadwalll->tema }}">
                   </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
           </div>
       </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalDelete{{ $jadwalll->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalDelete{{ $jadwalll->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDelete{{ $jadwalll->id }}Label">Konfirmasi Hapus Anak</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('jadwal.destroy', $jadwalll->id) }}">
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
<div class="modal fade" id="ModalView{{ $jadwalll->id }}" tabindex="-1" aria-labelledby="ModalView{{ $jadwalll->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalView{{ $jadwalll->id }}Label">Detail Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <h6>Tahun: {{ $jadwalll->tahun }}</h6>
               <p>Bulan: {{ $jadwalll->bulan }}</p>
               <p>Tanggal: {{ $jadwalll->tanggal }}</p>
               <p>Tema: {{ $jadwalll->tema }}</p>
               
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


