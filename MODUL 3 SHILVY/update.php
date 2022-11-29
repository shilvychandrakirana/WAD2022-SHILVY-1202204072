<?php
    include('connector.php');
    $connect=mysqli_connect("localhost", "root", "", "modul3");
    $nama_mobil = $_POST['mobil'];
    $nama_pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto=$_FILES['Foto']['name'];
    $foto_tmp=$_FILES['Foto']['tmp_name'];
    move_uploaded_file($foto_tmp, 'foto/'.$foto);
    $pembayaran = $_POST['status_pembayaran'];
    if(isset($_POST['radio'])){
        $pembayaran = $_POST['radio'];
    }

    $query = mysqli_query($connect, "UPDATE showroom_shilvy_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil','$nama_pemilik','$merk','$tanggal','$deskripsi','$foto','$pembayaran')");
    if($query){
        header ("Location: MyItem.php");
    }
?>