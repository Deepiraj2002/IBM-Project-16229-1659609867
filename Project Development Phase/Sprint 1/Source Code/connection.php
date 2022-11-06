<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "smartfarmer";

$conn = mysqli_connect($uname1, $email, $upswd1, $upswd2);

if (!$conn) {
	echo "Connection failed!";
}