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
	<link rel="stylesheet" type="text/css" href="../css/styleubah.css">
</head>
<body>
	<h1>Form Ubah Data Buku</h1>
	<div class="box">
		<form action="" method="post">
				<div>
					<input type="hidden" name="no" id="no" value="<?= $book['no']; ?>">
				</div>
				<div class="kotak-isian">
					<label for="cover">Cover :</label><br>
					<input type="text" name="cover" id="cover" required value="<?= $book['cover']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="judul">Judul :</label><br>
					<input type="text" name="judul" id="judul" required value="<?= $book['judul']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="penerbit">Penerbit :</label><br>
					<input type="text" name="penerbit" id="penerbit" required value="<?= $book['penerbit']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="jumlah_halaman">Jumlah Halaman :</label><br>
					<input type="text" name="jumlah_halaman" id="jumlah_halaman" required value="<?= $book['jumlah_halaman']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="tgl_rilis">Tanggal Rilis :</label><br>
					<input type="date" name="tgl_rilis" id="tgl_rilis" required value="<?= $book['tgl_rilis']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="penulis">Penulis :</label><br>
					<input type="text" name="penulis" id="penulis" required value="<?= $book['penulis']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="deskripsi">Deskripsi :</label><br>
					<input type="text" name="deskripsi" id="deskripsi" required value="<?= $book['deskripsi']; ?>"><br><br>
				</div> 
				<div class="kotak-isian">
					<label for="harga">Harga :</label><br>
					<input type="text" name="harga" id="harga" required value="<?= $book['harga']; ?>"><br><br>
				</div>
				<div class="tombol"> 
					<button class="kotak-isian" type="submit" name="ubah">
							Ubah Data
					</button>
					<button class="kotak-isian" type="submit">
						<a href="admin.php" style="text-decoration: none; color: black">
							Kembali
						</a>
					</button>
				</div>
		</form>
	</div>
</body>
</html>