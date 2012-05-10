<?php 
include('Connection.php');

$email = $_GET['waitEmail'];

$query = "INSERT INTO email(email) VALUES ('$email')";
mysql_query($query) or die(false);
echo true;
