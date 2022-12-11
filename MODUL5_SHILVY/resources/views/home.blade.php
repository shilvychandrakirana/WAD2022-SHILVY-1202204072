
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul5</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
    .nama{
      position: absolute;
      width: 66px;
      height: 14px;
      left: 100px;
      top: 420px;

      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      font-size: 12px;
      line-height: 14px;
      /* identical to box height */

      text-align: center;
      letter-spacing: 0.46px;

    }
    </style>
</head>
<body class="">

<nav class="bg-primary text-white py-3">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex">
        <div>
          <a class="nav-link text-white active" aria-current="page" href="/">Home</a>
        </div>
        @if(Auth::user())
          <div>
            <a class="nav-link text-white" aria-current="page" href="/mycar">MyCar</a>
          </div>
        @endif
      </div>
      @if(Auth::user())
      <div class="d-flex gap-3">
        <div class="">
          <a class="btn bg-white text-primary" aria-current="page" href="/addcar">Add Car</a>
        </div>
        <div>
            <div class="btn-group">
                <button type="button" class="btn bg-white text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
      </div>
      @else
      <div>
        <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
      </div>
      @endif
    </div>
  </div>
</nav>

<section class="content container">
  <div class="row justify-content-center mx-auto d-flex align-items-center">
    <div class="col">
      @if(Auth::user())
        <h2><b class="card-title">Selamat Datang Di Show Room {{Auth::user()->name}} </b></h2>
      @else
        <h2><b class="card-title">Selamat Datang Di Show Room</b></h2>
      @endif
        <p class="card-text">At lacus vitae nulla sagitis scelerisque nisL. Pellentesque duis
          <br>cursus vestibulum,facilisi ac,sed faucibus</br></p>
        <br></br>
        <br></br>
    <div class="display">
      <img class="style="width: 105.43px; height: 30px; left: 120px; top: 729px;" src="/foto/logo-ead.png" width="100" height="30" alt="card image">
      <br></br>

        <div class="namep" style="margin-left:150px; position: absolute">Shilvy_1202204072</div>
      </div>
</div>
<div class="col">
  <img class="card-img-top img-responsive center-block d-block mx-auto" src="foto\HONDA HR-V.jpg" width="150" height="300" alt="center">
</div>
</div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
