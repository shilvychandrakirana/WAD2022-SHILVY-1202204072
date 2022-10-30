<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>MODUL 2</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#"></a>
        <a class="nav-link" href="/PHP_DASAR/MODUL2_SHILVY/Home.php">Home</a>
        <a class="nav-link" href="/PHP_DASAR/MODUL2_SHILVY/Booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div style="text-align:center;">
  <p>
    <h5><strong>WELCOME TO EAD RENT</h5></strong>
    <h8>Find your best deal, here!</h8>
</p>
    </div>
</div>

<div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card">
              <img src="BRIO.jpg"  width="250" height="180" alt="...">
              <div class="card-body">
                <p class="card-text"><strong>HONDA BRIO</strong>
                <br>Rp.200.000 /Day</br>
                <center>
                <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">4 kursi</li>
                <li class="list-group-item">1200 cc</li>
                <li class="list-group-item">Automatic</li>
                <center>
                </p>
                <form action="Booking.php" method="POST">
                          <div class="d-flex justify-content-center">
                          <a class="btn btn-primary" href="/PHP_DASAR/MODUL2_SHILVY/Booking.php?jenismobil<?php echo 'BRIO' ?>" value="BRIO" nama="BookNow">Book Now</a>
                </div>
                </form>
            </ul>
          </div>
          </div>
          </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="XPANDER.jpg"  width="250" height="180" alt="...">
              <div class="card-body">
                <p class="card-text"><strong>MITSUBISHI XPANDER</strong>
                <br> Rp.300.000 /Day</br>
                <center>
                <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">7 kursi</li>
                <li class="list-group-item">1500 cc</li>
                <li class="list-group-item">Manual</li>
                <center>
                </p>
                <form action="Booking.php" method="POST">
                          <div class="d-flex justify-content-center">
                          <a class="btn btn-primary" href="/PHP_DASAR/MODUL2_SHILVY/Booking.php?jenismobil<?php echo 'XPANDER' ?>" value="XPANDER" nama="BookNow">Book Now</a>
                </div>
                </form>
            </ul>
          </div>
          </div>
          </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="YARIS.png"  width="250" height="180" alt="...">
              <div class="card-body">
                <p class="card-text"><strong>TOYOTA YARIS</strong>
                <br>Rp.220.000 /Day</br>
                <center>
                <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">4 kursi</li>
                <li class="list-group-item">1200 cc</li>
                <li class="list-group-item">Automatic</li>
                <center>
                </p>
                <form action="Booking.php" method="POST">
                          <div class="d-flex justify-content-center">
                          <a class="btn btn-primary" href="/PHP_DASAR/MODUL2_SHILVY/Booking.php?jenismobil<?php echo 'YARIS' ?>" value="YARIS" nama="BookNow">Book Now</a>
                </div>
                </form>
            </ul>
          </div>
          </div>
          </div>
          </div>
</div>
<p>
         <footer>
         <footer class="footer">
                <p class="text-align: center">Created by Shilvy_1202204072</p>
            </div>
        </footer>
</p>

</body>
</html> 