<?php  
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
</head>
<body>

<a href="tambah.php">
	<button>Tambah Data</button>
</a>

<form action="" method="get">
	<input type="text" name="keyword" autofocus>
	<button type="submit" name="cari">Cari!</button>
</form>


<table border="2px solid black" cellspacing="0" cellpadding="10">
	<tr style="font-size: 25px;background-color: #6495ED">
		<th>No</th>
		<th>Opsi</th>
		<th>Cover</th>
		<th>Judul Buku</th>
		<th>Penerbit</th>
		<th>Jumlah Halaman</th>
		<th>Tanggal Rilis</th>
		<th>Penulis</th>
		<th>Deskripsi</th>
		<th>Harga</th>
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
		<tr style="text-align: center;font-size: 20px; background-color: lightblue;">
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?no=<?= $row['no']?>">
					<button>Ubah</button>
				</a>
				<a href="hapus.php?no=<?= $row['no']?>" onclick="return confirm('Yakin ingin menghapus Data???')">
					<button>Hapus</button>
				</a>
			</td>
			<td>
				<img src="../assets/cover/<?= $row["cover"]; ?>">
			</td>
			<td style="font-style: italic;">
				<?= $row["judul"]?>
			</td>
			<td><?= $row["penerbit"]?></td>
			<td><?= $row["jumlah_halaman"]?></td>
			<td><?= $row["tgl_rilis"]?></td>
			<td><?= $row["penulis"]?></td>
			<td><?= $row["deskripsi"]?></td>
			<td><?= $row["harga"]?></td>
		</tr>
	<?php $i++ ?>
	<?php endforeach; ?>
<?php endif; ?>


	<style>
		img {
			width: 200px;
			height: 300px;
		}
	</style>


</body>
</html>