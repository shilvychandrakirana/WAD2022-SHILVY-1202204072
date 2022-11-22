<?php
    include('connector.php');
    $connect=mysqli_connect("localhost", "root", "", "modul3");
    $nama_mobil = $_POST['mobil'];
    $nama_pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto=$_FILES['Foto']['name'];
    $foto_tmp=$_FILES['foto']['tmp_name'];
    move_uploaded_file($foto_tmp, 'foto/'.$foto);
    $pembayaran = $_POST['status_pembayaran'];
    $query = mysqli_query($connect, "INSERT INTO showroom_shilvy_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil','$nama_pemilik','$merk','$tanggal','$deskripsi','$foto','$pembayaran')");
    if($query){
        echo "<script> alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=MyItem.php'>";
        header("/MyItem.php");
    }
    else{
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=MyItem.php'>";
        header("/MyItem.php");
    }
?>