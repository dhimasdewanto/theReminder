<?php



function connect() {

	$dbHost = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "the_reminder";

	$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) OR die("Failed: %s \n" . $connection->error);

	return $connection;

}



function disconnect($connection) {
	$connection->close();
}



?>