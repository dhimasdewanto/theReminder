<?php



include 'DB.php';
include 'process_register.php';



$connection = connect();



if($_SERVER['REQUEST_METHOD'] == "GET") {



}
else if($_SERVER['REQUEST_METHOD'] == "POST") {

	if($_GET['url'] = "register") {

		$data = file_get_contents("php://input");
		$data = json_decode($data);

		$username = $data->username;
		$email = $data->email;
		$password = $data->password;

		processRegister($connection, $username, $email, $password);

	}

}



?>