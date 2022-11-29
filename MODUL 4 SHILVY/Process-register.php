        <?php
            session_start();
            if($_POST['password']!=$_POST['password']){
                echo "<script>alert('Kata sandi tidak cocok')</script>";
                echo "<meta http-equiv='refresh' content='1 url=Registrasi.php'>";
            }else{
                $nama=$_POST['nama'];
                $email=$_POST['email'];
                $no_hp=$_POST['no_hp'];
                $password=$_POST['password'];
                $connect=mysqli_connect("localhost:3308", "root", "", "wad_modul4_shilvy");
                $check=mysqli_query($connect, "SELECT email FROM users_shilvy WHERE email='$email'");
                if(mysqli_num_rows($check)>0){
                    $row=mysqli_fetch_assoc($check);
                    $email_cek=$row['email'];
                    if($email==$email_cek){
                        $_SESSION[''] = 'Registrasi gagal';
                        header("location:Registrasi.php");
                    }
                }else{
                    $tambah=mysqli_query($connect, "INSERT INTO users_shilvy (nama, email, no_hp, password) VALUES ('$username', '$email', '$no_hp', '$password')");
                    if($tambah){
                        $_SESSION['register'] = 'Registrasi berhasil!!!';
                        header("location:Home_sebelum_login.php");
                    }else{
                        header("location:Registrasi.php");
                    }
                }
            }
        ?>