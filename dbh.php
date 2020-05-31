<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "resq";

$db = mysqli_connect($server, $username, $password, $dbname );

if (mysqli_connect_error()) {
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{

}

?>