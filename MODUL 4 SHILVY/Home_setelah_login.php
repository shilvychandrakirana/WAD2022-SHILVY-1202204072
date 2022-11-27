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
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .nama{
      position: absolute;
      width: 66px;
      height: 14px;
      left: 100px;
      top: 420px;

      font-family: 'calibri';
      font-style: normal;
      font-weight: 500;
      font-size: 18px;
      line-height: 15px;
      /* identical to box height */

      text-align: center;
      letter-spacing: 0.46px;

    }
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
              <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/Home_setelah_login.php">Home</a>
              <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/AddItem.php">Mycar</a>
              <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/AddItem.php"><button>Add Car</button></a>
      </div>
            </div>
          </div>
        </div>
      </nav>
      
<section class="content">
  <div class="row justofy-content-center mx-auto d-flex align-items-center">
    <div class="col">
      <h2 class="card-title">Selamat Datang Di Show Room Shilvy</h2>   
        <p class="card-text">At lacus vitae nulla sagitis scelerisque nisL. Pellentesque duis 
          <br>cursus vestibulum,facilisi ac,sed faucibus</br></p>
          <a href="AddItem.php" class="btn btn-primary">MyCar</a>
        <br></br>
        <br></br>
        
        <div class="col">
        <img class="style="height: auto; width: 64px; margin-top: 36px; src="logo-ead.png" alt="card image">
        <br></br>

        <p class="nama" style="margin-left:150px;">Shilvy_1202204072</p>
      </div>
</div>
<div class="col">
  <img class="card-img-top img-responsive center-block d-block mx-auto" src="foto/HONDA HR-V.jpg" width="250" height="280" alt="center">
</div>
</div>
</section>

</body>
</html>


  