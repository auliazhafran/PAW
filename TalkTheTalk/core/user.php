<?php 

	function isRegistered($username, $email){

		global $connection;

		$email = mysqli_real_escape_string($connection, $email);
		$username = mysqli_real_escape_string($connection, $username);

		$query = "SELECT * FROM talkthetalk_users WHERE username = '$username' OR email = '$email'";

		$exec = mysqli_query($connection, $query);

		if(mysqli_num_rows($exec) == 0) {
			return true;
		}else{
			return false;
		}

	}

	function doRegistration($firstname, $lastname, $email, $username, $password){

		global $connection;

		$firstname  = mysqli_real_escape_string($connection, $firstname);
		$lastname = mysqli_real_escape_string($connection, $lastname);
		$email = mysqli_real_escape_string($connection, $email);
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "INSERT INTO talkthetalk_users (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

		if(mysqli_query($connection, $query)){
			//jika berhasil input database
			return true;
		}else{
			return false;
		}

	}

	function isExist($username){
		global $connection;

		$username = mysqli_real_escape_string($connection, $username);
		$query = "SELECT * FROM talkthetalk_users WHERE username = '$username'";

		if ($result = mysqli_query($connection, $query)) {
			if (mysqli_num_rows($result)>0) {
				return true;
			}else{
				return false;
			}
		}
	}

	function isValid($username, $password){
		global $connection;

		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		$query = "SELECT * FROM talkthetalk_users WHERE username = '$username'";

		$exec = mysqli_query($connection, $query);

		$data = mysqli_fetch_assoc($exec);

		if (password_verify($password, $data['password'])) {
			//password benar
			return true;
		}else{
			//password salah
			return false;
		}
	}

?>