<?php
    $connect = mysqli_connect("localhost", "root", "", "wad_modul4_shilvy");
    if ($connect) {
        echo "";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul 4 WAD</title>
    <style>
      .nav-link button {
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 8px 22px;
      gap: 10px;

      position: absolute;
      width: 110px;
      height: 40px;
      left: 1133px;
      top: 25px;

      /* light/primary/origin */
      color: #3563E9;

      /* Inside auto layout */
      flex: none;
      order: 1;
      flex-grow: 0;

      width: 105px;
      height: 27px;

      /* white */
      background: #FFFFFF;
      border-radius: 5px;
      border: none;
        
    }
    
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#"></a>
              <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/Home.php">Home</a>
              <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/AddItem.php">Mycar</a>
              <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/AddItem.php"><button>Add Car</button></a>
      </div>
            </div>
          </div>
        </div>
      </nav>

  <div class="container">
        <center><h4><strong>Profile</h4></strong><center>
    </div><br></br>

    
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="user@gmail.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" placeholder="Lorem Ipsum">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone*</label>
    <div class="col-sm-10">
      <input type="no_hp" class="form-control" id="no_hp" placeholder="+1 (212) 5187402">
    </div>
  </div>
  <hr />
  <div class="mb-3 row">
    <label for="katasandi" class="col-sm-2 col-form-label">Kata Sandi*</label>
    <div class="col-sm-10">
      <input type="katasandi" class="form-control" id="name" placeholder="Kata Sandi">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="confirm" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi*</label>
    <div class="col-sm-10">
      <input type="confirm" class="form-control" id="confirm" placeholder="Konfirmasi Kata Sandi">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="warna" class="col-sm-2 col-form-label">Warna Navbar</label>
    <div class="col-sm-10">
      <input type="warna" class="form-control" id="warna" placeholder="Blue">
    </div>
  </div>


