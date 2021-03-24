<?php 

	require_once 'core/init.php';
	$false = '';

	if (isset($_SESSION['talker'])) {
		header("location: dashboard");
	}

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(isExist($username)){
			if(isValid($username, $password)){
				$_SESSION['talker'] = $username;
				//username dan password benar, menuju halaman utama
				header("location: dashboard/");
			}else{
				$false = '<p class="text-danger">
			  	The username and password you entered did not match our records. Please double-check and try again. <br>
			  </p>';
			}
		}else{
			$false = '<p class="text-danger">
			  	The username and password you entered did not match our records. Please double-check and try again. <br>
			  </p>';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

	<div class="container" >
		<div class="col-md-4" style="margin-top: 50px">
			<h1  class="text-center">
				Sign In To <br>TALK THE TALK
			</h1>
			<form action="" method="POST">
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
			  
			  <button name="login" type="submit" class="btn btn-warning">Sign In</button><br><br>

			  <p>
			  	Don't have an account? <a href="register.php" style="color: #0c9413"> Sign Up</a> instead
			  </p>
			</form>
		</div>
	</div>
	

</body>

</html>