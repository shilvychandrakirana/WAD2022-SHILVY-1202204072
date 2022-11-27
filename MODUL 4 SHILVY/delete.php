<?php
    $connect=mysqli_connect("localhost", "root", "", "wad_modul4_shilvy");
    $Id=$_GET['id'];
    $hapus="DELETE FROM showroom_shilvy_table WHERE id_mobil = $Id";
    if(mysqli_query($connect,$hapus)){
        header("MyItem.php");
    }
?>