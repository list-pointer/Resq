<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email']))
        header("location: check-admin.php");
$Sqq = "SELECT * FROM user_query";
$re = mysqli_query($db, $Sqq);
$total = mysqli_num_rows($re);
if ($total !=0) {	
	?>

	<table class="striped">
		<tr>
			<td><b>Id</b></td>
			<td><b>Name</b></td>
			<td><b>Email</b></td>
			<td><b>Subject</b></td>
			<td><b>Phone Number</b></td>
			<td><b>Message</b></td>
			<td><b>Date</b></td>
			<td><b>Status</b></td>
			<td><b>Delete Query</b></td>
			<td><b>Query Resolved</b></td>
			<td><b>query Un-Resolved</b></td>
		</tr>
		<?php

		while ($row = mysqli_fetch_assoc($re)) {
			echo "<tr>

					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['email']."</td>
					<td>".$row['subject']."</td>
					<td>".$row['phoneno']."</td>
					<td>".$row['message']."</td>
					<td>".$row['date']."</td>
					<td>".$row['resolved']."</td>	
					<td><a href='deletequery.php?&id=$row[id]&fn=$row[name]&em=$row[email]&su=$row[subject]&co=$row[phoneno]&ms=$row[message]&da=$row[date]' class='btn btn-small red' onclick='return delet()'>Delete</a></td>	

					<td><a href='resolvequery.php?id=$row[id]&rs=$row[resolved]' class='btn btn-small green' onclick='return resolve()'>Resolved</a></td>

			      <td><a href='unresolvequery.php?id=$row[id]&rs=$row[resolved]' class='btn btn-small blue' onclick='return unresolve()'>Un-Resolved</a></td>			
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
		<h4 class="center white-text">User Quries</h4>
	</div>
</div>	
<script type="text/javascript">
	function delet()
	{
		return confirm("Are you sure you want to delete this record");
	}

	function resolve()
	{
		return confirm("Are you sure this query is resolved");
	}

	function unresolve()
	{
		return confirm("Are you sure this query is not resolved");
	}
</script>
<script src="js/materialize.min.js"></script>
</table>
</body>
</html>
