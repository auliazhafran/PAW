<?php  

	require_once 'core/init.php';
	$false = '';

	if (isset($_SESSION['talker'])) {
		header("location: dashboard");
	}

	if(isset($_POST['register'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty(trim($firstname)) && !empty(trim($lastname)) && !empty(trim($email)) && !empty(trim($username)) && !empty(trim($password))){

			//cek sudah ada user
			if (isRegistered($username, $email)) {
				if (doRegistration($firstname, $lastname, $email, $username, $password)) {
					//berhasil
					$false = '<p class="text-Success">
			  		Registration Succeeded <br>
			  		</p>';
				}else{
					//gagal
					$false = '<p class="text-danger">
			  		Registration Failed <br>
			  		</p>';
				}

			}else{
				$false = '<p class="text-danger">
			  	User Already Exist <br>
			  </p>';
			}

		}
	}
		

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
	<style type="text/css">font-family: 'Lalezar', cursive;</style>
</head>

<body style="font-family: Lalezar; background-image: url('assets/BG.jpg'); background-repeat: no-repeat;background-attachment: fixed; background-size: cover;" >

	<nav class="navbar navbar-light" style="background-color: #619196">
		<div class="container">
			<a class="navbar-brand" href="index.php" style="font-size: 25pt" >
				TALK THE TALK
			</a>		
		</div>
	</nav>

	<div class="container" style="margin-bottom: 50px">
		<div class="col-md-4" style="margin-top: 50px">
			<h1  class="text-center">
				Sign Up To <br>TALK THE TALK
			</h1>
			<form action="" method="POST">
				<div class="form-group">
			    	<label for="exampleInputFirstname">Firstname</label>
			    	<input type="text" class="form-control" id="exampleInputFirstname" name="firstname">
			  	</div>

				<div class="form-group">
			    	<label for="exampleInputLastname">Lastname</label>
			    	<input type="text" class="form-control" id="exampleInputLastname" name="lastname">
			  	</div>

			  	<div class="form-group">
				    <label for="exampleInputEmail1">Email Address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
				    <small id="emailHelp">We'll never share your email with anyone else.</small>
			  	</div>

			  	<div class="form-group">
			    	<label for="exampleInputUsername">Username</label>
			    	<input type="text" class="form-control" id="exampleInputUsername" name="username">
			  	</div>

			  	<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
			  	</div>
			  
			  	<?php 
			  	echo $false 
			  	?>

			  <button name="register" type="submit" class="btn btn-warning">Sign Up</button><br><br>
			  <p>
			  	Already have an account? <a href="login.php" style="color: #0c9413"> Sign In</a> instead
			  </p>
			</form>
		</div>
	</div>
	

</body>
</html>