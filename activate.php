<?php
	$errors ='';
    include('dbh.php');
    $token = $_REQUEST['token'];
if(empty($token)){

	$errors .= 'ERRORS </br>';
	echo $errors;
}
else
{
$query1 = "UPDATE register_user SET activated='1' where token='$token'";
$up_query=mysqli_query($db,$query1);
if($up_query)
{
	echo "YOUR ACCOUNT HAVE BEEN VERIFIED";
	exit;
}
}


?>