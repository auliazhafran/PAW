<?php  

require_once '../core/init.php';

if (!isset($_SESSION['user'])) {
	header("location: ../login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Start Chat</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<style type="text/css">font-family: 'Lalezar', cursive;</style>
</head>
<body style="font-family: Lalezar; background-image: url('../assets/BGC.jpg'); background-repeat: no-repeat;background-attachment: fixed; background-size: cover;" >

	<nav class="navbar navbar-light" style="background-color: #619196">
		<div class="container">
			<a class="navbar-brand" href="index.php" style="font-size: 27pt" >
				TALK THE TALK
			</a>
				<a class="navbar-brand" href="../logout.php" style="font-size: 27pt" ><i class="fas fa-bed"></i> Sign Out</a>			
		</div>
	</nav>

	<script type="text/javascript">
		function update()
		{
		  $.post("server.php", { code: $("#code").val()}, 
		    function(data) {
		      $("#chatField").html(data);
		    }
		  );
		 
		    setTimeout('update()', 1000);
		}


		$(document).ready(
		    function() {
		        update();
		        // isEmpty();
		        // checkRecent();

		        $("#message").on('keypress',function(e) {
				    if(e.which == 13) {
				        
		                $.post("server.php", {
		                        message: $("#message").val(),
		                        code: $("#code").val()
		                    },
		                    function(data) {
		                        $("#chatField").html(data);
		                        $("#message").val("");
		                    }
		                );
				    }
				});

		        $("#send").click(
		            function() {
		                $.post("server.php", {
		                        message: $("#message").val(),
		                        code: $("#code").val()
		                    },
		                    function(data) {
		                        $("#chatField").html(data);
		                        $("#message").val("");
		                    }
		                );
		            }
		        );
		    }
		);
	</script>

<div class="container">
	<div class="col-md-4 m-0 p-0 mt-4">
		<input class="form-control" type="text" name="code" onkeyup ='update()' id="code" placeholder="Input the codes" style="background-color: #ffdbed">
	</div>
		<div class="card card-outline-success" style="background-image: url('../assets/Chat.jpg');">
			<div id="chatField" class="p-3" style="max-height: 50vh;max-width: 100%;height: 50vh;overflow-y: auto;">
				<!-- chats belongs here		 -->
			</div>
		</div>
		<textarea class="form-control" type="text" name="mesage" id="message" placeholder="Type your message" style="height: 10vh;max-height: 10vh;min-height: 10vh;min-width: 100%;background-color: #ffdbed"></textarea> <br>
		<input class="btn btn-success" type="submit" name="submitcode" id="send" value="Send">
</div>


</body>
</html>