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

<?php
        include('connector.php');
        $query= "SELECT * FROM showroom_shilvy_table;";
        $sql=mysqli_query($connect,$query);
        foreach ($sql as $tampil):?>
        <div class="container">
            <div class='row row-cols-1 row-cols-md-2 row-cols-md-2 g-3'>
                <div class='col'>
                    <div class='card'>
                        <img class='card-img-top' width='150' height='350' src='foto/<?php echo $tampil['foto_mobil'];?>' alt='No Image'></img>
                        <div class='card-body'>
                            <h5 class='card-title'><center><b><?php echo $tampil['nama_mobil'];?></b></center></h5>
                            <p class='card-text'><?php echo substr($tampil['deskripsi'], 0, 50);?>...</p>
                        </div>
                        <div class='card-footer'>
                            <a href='ItemDetail.php?id=<?php echo $tampil['id_mobil'];?>' button class='btn btn-primary' type='Details'>Detail</a>
                            <a href='delete.php?id=<?php echo $tampil['id_mobil'];?>' button class='btn btn-danger' type='Delete'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<footer>
    <div>
        <p>Jumlah Mobil: <?php echo mysqli_num_rows($sql)?></p>
    </div>
</footer>


