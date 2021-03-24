<?php 

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'talkthetalk';

	$connection = mysqli_connect($host, $username, $password, $db) or die(mysqli_error);

?>