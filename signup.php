<?php
	$conn = mysqli_connect("localhost","root","")or die("Unable to Connect");
	mysqli_select_db($conn,'tourism');

	$sql= "SELECT * FROM signup";
	$hasil = $conn->query($sql); 
?>                                      
 
<!DOCTYPE html>
<html>
<head>
	<link href="signuptest.php">
 	<link href="conn.php">
	<title>Login | Mlaku.id</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

	<div class="kotak_login">
		<p class="tulisan_login">Mlaku.id</p>

		<form method="post" action="signuptest.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">

			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" href="index.html" value="SIGN UP">

			<br/>
			<br/>

			<center>
				<a class="link" href="login.php">LOGIN</a>
			</center>
		</form>
		
	</div>


</body>
</html>
 