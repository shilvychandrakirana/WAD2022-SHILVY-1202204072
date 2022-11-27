<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST['remember'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    setCookie("email", $email, time()+3600);
    setCookie("password", $password, time()+3600);
}
$connect=mysqli_connect("localhost", "root", "", "wad_modul4_shilvy");
$email=$_POST['email'];
$password=$_POST['password'];
$dt_username="SELECT * FROM users_shilvy WHERE email='$email'";
$executeQuery=mysqli_query($connect, $dt_username);
if(mysqli_num_rows($executeQuery)>0){
    $result=mysqli_fetch_assoc($executeQuery);
    $result_check=$result['password'];
    if($password==$result_check){
        $_SESSION['Login']=TRUE;
        $_SESSION['nama']=$result['nama'];
        $_SESSION['id']=$result['id'];
        $_SESSION['Login']='berhasil';
        header('location:Home_setelah_login.php');
        exit();
    }else{
        $_SESSION['message']='Password anda salah, silahkan coba lagi!';
        header('location:Login.php');
        exit();
    }
}
$_SESSION['message']='Gagal Login';
header('location:Login.php');
exit();
?>