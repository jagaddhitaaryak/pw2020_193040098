<?php  
	// mengecek apakah ada no yang dikimkan
	// jika tidak maka dikembalikan ke halaman index.php
	if (!isset($_GET['no'])) {
		header("location: ../index.php");
		exit;
	}
	require 'function.php';

	// mengambil no dari url
	$no = $_GET['no'];

	// melakukan query dengan parameter no yang diambil dari url
	$buku = query("SELECT * FROM buku WHERE no = $no")[0];
?>


<!DOCTYPE html>
<html>
<head>
	<title>BUKU</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body style="background-color: #ffcdd2">
	<div class="container">
		<div>
			<img src="../assets/cover/<?= $buku["cover"]; ?>" alt="" class="materialboxed" style="margin-right: 80px;margin-bottom: 30px;float: left; width: 300px;height: 400px;margin-top: 60px">
		</div>
		<div class="keterangan">
			<br>
			<p style="color:#ef5350;font-size: 30px;font-style: italic;" class="p"><?= $buku["judul"]; ?></p>
			<p style="color:#ef5350;font-weight: bold;font-size: 15px" class="p"><?= $buku["penulis"]; ?></p>
		</div>
		


	<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Deskripsi</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Detail</a></li>
        <li class="tab col s3"><a class="active" href="#test3">Harga</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    	<p style="text-align: justify;"	><?= $buku["deskripsi"]; ?></p>
    </div>
    <div id="test2" class="col s12">
    	<p style="font-size: 20px;" class="p1"><p style="font-size: 25px">Penerbit </p> <?= $buku["penerbit"]; ?></p>
    	<p style="font-size: 20px" class="p1"><p style="font-size: 25px">Jumlah Halaman</p> <?= $buku["jumlah_halaman"]; ?></p>
    	<p style="font-size: 20px" class="p1"><p style="font-size: 25px">Tanggal Rilis</p> <?= $buku["tgl_rilis"]; ?></p>
    	<p style="font-size: 20px"class="p1"><p style="font-size: 25px">Penulis</p> <?= $buku["penulis"]; ?></p>
    </div>
    <div id="test3" class="col s12">
    	<p style="margin-left:10px;font-size: 20px;font-style: italic;"><?= $buku["judul"] ?></p>
    	<p style="margin-left: 10px;font-size: 30px"><?= $buku["harga"] ?></p>
    </div>
  </div>

		<div>
			<a style="color: white;" class="waves-effect waves-#a5d6a7 #ef5350 red lighten-1 btn" href="../index.php">
				Kembali
			</a>
		</div>
		
  <script src="../js/materialize/js/materialize.min.js"></script>
  <script>
  		const tabs = document.querySelectorAll('.tabs')
		M.Tabs.init(tabs);
  </script>

  <script>
  		const materialboxed = document.querySelectorAll('.materialboxed')
		M.Materialbox.init(materialboxed);
  </script>
</body>
</html>