@extends('layout.master')



<div class="col-lg-9-center px-4  " style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Data Anak
  </div>
  <div class="card-body">
  <div class="row">
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama Anak</th>
      <th scope="col">Tempat,tgl lahir</th>
      <th scope="col">Nama Ortu</th>
      <th scope="col">Alamat</th>
      <th scope="col">Umur</th>
      <th scope="col">Berat</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Jenis Kelamin</th>
    </tr>
  </thead>
  <tbody>
    @foreach($anaks as $anak)
    <tr>
    <td>{{ $loop->iteration }}</td>
      <td>{{ $anak->nama }}</td>
      <td>{{ $anak->tempat_lahir }}</td>
      <td>{{ $anak->nama_ortu }}</td>
      <td>{{ $anak->alamat }}</td>
      <td>{{ $anak->umur }}</td>
      <td>{{ $anak->berat }}</td>
      <td>{{ $anak->tinggi_badan }}</td>
      <td>{{ $anak->jenis_kelamin }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


  </div>
  </div>
</div>
</div>