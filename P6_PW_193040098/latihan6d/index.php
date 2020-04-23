<?php 
	// menghubungkan dengan file php lainnya
	require 'php/function.php';

	// melakukan query
	$buku = query("SELECT * FROM buku")
?>

<!DOCTYPE html>
<html>
<head>
	<title>BUKUU</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body style="background-image: url(assets/img/anjay2.jpg);background-repeat: none;background-size:100% 100%;	 ">
	<div class="navbar-fixed">
	    <nav>
	      <div class="nav-wrapper">
	        <a href="#!" class="brand-logo" style="margin-left: 683px">Judul Buku</a>
	      </div>
	    </nav>
    </div>




<div class="container">
	<?php foreach ($buku as $book) : ?>
		<div>
			<img src="assets/cover/<?= $book["cover"]; ?>" alt="" class="materialboxed" style="width: 200px;height: 300px; margin: auto;margin-top: 20px;margin-bottom: 20px">
		</div>

		<div class="judulbuku" id="hihi" style="text-align: center;margin-top: 10px;margin-bottom: 40px;">
			<a style="color: white;font-style: italic;" class="waves-effect waves-#a5d6a7 #ef5350 red lighten-1 btn" href="php/detail.php?no=<?=$book['no'] ?>">
				<?= $book["judul"]; ?>
			</a>
		</div>

	<?php endforeach; ?>



  <script src="js/materialize/js/materialize.min.js"></script>
  <script>
  		const materialboxed = document.querySelectorAll('.materialboxed')
		M.Materialbox.init(materialboxed);
  </script>


</div>
</body>
</html>