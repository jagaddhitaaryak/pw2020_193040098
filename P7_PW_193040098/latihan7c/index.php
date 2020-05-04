<?php 
	// menghubungkan dengan file php lainnya
	require 'php/function.php';

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
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(assets/img/anjay2.jpg);background-repeat: none;background-size:100% 100%;">


<nav class="navbar navbar-info bg-info">
  <a class="btn primary navbar-brand text-white ml-5" href="index.php" style="font-family: 'Bangers', cursive; font-size: 35px">BUKU</a>
  <form class="form-inline" style="margin-left: 700px">
    <input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Search" name="keyword" autofocus>
    <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari">Cari</button>
  </form>
  <a class="btn btn-primary navbar-brand text-white ml-5" href="php/login.php">Masuk Ke Halaman Admin</a>
</nav>





<div class="container">
	<?php  if (empty($buku)) : ?>
		<h1 style="text-align: center;font-size: 70px" class="text-info">Data Tidak Ditemukan</h1>					
	<?php else : ?>
		<?php foreach ($buku as $book) : ?>
		<div>
			<img src="assets/cover/<?= $book["cover"]; ?>"  style="width: 200px;height: 300px; margin-top: 20px;margin-bottom: 20px; margin-left: 458px">
		</div>

		<div class="judulbuku" id="hihi" style="text-align: center;margin-top: 10px;margin-bottom: 40px;">
	

			<a style="color: white;font-style: italic;" class="btn btn-info" href="php/detail.php?no=<?=$book['no'] ?>">
				<?= $book["judul"]; ?>
			</a>
		</div>

		<?php endforeach; ?>
	<?php endif; ?>



</div>
</body>
</html>