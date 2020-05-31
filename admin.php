<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<title>Home</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script src="js/materialize.min.js"></script>
	<script src="fontawesome/js/all.js"></script>
	<script src="js/jq.js"></script>
</head>
<body style="background-color: #f4f4f4;">

	<nav class="fixed-nav black">
		<div class="nav-wrapper">
			<a href="" class="brand-logo center animated bounceInLeft">Admin Panel</a>
			<a href="" data-target="mobile" class="sidenav-trigger">&#9776;</a>
			<ul class="right hide-on-med-and-down">
			<li><a href="logout.php" class="btn btn-small red">Logout</a></li>
		</ul>
		</div>
		<ul class="sidenav" id="mobile">
			<li><a href="logout.php" class="btn btn-small red">Logout</a></li>
		</ul>
	</nav><br><br><br><br>



	<div class="row" style="margin-left: 20%;" >
	<div class="card col l2 s9 push-l2 push-s2">
		<div class="card-title center">
		</div>
		<div class="card-content center">
			<header class="red-text"><b><big>Registered Users</big></b></header><br>
			<span><i class="fas fa-users" style="font-size: 90px;"></i></span>
		</div>
		<div class="card-action center">
			<a href="viewusers.php" class="btn btn-small red">View</a>
		</div>
	</div>
	<div class="card col l2 s9  push-l3 push-s2">
		<div class="card-title center">

		</div>
		<div class="card-content center">
			<header class="red-text"><b><big>Registered Garages</big></b></header><br>
			<span><i class="fas fa-dumpster" style="font-size: 90px;"></i></span>
		</div>
		<div class="card-action center">
			<a href="viewgarage.php" class="btn btn-small red">View</a>
		</div>
	</div>
	</div>

<div class="row" style="margin-left: 20%;" >
	<div class="card col l2 s9 push-l2 push-s2">
		<div class="card-title center">
		</div>
		<div class="card-content center">
			<header class="red-text"><b><big>User Quries</big></b></header><br>
			<span><i class="fas fa-users" style="font-size: 90px;"></i></span>
		</div>
		<div class="card-action center">
			<a href="viewquery.php" class="btn btn-small red">View</a>
		</div>
	</div>
	<div class="card col l2 s9  push-l3 push-s2">
		<div class="card-title center">
		</div>
		<div class="card-content center">
			<header class="red-text"><b><big>Service Record</big></b></header><br>
			<span><i class="fas fa-dumpster" style="font-size: 90px;"></i></span>
		</div>
		<div class="card-action center">
			<a href="viewservice.php" class="btn btn-small red">View</a>
		</div>
	</div>
	</div>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('.sidenav').sidenav();

	});

</script>
<script src="js/materialize.min.js"></script>
</body>
</html>