<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul 3 WAD</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
    .nav-link button {
        width: 66px;
        height: 19px;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 19px;
        text-align: center;
        letter-spacing: 0.46px;

        /* light/primary/origin */

        color: #3563E9;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 0;

        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 8px 22px;
        gap: 10px;

        width: 105px;
        height: 25px;

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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/PHP_DASAR/MODUL 3 SHILVY/Home.php">Home</a>
        <a class="nav-link active" aria-current="page" href="/PHP_DASAR/MODUL 3 SHILVY/AddItem.php">MyCar</a>
        <a class="nav-link" href="/PHP_DASAR/MODUL 3 SHILVY/AddItem.php"><button>Add Car</button></a>
      </div>
    </div>
  </div>
</nav><br></br>

<div class="container">
    <h5><strong>MyShowRoom</h5></strong>
    <p>List Show Room Shilvy - 1202204072</p>
</div><br></br>

<div class="container">
<div class="row row-cols-1 row-cols-md-2 row-cols-md-2 g-3">
    <div class="col">
        <div class="card">
            <img src="HONDA HR-V.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">HONDA HR-V</h5>
                <p class="card-text">Jenis Mobil sedan Honda terbaru selanjutnya adalah New HONDA HR-V yang menggunakan mesin 1.500 cc. </p>
                <a href="ItemDetail.php" class="btn btn-primary">Detail</a>
                <a href="Delete.php" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="NISSAN XTRAIL.jpg" width="150" height="314" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NISSAN XTRAIL</h5>
                <p class="card-text">Mobil sport terbaru milik Nissan adalah New NISSAN XTRAIL. Kendaraan mewah ini memiliki mesin 1.500 cc</p>
                <a href="ItemDetail.php" class="btn btn-primary">Detail</a>
                <a href="Delete.php" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="TOYOTA YARIS.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">TOYOTA YARIS</h5>
                <p class="card-text">TOYOTA YARIS kini memiliki penampilan yang lebih mewah dan elegan dengan pilihan warna two-tone. </p>
                <a href="ItemDetail.php" class="btn btn-primary">Detail</a>
                <a href="Delete.php" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div><br></br>

<p>Jumlah Mobil: 3</p>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>