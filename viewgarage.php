<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
$Sqq = "SELECT * FROM register_garage";
$re = mysqli_query($db, $Sqq);
$total = mysqli_num_rows($re);
if ($total !=0) {	
	?>

	<table class="striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Owner Name</b></td>
			<td><b>Garage Name</b></td>
			<td><b>Email</b></td>
			<td><b>Phone Number</b></td>
			<td><b>Garage Address</b></td>
			<td><b>Delete Account</b></td>
			<td><b>Status</b></td>
			<td><b>Activate Account</b></td>
			<td><b>Deactivate Account</b></td>
		</tr>
		<?php

		while ($row = mysqli_fetch_assoc($re)) {
			echo "<tr>

					<td>".$row['id']."</td>
					<td>".$row['oname']."</td>
					<td>".$row['gname']."</td>
					<td>".$row['email']."</td>
					<td>".$row['phoneno']."</td>
					<td>".$row['address']."</td>
					<td>".$row['activated']."</td>
					<td><a href='deletegarage.php?id=$row[id]&fn=$row[oname]&gn=$row[gname]&em=$row[email]&po=$row[phoneno]&ad=$row[address]' class='btn btn-small red' onclick='return delet()'>Delete</a></td>

			      <td><a href='activategarage.php?id=$row[id]&em=$row[email]&ac=$row[activated]' class='btn btn-small green' onclick='return activate()'>Activate</a></td>

			      <td><a href='deactivategarage.php?id=$row[id]&em=$row[email]&ac=$row[activated]' class='btn btn-small blue' onclick='return deactivate()'>Deactivate</a></td>		
			      </tr>";
		}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body>
<div class="row">
	<div class="col l12 s12 red">
		<h4 class="center white-text">Registered Garages</h4>
	</div>
</div>	
<script type="text/javascript">
		function delet()
	{
		return confirm("Are you sure you want to delete this record");
	}

	function activate()
	{
		return confirm("Are you sure you want to Activate this Account");
	}

	function deactivate()
	{
		return confirm("Are you sure you want to Deactivate this Account");
	}
</script>
<script src="js/materialize.min.js"></script>
</table>
</body>
</html>
