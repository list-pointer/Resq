<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
error_reporting(0);
include 'dbh.php';

$id = $_GET['id'];
$fn = $_GET['fn'];
$em = $_GET['em'];
$su = $_GET['su'];
$co = $_GET['co'];
$ms = $_GET['ms'];
$da = $_GET['da'];



$deleteSQl = "DELETE FROM user_query WHERE id='$id'";
$deletere = mysqli_query($db, $deleteSQl);

if ($deletere) {
	?>
	<META HTTP-EQUIV="Refresh", CONTENT='0, URL=viewquery.php'>
	<?php
}
else
{
	echo "<script>window.alert('Something went Wrong .please Try again.');</script>";
}
?>