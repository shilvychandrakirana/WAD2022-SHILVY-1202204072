    <?php ();?>
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>MODUL 4 WAD | Register</title>

        <style>
        .container{
          position: absolute;
          width: 502px;
          height: 40px;
          left: 750px;

          background: #FFFFFF;
        }
        .left img {
          width: 700px;
          height: 100%;
          border-top-left-radius: 15px;
          border-bottom-left-radius: 15px;
        }
        </style>

      </head><br></br>

    <?php if (isset($_SESSION['register']) && $['register'] == 'gagal') {$_SESSION['register'] = ''; ?>
        <div class="alert alert-warning m-0 p-2 alert-dismissible " role="alert"> Email Anda Sudah Terdaftar!
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    <?php } ?>

      <body>
        <div class="container">
            <h4><strong>Login</h4></strong>
        </div><br></br>

      <div class="container">
        <form action="Process-login.php" method="POST">
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" placeholder="" name="email" required>
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="" name="password" required>
            </div>
        <div class="mb-3">
                <div class="form-check">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Daftar"><br></br>
            <h6> Anda belum punya akun? <a href="login.php">Daftar</a></h6><br></br>
        </form>
      </div>
      <div class="left">
          <img src="NISSAN XTRAIL.jpg" alt="">
      </div>

        

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