<?php 
		
// function untuk melakukan koneksi ke database
function koneksi(){
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke database gagal.");
	mysqli_select_db($conn, "tubes_193040098") or die ("database salah!");

	return $conn;
}

// function untuk melakukan query ke databaze
	function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn , "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// function untuk menambahkan data di dalam database
	function tambah($data)
	{
		$conn = koneksi();

		$cover = htmlspecialchars($data['cover']);
		$judul = htmlspecialchars($data['judul']);
		$penerbit = htmlspecialchars($data['penerbit']);
		$jumlah_halaman = htmlspecialchars($data['jumlah_halaman']);
		$tgl_rilis = htmlspecialchars($data['tgl_rilis']);
		$penulis = htmlspecialchars($data['penulis']);
		$deskripsi = htmlspecialchars($data['deskripsi']);
		$harga = htmlspecialchars($data['harga']);


		$query = "INSERT INTO buku VALUES('','$cover','$judul','$penerbit','$jumlah_halaman','$tgl_rilis','$penulis','$deskripsi','$harga')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);	
	}

// function untuk menghapus data di dalam database
	function hapus($no)
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM buku WHERE no = $no");

		return mysqli_affected_rows($conn);
	}

// function untuk menambahkan data di dalam database
	function ubah($data)
	{
		$conn = koneksi();

		$no = $data['no'];
		$cover = htmlspecialchars($data['cover']);
		$judul = htmlspecialchars($data['judul']);
		$penerbit = htmlspecialchars($data['penerbit']);
		$jumlah_halaman = htmlspecialchars($data['jumlah_halaman']);
		$tgl_rilis = htmlspecialchars($data['tgl_rilis']);
		$penulis = htmlspecialchars($data['penulis']);
		$deskripsi = htmlspecialchars($data['deskripsi']);
		$harga = htmlspecialchars($data['harga']);

		$queryubah = "UPDATE buku 
						SET
						cover = '$cover',
						judul = '$judul',
						penerbit = '$penerbit',
						jumlah_halaman = '$jumlah_halaman',
						tgl_rilis = '$tgl_rilis',
						penulis = '$penulis',
						deskripsi = '$deskripsi',
						harga = '$harga'
				   	  WHERE no = '$no' ";
		

		mysqli_query($conn, $queryubah);

		return mysqli_affected_rows($conn);	
	}


// function registrasi
	function registrasi ($data)
	{
		$conn = koneksi();
		$username = strtolower(stripcslashes($data["username"]));
		$password = mysqli_real_escape_string($conn, $data["password"]);

		// cek username sudah ada atau belum
		$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('Username Sudah Digunakan')
				  </script>";
			return false;
		}
		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		// tambah user baru
		$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
		mysqli_query($conn, $query_tambah);

		return mysqli_affected_rows($conn);
	}

?> 

