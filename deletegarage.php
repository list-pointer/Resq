<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
error_reporting(0);
include 'dbh.php';

$id = $_GET['id'];



$deleteSQl = "DELETE FROM register_garage WHERE email='$em'";
$deletere = mysqli_query($db, $deleteSQl);

if ($deletere) {
	?>
	<META HTTP-EQUIV="Refresh", CONTENT='0, URL=viewgarage.php'>
	<?php
}
else
{
	echo "<script>window.alert('Something went Wrong .please Try again.');</script>";
}
?>