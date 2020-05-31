<?php
session_start();
if( isset($_SESSION['user'])){
        header("Location: index.php");
    }
    include('dbh.php');
if(isset($_POST['login_btn']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
if(  $email !='' and $password !='' )
{
	$password=md5($password);
	$check = mysqli_query($db,"SELECT * FROM register_user where email = '$email' and password = '$password' and activated ='1'"); 
	if(mysqli_num_rows($check)>=1)
	{
		$rs = mysqli_fetch_array($check);

		$_SESSION['user'] = $rs['id'];
		
		$_SESSION['name'] = $rs['name'];
		
		$_SESSION['email'] = $rs['email'];
		
		$_SESSION['date'] = $rs['date'];

		header("Location: index.php");
	}
	else{
			echo "<script>window.alert('Something Went Wrong. Please Try Again .');</script>";
}
}
 mysqli_close($db);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

	<!-- Bootstrap CSS 3 -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

	    <!-- FONT  -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

	<!-- Responsive Tabs CSS -->
	<link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">

<style >
	.register-photo .image-holder {
  display: table-cell;
  width: auto;
  background: url(img/login_signup/4.jpg);
  background-size: cover;
}

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="65" style="background: #f4f4f4;">
	<?php 	include('header.php');?>
	<section id="register">
		<div class="register-photo">
			<h2 class="text-center" style="margin-top:-30px;margin-bottom: 30px;"><strong>Customer Login.</strong></h2>
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Let's</strong> Get Started.</h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Enter Email" required="required"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Enter Password" required="required" minlength="8"></div>
              <div><small class="form-text text-danger">Minimum Length of password is 8 characters.</small></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_btn">Login</button></div><a class="already" href="signup.php">New User? Register here.</a></form>
        </div>
    </div>
	</section>


	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	
</body>

</html>
