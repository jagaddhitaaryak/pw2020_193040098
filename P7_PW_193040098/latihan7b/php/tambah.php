<?php  
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
	<link rel="stylesheet" type="text/css" href="../css/styletambah.css">
</head>
<body>
	<h1>Form Tambah Data Buku</h1>
	<div class="box">
		<form action="" method="post">			
				<div class="kota-isian">
					<label for="cover">Cover :</label><br>
					<input type="text" name="cover" id="cover" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="judul">Judul :</label><br>
					<input type="text" name="judul" id="judul" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="penerbit">Penerbit :</label><br>
					<input type="text" name="penerbit" id="penerbit" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="jumlah_halaman">Jumlah Halaman :</label><br>
					<input type="text" name="jumlah_halaman" id="jumlah_halaman" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="tgl_rilis">Tanggal Rilis :</label><br>
					<input type="date" name="tgl_rilis" id="tgl_rilis" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="penulis">Penulis :</label><br>
					<input type="text" name="penulis" id="penulis" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="deskripsi">Deskripsi :</label><br>
					<input type="text" name="deskripsi" id="deskripsi" required><br><br>
				</div> 
				<div class="kota-isian">
					<label for="harga">Harga :</label><br>
					<input type="text" name="harga" id="harga" required><br><br>
				</div> 
				<div class="tombol">
				<button class="kota-isian" type="submit" name="tambah">Tambah Data</button>
				<button class="kota-isian" type="submit">
					<a href="admin.php" style="text-decoration: none; color: black">Kembali</a>
				</button>
				</div>
			</ul>
		</form>
	</div>
</body>
</html>