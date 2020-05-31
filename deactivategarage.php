<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
error_reporting(0);
include 'dbh.php';

$id = $_GET['id'];
$on = $_GET['on'];
$gn = $_GET['gn'];
$em = $_GET['em'];
$po = $_GET['po'];
$ad = $_GET['ad'];

$query1 = "UPDATE register_garage SET activated='0' where email='$em'";
$up_query=mysqli_query($db,$query1);

if ($up_query) {
	?>
	<META HTTP-EQUIV="Refresh", CONTENT='0, URL=viewgarage.php'>
	<?php
}
else
{
	echo "<script>window.alert('Something went Wrong .please Try again.');</script>";
}
?>