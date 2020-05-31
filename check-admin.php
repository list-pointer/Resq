<?php
session_start();
if( isset($_SESSION['email'])){
        header("Location:admin.php");
    }
    include('dbh.php');
if(isset($_POST['login_btn']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
if(  $email !='' and $password !='' )
{
	$check = mysqli_query($db,"SELECT * FROM admin where email = '$email' and password = '$password'"); 
	if(mysqli_num_rows($check)>=1)
	{
		$rs = mysqli_fetch_array($check);

		$_SESSION['email'] = $rs['email'];

		header("Location: admin.php");
	}
	else{
			echo "<script>window.alert('Something Went Wrong. Please Try Again .');</script>";
}
}
 mysqli_close($db);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Check</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	
	
</head>
<body style="background-color: #f4f4f4;">
	<div class="row">
		<div class="center">
	<header class="blue-text center"><h3>Admin Login</h3></header>
</div>
</div>
<br><br><br>
<div class="row">
	<form method="post" action="">
	<div class="card col l4 s8 push-s2 push-l4">
		<div class="card-content">
			<div class="row">
				<div class="input-field">
					<input type="email" name="email" placeholder="Email Admin"  required="required">
				</div>
			</div>
			<div class="row">
				<div class="input-field">
					<input type="password" name="password" placeholder="Password" required="required">
				</div>
			</div>
		</div>
		<div class="card-action center">
			<input type="submit" name="login_btn" class="btn btn-small red">
		</div>
	</div>
</form>
</div>
</body>
</html>