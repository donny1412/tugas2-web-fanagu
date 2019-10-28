<?php
include 'conn.php';
$msg=''; 

session_start();
$sql = 'SELECT * FROM signup';

$query = mysqli_query($conn, $sql);


if (isset($_SESSION["status"]) && $_SESSION["status"] =='login') {
                  header('location:index.php');
              }
if (isset($_POST['login'])){
	// mengaktifkan session php
 
// menghubungkan dengan koneksi
include 'conn.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

$hass=hash('sha256',$password);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT email,password FROM signup WHERE email='$email' and password='$hass'");

$nama = mysqli_query($conn,"SELECT username FROM signup WHERE email='$email' and password='$hass'");
mysql_fetch_assoc($nama);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['username']= $name['username'];
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	$msg='Gagal Login';
}
}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Login | Mlaku.id</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

	<div class="kotak_login">
		
		<p class="tulisan_login">Mlaku.id</p>
		<?php if ($msg != "") { ?> <div class="alert alert-warning" role="alert"><?php echo $msg;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><?php }?>
		<form method="POST" action="login.php">
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN" name="login" id="login">

			<br/>
			<br/>

			<center>
				<a class="link" href="signup.php">Sign Up</a>
			</center>
		</form>
		
	</div>
<script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>
 