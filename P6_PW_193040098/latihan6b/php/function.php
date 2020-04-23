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
?> 