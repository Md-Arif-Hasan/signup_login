<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html>
<head>
	<title>My website</title>

<style>

	h1,a {text-align: center;}

	body, html {
  height: 100%;
  margin: 0;
}

.bg {
 
  background-image: url("background.jpg");

  height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

</head>
<body>
 
	 <div class="bg">
	 		<br><br><br>
	 	
	 		<h1 style="color:white;">  Welcome to Web Tech World!</h1> <br>

			 <h1 style="color:white;"> Hello, <?php echo $user_data['user_name']; ?></h1> <br> <br>

	  </div>
	  
</body>
</html>