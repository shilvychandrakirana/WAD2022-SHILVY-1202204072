<!DOCTYPE html>
<html lang="eng">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY//Home_setelah_login.php">Home</a>
            <a class="nav-link active" aria-current="page" href="//PHP_DASAR/MODUL 4 SHILVY//MyItem.php">MyCar</a>
            <a class="nav-link" href="/PHP_DASAR/MODUL 4 SHILVY/AddItem.php"><button>Add Car</button></a>
        </div>
        </div>
    </div>
    </nav><br></br>

    <?php
        $connect=mysqli_connect("localhost:3308", "root", "", "wad_modul4_shilvy");
        $id=$_GET['id'];
        $query=mysqli_query($connect, "SELECT * FROM showroom_shilvy_table WHERE id_mobil=$id");
        $selects=mysqli_fetch_array($query);
    ?>
    <div class="container">
    <h1><b>Edit</b></h1>
    <p>Edit Mobil <?php echo $selects['nama_mobil'] ?></p>
    <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
        <img src="foto/<?php echo $selects['foto_mobil']?>" alt="No Image"></img>
        <form action="update.php?id=<?php echo $selects['id_mobil']?>" method="POST" enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="nama_mobil"><b>Nama Mobil</b></label>
                <input type="text" name="nama_mobil" class="form-control form-control-readonly" value="<?php echo $selects['nama_mobil']?>">
            </div>
            <div class="mb-3">
                <label for="pemilik"><b>Nama Pemilik</b></label>
                <input type="text" name="pemilik" class="form-control"value="<?php echo $selects['pemilik_mobil']?>">
            </div>
            <div class="mb-3">
                <label for="merk"><b>Merk</b></label>
                <input type="text" name ="merk" class="form-control" value="<?php echo $selects['merk_mobil']?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_beli"><b>Tanggal Beli</b></label>
                <input type="date" name="tanggal_beli" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo $selects['tanggal_beli']?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="3" name="deskripsi"><?php echo $selects['deskripsi']?></textarea>
            </div>
            <div class="mb-3">
                <label for="Foto"><b>Foto</b></label>
                <input type="file" name="Foto" id="Foto" class="form-control" value=""><span><?php echo $selects['foto_mobil']?></span>
            </div>
            <div class="mb-3">
                <label for="status_pembayaran"><b>Status Pembayaran</b></label>
                <div class="mb-3">
                    <input type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas" <?php ($selects["status_pembayaran"] == 'Yes') ? "checked" : ""?>>
                    <label for="Lunas">Lunas</label>
                    <input type="radio" name="status_pembayaran" id="status_pembayaran" value="Belum Lunas" <?php ($selects["status_pembayaran"] == 'No') ? "checked" : ""?>>
                    <label for="Belum Lunas">Belum Lunas</label>
                </div>
            </div>
                <input class='btn btn-primary'name="Simpan" type="submit"></button><br></br>
        </div>  
</div>              
            </div>
        </form>
    </div>

