<?php  
	// menghubungkan dengan file php lainnya	
	require 'function.php';

	// melakukan query 
	$buku = query("SELECT * FROM buku");

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

	<?php $i = 1 ?>
	<?php foreach ($buku as $row) : ?>
		<tr style="text-align: center;font-size: 20px; background-color: lightblue;">
			<td><?= $i ?></td>
			<td>
				<a href=""><button>Ubah</button></a>
				<a href=""><button>Hapus</button></a>
			</td>
			<td><img src="../assets/cover/<?= $row["cover"]; ?>"></td>
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


	
</table>


	<style>
		img {
			width: 200px;
			height: 300px;
		}
	</style>


</body>
</html>