<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "demophp";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Failed to connect to MySQL!!!";
}
else echo "Success connect to MySQL!";