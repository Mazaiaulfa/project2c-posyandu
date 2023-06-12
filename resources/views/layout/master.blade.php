<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posyandu Ceria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    
  </style>
  </head>
  <body>
  <nav class="navbar navbar-warning bg-warning fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler left " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="..\dashboard">POSYANDU CERIA</a>
    <div class="offcanvas offcanvas-start text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-warning" type="submit">Search</button>
        </form>
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="..\dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\dataibu">Data Ibu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\dataanak">Data Anak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\dataimunisasi">Data Imunisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\datapetugas">Data Petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\timbangan">Timbangan Anak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\jadwalposyandu">Jadwal Posyandu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\kegiatan">Data Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\laporan">Laporan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<footer class="bg-secondary text-body-secondary text-center py-3 fixed-bottom">
  <div class="container">
  Sistem informasi mahasiswa | copyright {{date("Y")}} Teknik Informatika 
  
      </div>
</footer>  
</body>
</html>
