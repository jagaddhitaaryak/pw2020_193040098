<?php 
	// koneksi ke database
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke database gagal.");

	// ambil data buku dari object result
	mysqli_select_db($conn, "tubes_193040098") or die ("database salah!");

	// mengambil data dari table buku
	$result = mysqli_query($conn, "SELECT * FROM  buku");



?>

<!DOCTYPE html>
<html>
<head>
	<title>BUKUU</title>
</head>
<body>

<table border="2px solid black" cellspacing="0" cellpadding="10">
	<tr style="font-size: 25px;background-color: #6495ED">
		<th>No</th>
		<th>Cover</th>
		<th>Judul Buku</th>
		<th>Penerbit</th>
		<th>Jumlah Halaman</th>
		<th>Tanggal Rilis</th>
		<th>Penulis</th>
		<th>Deskripsi</th>
	</tr>

	<?php $i = 1 ?>
	<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
		<tr style="text-align: center;font-size: 20px; background-color: lightblue;">
			<td><?= $i ?></td>
			<td><img src="assets/cover/<?= $row["cover"]; ?>"></td>
			<td style="font-style: italic;">
				<?= $row["judul"]?>
			</td>
			<td><?= $row["penerbit"]?></td>
			<td><?= $row["jumlah_halaman"]?></td>
			<td><?= $row["tgl_rilis"]?></td>
			<td><?= $row["penulis"]?></td>
			<td><?= $row["deskripsi"]?></td>
		</tr>
	<?php $i++ ?>
	<?php endwhile; ?>


	<tr style="background-color: #DCDCDC;">
		<th colspan="9">
			<blink>
				<p>Jika Anda Berminat Beli | <a href="https://ebooks.gramedia.com/" target="_blank">Klik Disini</a></p>
			</blink>
		</th>
	</tr>


	<style>
		img {
			width: 200px;
			height: 300px;
		}
	</style>


</body>
</html>