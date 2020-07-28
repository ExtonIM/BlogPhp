<?php 
    session_start();
    $conn = mysqli_connect("localhost", "mysql", "mysql", "blog-db");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname('localhost\blog\config.php')));
	define('BASE_URL', 'http://localhost/blog/');
?>