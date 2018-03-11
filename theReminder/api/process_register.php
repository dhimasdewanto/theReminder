<?php



function processRegister($connection, $username, $email, $password) {

	$sql = "";

	if(validateRegister($connection, $username, $email, $password)) {

		$password = password_hash($password, PASSWORD_BCRYPT);

		$sql = "INSERT INTO users(id, username, password, email) 
	 	VALUES (0, '$username', '$password', '$email')";

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




/**
	Bugs: Ga bisa validasi apabila terdapat username atau email yang sama
*/
function validateRegister($connection, $username, $email, $password) {
	
	//if(!$connection->query("SELECT username FROM users WHERE username='$username'")) {

		if(strlen($username) >= 3 && strlen($username) <= 50) {

			if(preg_match('/[a-zA-Z0-9_]+/', $username)) {

				if(strlen($password) >= 6 && strlen($password) <= 60) {

					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

						//if(!$connection->query("SELECT email FROM users WHERE email='$email'")) {

							return true;

						//}

					}

				}

			}

		}

	//}

	return false;

}



?>