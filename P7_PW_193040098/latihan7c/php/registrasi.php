<?php
require 'function.php';

if(isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('Registrasi Berhasil!');
				document.location.href = 'login.php'
			  </script>";
	} else{
		echo "<script>
				alert('Registrasi Gagal!');
			  </script>";
	}
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

    <title>Registration</title>
  </head>
  <body style="background-image: url(../assets/img/form6.jpg);background-size: cover; background-repeat: no-repeat;  ">
<form action="" method="post">	
	<div class="container">
		<h3 class="text-center">REGISTRATION</h3>
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
			<button type="submit" name="register" class="btn btn-primary mt-3">REGISTER</button>
	</div>
</form>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>