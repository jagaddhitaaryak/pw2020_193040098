<?php  
session_start();
require 'function.php';

if(isset($_SESSION['username'])) {
	header ("Location: admin.php");
	exit;
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if ($password == $row['password']) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = $row['no'];
		}
		if ($row['no'] == $_SESSION['hash']) {
			header ("Location: admin.php");
			die;
		}
		header("Location: ../index.php");
		die;
	}
	$error = true;
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">

    <title>login ke halaman admin</title>
  </head>
  <body>
<form action="" method="post">	
	<div class="container">
		<h3 class="text-center">FORM LOGIN</h3>
		<hr>
			<div class="form-group">
				<label for="username">Username</label>

				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-user"></i></div>
					</div>
					<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>

				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
					</div>
					<input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">	
				</div>
			</div>
				<?php if (isset($error)) : ?>
					<p style="color:red;">Username atau Password salah!</p>
				<?php endif; ?>
			<div class="remember">
				<input type="checkbox" name="remember">
				<label for="remember">Remember Me</label>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
			<button type="reset" class="btn btn-danger">RESET</button>
	</div>
</form>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


