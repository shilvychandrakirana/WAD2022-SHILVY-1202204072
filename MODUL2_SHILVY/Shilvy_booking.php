<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>MODUL 2</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#"></a>
        <a class="nav-link" href="/PHP_DASAR/MODUL2_SHILVY/Home.php">Home</a>
        <a class="nav-link" href="/PHP_DASAR/MODUL2_SHILVY/Booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div style="text-align:center;">
  <p>
    <h5>Rent your car now!</h5>
</p>
    </div>
</div>

<?php
if(isset($_GET['jenismobil'])){
  if($_GET['jenismobil']=='BRIO'){
      echo '<img width="350" height="250" src="BRIO.jpg"></img>';
  }
  elseif($_GET['jenismobil']=='XPANDER'){
      echo '<img width="350" height="250" src="XPANDER.jpg"></img>';
  }
  elseif($_GET['jenismobil']=='YARIS'){
    echo '<img width="350" height="250" src="YARIS.png"></img>';
}
}
else{
echo '<img width="350" height="250" src=""></img>';
}
?>



<div class="container">
  <form action="mybooking.php" method="GET">
    <div class="mb-3">
  <label for="name" class="form-label">Nama Lengkap</label>
  <input type="text" class="form-control" id="name" name="name" value="SHILVY_1202204072" readonly>
</div>
<div class="mb-3">
    <label for="Book_Date">Book Date</label>
    <input type="date" id="Book_Date"  name="Book_Date" class="form-control" placeholder="mm / dd / yyyy">
</div>
<div class="mb-3">
    <label for="Start_Time">Start Time</label>
    <input type="time" id="Start_Time" name ="Start_Time" class="form-control" placeholder="-- : --">
</div>
<div class="mb-3">
    <label for="Duration">Duration (Days)</label>
    <input type="number" id="Duration" name="Duration" class="form-control" min="1" max="7">
</div>
<div class="mb-3">
    <label for="Car_Type">Car Type</label>
    <select id="Car_Type" name="Car_Type" class="form-select" onchange="priceFunction()" aria-label="Default select example">
    <option value="HONDA BRIO">HONDA BRIO</option>
    <option value="MISTSUBISHI XPANDER">MISTSUBISHI XPANDER</option>
    <option value="TOYOTA YARIS">TOYOTA YARIS</option>
  </select>
</div>
<div class="mb-3">
    <label for="Phone_Number">Phone Number</label>
    <input type="tel" name="Phone_Number" id="Phone_Number" class="form-control" placeholder="">
</div>
<div class="mb-3">
    <label for="Add_Service"> Add Service(s):</label>
<div class="form-check">
    <input class="form-check-input" name="Add_Service[]" type="checkbox" value="25000" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Health Protocol/Rp.25.000
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" name="Add_Service[]" type="checkbox" value="100000" id="defaultCheck2">
    <label class="form-check-label" for="defaultCheck2">
      Driver/Rp.100.000
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" name="Add_Service[]" type="checkbox" value="250000" id="defaultCheck3">
    <label class="form-check-label" for="defaultCheck3">
      Full filled/Rp.250.000
  </label>
</div>

<div class="d-grid gap-2">
    <input class="btn btn-success" type="submit" name="Book" value="Book">                      
  </div>
</div>
</form>

<p>
         <footer>
         <footer class="footer">
                <p class="text-align: center">Created by Shilvy_1202204072</p>
            </div>
        </footer>
</p>

</body>
</html> 

