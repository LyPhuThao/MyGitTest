
<?php

error_reporting(E_ALL);
$dbServername = "localhost";
$dbUsername = "LyPhuThao";
$dbPassword = "Asdfght5";
$dbName = "mydatabase";

$conn = @mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName)OR die('Error connecting to mySQL server:'.'mySQL_connect_error ()');
	if (!$conn) {
		echo ("Connection failed.");}
			else {
				echo("Connected successfully.");}
				
				
/*$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = " ";
$dbName = "mydatabase"; */
?>