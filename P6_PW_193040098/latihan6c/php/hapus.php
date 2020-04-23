<?php  
	require'function.php';

	$no = $_GET['no'];
	if (hapus($no) > 0) {
		echo "<script>
			 	alert('Data Berhasil Di Hapus!');
				document.location.href = 'admin.php';
			  </script>";  	
	}else {
		echo "<script>
			 	alert('Data Gagal Di Hapus!');
				document.location.href = 'admin.php';
			  </script>";  	
	}

?>