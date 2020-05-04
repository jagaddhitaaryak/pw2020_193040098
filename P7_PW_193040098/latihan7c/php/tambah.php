<?php  
	session_start();

	if(!isset($_SESSION["username"])) {
		header("Location: login.php");
		exit;
	}

	require'function.php';

	if (isset($_POST['tambah'])) {
		if (tambah($_POST) > 0) {
			echo "<script>
				    alert('Data Berhasil Di tambahkan!');
				    document.location.href = 'admin.php';
				  </script>";  	
		}else {
			echo "<script>
					alert('Data Gagal Di tambahkan!');
					document.location.href = 'admin.php';
				  </script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">
</head>
<body style="background-image: url(../assets/img/tambah.jpg);background-position: cover; background-repeat: no-repeat;height: 100%">
		<form action="" method="post">
			<div class="container" style="margin-top: 1%;margin-bottom: 1%;background-color: white">
				<h3 style="text-align: center">Form Tambah Data Buku</h3>	
				<hr>	

					<div class="form-group">
						<label for="cover">Cover</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-images"></i></div>
							</div>
							<input type="text" name="cover" class="form-control" placeholder="Masukkan Cover" required>
						</div>
					</div>


					<div class="form-group">
						<label for="judul">Judul</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-book"></i></div>
							</div>
							<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
						</div>
					</div>


					<div class="form-group">
						<label for="penerbit">Penerbit</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-upload"></i></div>
							</div>
							<input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit" required>
						</div>
					</div>	

					<div class="form-group">
						<label for="jumlah_halaman">Jumlah Halaman</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-pager"></i></div>
							</div>
							<input type="text" name="jumlah_halaman" class="form-control" placeholder="Masukkan Jumlah Halaman" required>
						</div>
					</div>		

					<div class="form-group">
						<label for="tgl_rilis">Tanggal Rilis</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-calendar-week"></i></div>
							</div>
							<input type="date" name="tgl_rilis" class="form-control" placeholder="Masukkan Tanggal Rilis" required>
						</div>
					</div>	

					<div class="form-group">
						<label for="penulis">Penulis</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-user"></i></div>
							</div>
							<input type="text" name="penulis" class="form-control" placeholder="Masukkan Penulis" required>
						</div>
					</div>	

					<div class="form-group">
    					<label for="deskripsi">Deskripsi</label>

    					<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-comment-alt"></i></div>
							</div>
							<textarea type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" required id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
    					
  					</div>

					<div class="form-group">
						<label for="harga">Harga</label>

						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
							</div>
							<input type="text" name="harga" class="form-control" placeholder="Masukkan Penulis" required>
						</div>
					</div>
					<div class="bungkus" style="margin-top: 25px">
					<button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>

					<button class="btn btn-danger" type="submit">
						<a href="admin.php" style="text-decoration: none; color: white">Kembali</a>
					</button>
					</div>

				</ul>
			</div>	
		</form>
</body>
</html>
			