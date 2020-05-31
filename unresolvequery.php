<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
error_reporting(0);
include 'dbh.php';

$id = $_GET['id'];
$rs = $_GET['rs'];


$query1 = "UPDATE user_query SET resolved='Not-Resolved' where id='$id'";
$up_query=mysqli_query($db,$query1);

if ($up_query) {
	?>
	<META HTTP-EQUIV="Refresh", CONTENT='0, URL=viewquery.php'>
	<?php
}
else
{
	echo "<script>window.alert('Something went Wrong .please Try again.');</script>";
}
?>