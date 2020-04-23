<?php  
	require'function.php';

	$no = $_GET['no'];
	$book = query("SELECT * FROM buku WHERE no = $no")[0];

	if (isset($_POST['ubah'])) {
		if (ubah($_POST) > 0) {
			echo "<script>
				    alert('Data Berhasil Di ubah!');
				    document.location.href = 'admin.php';
				  </script>";  	
		}else {
			echo "<script>
				    alert('Data Gagal Di ubah!');
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
	<h3>Form Ubah Data Buku</h3>
	<form action="" method="post">
		<ul>
			<li style="list-style-type: none">
				<input type="hidden" name="no" id="no" value="<?= $book['no']; ?>">
			</li>
			<li>
				<label for="cover">Cover :</label><br>
				<input type="text" name="cover" id="cover" required value="<?= $book['cover']; ?>"><br><br>
			</li> 
			<li>
				<label for="judul">Judul :</label><br>
				<input type="text" name="judul" id="judul" required value="<?= $book['judul']; ?>"><br><br>
			</li> 
			<li>
				<label for="penerbit">Penerbit :</label><br>
				<input type="text" name="penerbit" id="penerbit" required value="<?= $book['penerbit']; ?>"><br><br>
			</li> 
			<li>
				<label for="jumlah_halaman">Jumlah Halaman :</label><br>
				<input type="text" name="jumlah_halaman" id="jumlah_halaman" required value="<?= $book['jumlah_halaman']; ?>"><br><br>
			</li> 
			<li>
				<label for="tgl_rilis">Tanggal Rilis :</label><br>
				<input type="date" name="tgl_rilis" id="tgl_rilis" required value="<?= $book['tgl_rilis']; ?>"><br><br>
			</li> 
			<li>
				<label for="penulis">Penulis :</label><br>
				<input type="text" name="penulis" id="penulis" required value="<?= $book['penulis']; ?>"><br><br>
			</li> 
			<li>
				<label for="deskripsi">Deskripsi :</label><br>
				<input type="text" name="deskripsi" id="deskripsi" required value="<?= $book['deskripsi']; ?>"><br><br>
			</li> 
			<li>
				<label for="harga">Harga :</label><br>
				<input type="text" name="harga" id="harga" required value="<?= $book['harga']; ?>"><br><br>
			</li> 
			<button type="submit" name="ubah">Ubah Data</button>
			<button type="submit">
				<a href="admin.php" style="text-decoration: none; color: black">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>