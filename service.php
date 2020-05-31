<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Resq Service Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT  -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">

    <style type="text/css">
        .container-map{
            height: 450px;
        }

        #map {
            width: 100%;
            height: 100%;
            border: 1px solid blue;
        }

        #data,
        #allData {
            display: none;
        }

    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="65" style="background: #f4f4f4;">
    <?php   include('header.php');?>
    <div class="container-map">
        <center><h1>Service Page Locate Your Garage</h1></center>
        <?php
         require 'resq.php';
            $edu = new resq;
            $coll = $edu->getregister_garageBlankLatLng();
            $coll = json_encode($coll, true);
            echo '<div id="data">' . $coll . '</div>';

            $allData = $edu->getAllregister_garage();
            $allData = json_encode($allData, true);
            echo '<div id="allData">' . $allData . '</div>';            
         ?>
        <div id="map"></div>
    </div>

    <?php
    include('dbh.php');
    if(isset($_SESSION['user']))
        header("location:login.php");
$Sqq = "SELECT * FROM register_garage";
$re = mysqli_query($db, $Sqq);
$total = mysqli_num_rows($re);
if ($total !=0) {   
    ?>
    
      <div style="margin-top:5%;">
    <table class="table">
        <tr>
            <td><b>ID</b></td>
            <td><b>Garage Name</b></td>
            <td><b>Email Address</b></td>
            <td><b>Phone Number</b></td>
            <td><b>Address</b></td>
        </tr>
</div>  
    

    
        <?php

        while ($row = mysqli_fetch_assoc($re)) {
            echo "<tr>

                    <td>".$row['id']."</td>
                    <td>".$row['gname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phoneno']."</td> 
                    <td>".$row['address']."</td>    
                  </tr>";
        }

}
?>
<script type="text/javascript">
    function contact()
    {
        var query = prompt("Please enter your Problem");
    }
</script>

 <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/googlemap.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E&callback=loadMap">
</script>
</body>
</html>


