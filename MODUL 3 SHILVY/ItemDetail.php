<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul  3 WAD</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
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
      </div>
    </div>
  </div>
</nav>

    <?php
        $connect=mysqli_connect("localhost", "root", "", "modul3");
        $id=$_GET['id'];
        $query=mysqli_query($connect, "SELECT * FROM showroom_shilvy_table WHERE id_mobil=$id");
        $selects=mysqli_fetch_array($query);
    ?>
    <h2><b><?php echo $selects['nama_mobil'] ?></b></h2>
    <p>Detail Mobil <?php echo $selects['nama_mobil'] ?></p>
    <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
        <img src="foto/<?php echo $selects['foto_mobil']?>" alt="No Image"></img>
        <form enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="nama_mobil"><b>Nama Mobil</b></label>
                <input type="text" name="nama_mobil" class="form-control form-control-readonly" value="<?php echo $selects['nama_mobil']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_pemilik"><b>Nama Pemilik</b></label>
                <input type="text" name="nama_pemilik" class="form-control"value="<?php echo $selects['nama_pemilik']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="merk_mobil"><b>Merk</b></label>
                <input type="text" name ="merk" class="form-control" value="<?php echo $selects['merk']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="tanggal"><b>Tanggal Beli</b></label>
                <input type="date" name="tanggal_beli" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo $selects['tanggal_beli']?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="3" name="Deskripsi" readonly><?php echo $selects['deskripsi']?></textarea>
            </div>
            <div class="mb-3">
                <label for="Foto"><b>Foto</b></label>
                <input type="file" name="Foto" id="Foto" class="form-control" value="" readonly><span><?php echo $selects['foto_mobil']?></span>
            </div>
            <div class="mb-3">
                <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
                <div class="mb-3">
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Lunas" <?php ($selects["status_pembayaran"] == 'Yes') ? "checked" : ""?>" readonly>
                    <label for="Lunas">Lunas</label>
                    <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Belum Lunas" <?php ($selects["status_pembayaran"] == 'No') ? "checked" : ""?>" readonly>
                    <label for="Belum Lunas">Belum Lunas</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <a href='/EditItem.php?id=<?php echo $selects['id_mobil']?>' button class='btn btn-primary' type='Edit'>Edit</button>                
            </div>
        </form>
    </div>