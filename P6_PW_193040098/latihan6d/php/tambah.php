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
</head>
<body>
	<h3>Form Tambah Data Buku</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="cover">Cover :</label><br>
				<input type="text" name="cover" id="cover" required><br><br>
			</li> 
			<li>
				<label for="judul">Judul :</label><br>
				<input type="text" name="judul" id="judul" required><br><br>
			</li> 
			<li>
				<label for="penerbit">Penerbit :</label><br>
				<input type="text" name="penerbit" id="penerbit" required><br><br>
			</li> 
			<li>
				<label for="jumlah_halaman">Jumlah Halaman :</label><br>
				<input type="text" name="jumlah_halaman" id="jumlah_halaman" required><br><br>
			</li> 
			<li>
				<label for="tgl_rilis">Tanggal Rilis :</label><br>
				<input type="date" name="tgl_rilis" id="tgl_rilis" required><br><br>
			</li> 
			<li>
				<label for="penulis">Penulis :</label><br>
				<input type="text" name="penulis" id="penulis" required><br><br>
			</li> 
			<li>
				<label for="deskripsi">Deskripsi :</label><br>
				<input type="text" name="deskripsi" id="deskripsi" required><br><br>
			</li> 
			<li>
				<label for="harga">Harga :</label><br>
				<input type="text" name="harga" id="harga" required><br><br>
			</li> 
			<button type="submit" name="tambah">Tambah Data</button>
			<button type="submit">
				<a href="admin.php" style="text-decoration: none; color: black">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>