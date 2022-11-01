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
        <a class="nav-link" href="/PHP_DASAR/MODUL2_SHILVY/Shilvy_home.php">Home</a>
        <a class="nav-link" href="/PHP_DASAR/MODUL2_SHILVY/Shilvy_booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div style="text-align:center;">
  <p>
    <h5>Thank You SHILVY_1202204072 for Reserving</h5>
    <h8>Please double check your reservation details</h8>
</p>
    </div>
</div>

<?php
$Booking_Number = isset($_GET['Booking_Number']) ? $_GET['Booking_Number'] : '';
$Name = isset($_GET['name']) ? $_GET['name'] : '';
$Check_In = isset($_GET['Book_Date']) ? $_GET['Book_Date'] : '';
$Duration = isset($_GET['Duration']) ? $_GET['Duration'] : '';
$Check_Out = date('Y-m-d', strtotime($Check_In."+$Duration days"));
$Car_Type = isset($_GET['Car_Type']) ? $_GET['Car_Type'] : '';
$Phone_Number = isset($_GET['Phone_Number']) ? $_GET['Phone_Number'] : '';
$Services = isset($_GET['AddService']) ? $_GET['AddService'] : '';
$Total_Prices = isset($_GET['Total_Price']) ? $_GET['Total_Price'] : '';

?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Services</th>
                <th scope="col">Total Price(s)</th>
            </tr>
        </thead>
    <tbody>
        <tr>
                <th scope="row">1</th>
                <td><?php echo Rand(12000,40000) ?></td>
                <td><?php echo $Name ?></td>
                <td><?php echo $Check_In ?></td>
                <td><?php echo $Check_Out ?></td>
                <td><?php echo $Car_Type?></td>
                <td><?php echo $Phone_Number ?></td>
                <td><?php echo $Services?></td>
                <td><?php echo $Total_Prices?></td>
        </tr>
    </thbody>
</table>

<p>
<p>
         <footer>
         <footer class="footer">
                <p class="text-align: center">Created by Shilvy_1202204072</p>
            </div>
        </footer>
</p>
</p>

</body>
</html> 


                


