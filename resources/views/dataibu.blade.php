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
      <th scope="col">No</th>
      <th scope="col">Nama Ibu</th>
      <th scope="col">Alamat</th>
      <th scope="col">No BPJS</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
     </tr>
  </thead>
  <tbody>
    @foreach($ibus as $ibu)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $ibu->nama }}</td>
      <td>{{ $ibu->alamat }}</td>
      <td>{{ $ibu->no_bpjs }}</td>
      <td>{{ $ibu->status }}</td>
      <td>
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView{{ $ibu->id }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $ibu->id }}">Edit</button>
      <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $ibu->id }}">Delete</button>
      </td>
    </tr>
<!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $ibu->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $ibu->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $ibu->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('ibu.update', $ibu->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control" id="nama" name="nama" value="{{ $ibu->nama }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                       <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $ibu->tempat_lahir }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">Alamat</label>
                       <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $ibu->alamat }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">Status</label>
                       <input type="text" class="form-control" id="status" name="status" value="{{ $ibu->status }}">
                   </div>

                   <div class="form-group">
                       <label for="berat">No KK</label>
                       <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $ibu->no_kk }}">
                   </div>

                   <div class="form-group">
                       <label for="tinggi_badan">No BPJS</label>
                       <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" value="{{ $ibu->no_bpjs }}">
                   </div>

                   <div class="form-group">
                       <label for="umur">No HP</label>
                       <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $ibu->no_hp }}">
                   </div>

                   <div class="form-group">
                       <label for="jenis_kelamin">Keterangan</label>
                       <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $ibu->keterangan }}">
                   </div>

                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
      
           </div>
       </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalDelete{{ $ibu->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalDelete{{ $ibu->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDelete{{ $ibu->id }}Label">Konfirmasi Hapus Anak</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('ibu.destroy', $ibu->id) }}">
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
<div class="modal fade" id="ModalView{{ $ibu->id }}" tabindex="-1" aria-labelledby="ModalView{{ $ibu->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalView{{ $ibu->id }}Label">Detail Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <h6>Nama: {{ $ibu->nama }}</h6>
               <p>Tempat Lahir: {{ $ibu->tempat_lahir }}</p>
               <p>Alamat: {{ $ibu->alamat }}</p>
               <p>Status: {{ $ibu->status }}</p>
               <p>No KK: {{ $ibu->no_kk }}</p>
               <p>No BPJS: {{ $ibu->no_bpjs }}</p>
               <p>No HP: {{ $ibu->no_hp }}</p>
               <p>Keterangan: {{ $ibu->keterangan }}</p>
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
<div class="modal fade" id="ModalDataIbu" tabindex="-1" aria-labelledby="ModalTambahDataIbuLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataIbuLabel">Masukkan Data Ibu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('ibu.store2') }}" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="nama" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Tempat,Tanggal Lahir</span>
          <input type="text" name="tempat_lahir" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Alamat</span>
          <input type="text" name="alamat" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Status</span>
          <input type="text" name="status" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">No KK</span>
          <input type="text" name="no_kk" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">No BPJS</span>
          <input type="text" name="no_bpjs" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">No HP</span>
          <input type="text" name="no_hp" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">Keterangan</span>
          <input type="text" name="keterangan" class="form-control" placeholder="">
        </div>
        </div>
      
        <div class="modal-footer">
      <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
      <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>
<script>
$(document).ready(function() {
  // Mengaktifkan tindakan saat tombol "Simpan" diklik
  $("#btnSimpan").click(function() {
    // Tambahkan tindakan yang sesuai di sini
    console.log("Tombol Simpan diklik");
    // Contoh: Mengirim data ke server menggunakan AJAX
    $.ajax({
      url: "/simpan-data-ibu",
      method: "POST",
      data: { nama: $("#inputNama").val() }, // Contoh mengambil nilai input dengan id "inputNama"
      success: function(response) {
        console.log("Data berhasil disimpan");
        // Lakukan tindakan lain setelah data berhasil disimpan
      },
      error: function() {
        console.log("Terjadi kesalahan saat menyimpan data");
        // Lakukan tindakan lain jika terjadi kesalahan
      }
    });
  });

  // Mengaktifkan tindakan saat tombol "Batal" diklik
  $("#btnBatal").click(function() {
    // Tambahkan tindakan yang sesuai di sini
    console.log("Tombol Batal diklik");
    // Contoh: Mengosongkan nilai input
    $("#inputNama").val("");
  });
});
</script>
