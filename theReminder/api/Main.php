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

		$showname = $data->showname;
		$username = $data->username;
		$email = $data->email;
		$password = $data->password;

		processRegister($connection, $showname, $username, $email, $password);

	}

}



?>