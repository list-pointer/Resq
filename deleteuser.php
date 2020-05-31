<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
error_reporting(0);
include 'dbh.php';

$id = $_GET['id'];
$fn = $_GET['fn'];
$co = $_GET['co'];
$em = $_GET['em'];
$pa = $_GET['pa'];
$to = $_GET['to'];
$ac = $_GET['ac'];
$da = $_GET['da'];



$deleteSQl = "DELETE FROM register_user WHERE email='$em'";
$deletere = mysqli_query($db, $deleteSQl);

if ($deletere) {
	?>
	<META HTTP-EQUIV="Refresh", CONTENT='0, URL=viewusers.php'>
	<?php
}
else
{
	echo "<script>window.alert('Something went Wrong .please Try again.');</script>";
}
?>