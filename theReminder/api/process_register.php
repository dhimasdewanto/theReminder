<?php



function processRegister($connection, $showname, $username, $email, $password) {

	$sql = "";

	if(validateRegister($connection, $showname, $username, $email, $password)) {

		$password = password_hash($password, PASSWORD_BCRYPT);

		$sql = "INSERT INTO users(id, showname, username, password, email) 
	 	VALUES (0, '$showname', '$username', '$password', '$email')";

	}
	else {
		echo '{ "Error": "Incorrect data!" }';
		http_response_code(409);
	}

	if($connection->query($sql)) {
		echo '{ "Success": "User created!" }';
		http_response_code(200);
	}

}



function validateRegister($connection, $showname, $username, $email, $password) {
	
	$queryRead = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
	$result = mysqli_query($connection, $queryRead);

	if(!mysqli_fetch_assoc($result)) {

		if(strlen($username) >= 3 && strlen($username) <= 50) {

			if(preg_match('/[a-zA-Z0-9_]+/', $username)) {

				if(strlen($password) >= 6 && strlen($password) <= 60) {

					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

						if(strlen($showname) >= 3 && strlen($showname) <= 255) {

							return true;

						}

					}

				}

			}

		}

	}

	return false;

}



?>