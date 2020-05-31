<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	session_start();
     if( isset($_SESSION['user'])){
        header("Location: index.php");
    }
    include('dbh.php');
if(isset($_POST['submit_btn']))
{
 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	$password = $_POST['password'];



if( $name !='' and $email !='' and $phoneno !='' and $password !='' )
{
	$check = mysqli_query($db,"SELECT * FROM register_user where email = '$email'"); 
	if(mysqli_num_rows($check)>=1)
	{
		echo "<script>window.alert('Email Address Already In Use.Please Enter A Different Email Address.');</script>";
	}
	else{
		$token = md5($name);
		$password=md5($password);
	$sql="INSERT INTO register_user(name,phoneno,email,password,token,date) VALUES('$name','$phoneno','$email','$password','$token',  NOW())";
	$query=mysqli_query($db,$sql);
	if($query)
	{
		            require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bharatkumavat234@gmail.com';                     // SMTP username
    $mail->Password   = 'kumavatttt';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bharatkumavat234@gmail.com', 'Mini Project');
    $mail->addAddress($email, $name);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Please Click on the link below and activate your account';
    
    $Message ='<a href="http://localhost:8080/RESQ 9.0/activate.php?token='.$token.'">CLICK HERE</a>';
    $mail->Body    =$Message; 
    
    $mail->send();
    
     header("Location: index.php");
      
} catch (Exception $e) {
   echo "<script>window.alert('Incorrect Email Address.Please Enter a Different Email Address.');</script>"; 
}
        
    }
}
}
mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- important meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>Resq Customer SignUp</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

	<!-- Responsive Tabs CSS -->
	<link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">

	<!-- FONT  -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65" style="background: #f4f4f4;">
	<?php 	include('header.php');?>
	<section id="register">
		<div class="register-photo">
			<h2 class="text-center" style="margin-top:-40px;margin-bottom: 20px;"><strong>Customer Registartion.</strong></h2>
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Enter Name" required="required"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Enter Email" required="required"></div>
                <div class="form-group"><input class="form-control" type="text" name="phoneno" placeholder="Phone Number" minlength="10" maxlength="10" required="required"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Enter Password" required="required" minlength="8"></div>
              <div><small class="form-text text-danger">Minimum Length of password is 8 characters.</small></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required="required">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit_btn">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
	</section>
<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	
</body>

</html>
