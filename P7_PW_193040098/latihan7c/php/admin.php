<?php  
	session_start();

	if(!isset($_SESSION["username"])) {
		header("Location: login.php");
		exit;
	}

	// menghubungkan dengan file php lainnya	
	require 'function.php';


	if (isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$buku = query("SELECT * FROM buku WHERE
						cover LIKE '%$keyword%' OR
						judul LIKE '%$keyword%' OR
						penerbit LIKE '%$keyword%' OR
						jumlah_halaman LIKE '%$keyword%' OR
						tgl_rilis LIKE '%$keyword%' OR
						penulis LIKE '%$keyword%' OR
						deskripsi LIKE '%$keyword%' OR
						harga LIKE '%$keyword%' 
						");
	}else {
		$buku = query("SELECT * FROM buku");
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>BUKUU</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">

</head>
<body style="background-image: url(../assets/img/bg2.png); background-repeat: no-repeat;background-size:cover">




<nav class="navbar navbar-white bg-white">
<strong style="font-size: 30px;font-family: italic;">Selamat Datang Di Halaman Admin!</strong>
  <form class="form-inline">
   	    <input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Search" name="keyword" autofocus>
	    <button class="btn btn-dark my-2 my-sm-0" type="submit" name="cari">Cari</button>	
		 <a class="btn btn-dark navbar-brand text-white ml-4" href="tambah.php" class="text-white">
		 	Tambah Data
		 </a>
	    <a class="btn btn-dark navbar-brand text-white" href="logout.php">Logout</a>
  </form>
</nav>

<div class="container">
	<div class="container-fluid">
		<table class="table table-bordered table-striped table-hover table-dark">
			<tr>
				<th>No</th>
				<th>Cover</th>
				<th>Judul Buku</th>
				<th>Penerbit</th>
				<th>Jumlah Halaman</th>
				<th>Tanggal Rilis</th>
				<th>Penulis</th>
				<th>Deskripsi</th>
				<th>Harga</th>
				<th>Opsi</th>
			</tr>

		<?php  if (empty($buku)) : ?>
			
			<tr>
				<td colspan="10">
					<h1 style="text-align: center;font-size: 70px">Data Tidak Ditemukan</h1>
				</td>
			</tr>

			<?php else : ?>

			<?php $i = 1; ?>
			<?php foreach ($buku as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td> 
						<a style="text-decoration: none; color: red;" href="../assets/cover/<?= $row["cover"]; ?>">
							<li class="fa fa-images "></li>
						</a>
					</td>
					<td style="font-style: italic;">
						<?= $row["judul"]?>
					</td>
					<td><?= $row["penerbit"]?></td>
					<td><?= $row["jumlah_halaman"]?></td>
					<td><?= $row["tgl_rilis"]?></td>
					<td><?= $row["penulis"]?></td>
					<td style="text-align: justify;"><?= $row["deskripsi"]?></td>
					<td><a>Rp.</a><?= $row["harga"]?><a>.,</a></td>
					<td>
						<a style="color: orange;margin-right: 2px;float: left" href="ubah.php?no=<?= $row['no']?>">
							<i class="fa fa-edit" style="font-size:15px"></i>
						</a>
						<a style="text-decoration: none; color: red;" href="hapus.php?no=<?= $row['no']?>" onclick="return confirm('Yakin ingin menghapus Data???')">
							<i class="fa fa-trash" style="font-size: 15px;"></i>
						</a>
					</td>
				</tr>
			<?php $i++ ?>
			<?php endforeach; ?>
		<?php endif; ?>
		</table>
	</div>
</div>


	<style>
		img {
			width: 200px;
			height: 300px;
		}
	</style>


</body>
</html>