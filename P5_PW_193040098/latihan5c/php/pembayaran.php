<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body style="background-color: #ffcdd2 ">
	<div>
		<p style="text-align: center; font-size: 30px">KONFIRMASI PEMBAYARAN</p>
	</div>
	<div style="text-align: left;font-size: 15px;margin-left: 20px">
		<p style="font-size: 20px">Terimakasih telah belanja di toko kami. Segera lakukan konfirmasi pembayaran dengan mengisi form dibawah, paling</p>
		<p style="font-size: 20px"> lambat 1x24 jam setelah pemesanan. Pembayaran dapat dilakukan dengan transfer bank ke rekening berikut :</p>
		<p style="font-weight: bold">BJB / Bank Jagaddhita Berjaya</p>
		<p style="font-weight: bold">No Rekening 202020202020</p>
		<p style="font-weight: bold">A/N Jagaddhita Arya Koswara</p>
		<br><br>
		<p style="margin-left: 20px">Isi Form Berikut :</p>
	</div>

<form style="margin-left: 20px">
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_box</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Nama</label>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">add_location</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Alamat</label>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">call</i>
          <input type="number" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">No Handphone</label>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Email</label>
        </div>
      </div>
    </div>
  </div>


<p>Pilih Kurir :</p>
 <p>
      <label>
        <input name="group1" type="radio" />
        <span>JNE</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>SiCepat</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio"  />
        <span>JNT</span>
      </label>
      <p>
       <label>
        <input name="group1" type="radio"  />
        <span>TIKI</span>
      </label>
      </p>
  </p>

  <p>Asuransi Pengiriman</p>
       <label style="margin-right: 20px">
        <input name="grup" type="checkbox" />
        <span>Ya</span>
      </label>
      <label>
        <input name="grupp" type="checkbox" />
        <span>Tidak</span>
      </label>

      	<div>
			<a style="color: white;margin-top:30px;margin-bottom: 15px" class="waves-effect waves-#a5d6a7 #ef5350 red lighten-1 btn" href="#!">
				Konfirmasi
			</a>
		</div>
		<strong style="font-style: italic;">SUDAH MENGISI FORM DAN MELAKUKAN PEMBAYARAN?PEMBELIAN ANDA AKAN KAMI PROSES</strong>
		<div>
			<a style="color: white;margin-top:36px;margin-bottom: 40px" class="waves-effect waves-#a5d6a7 #ef5350 red lighten-1 btn" href="../index.php">
			Kembali
			</a>
		</div>
<form>




  <script>
  		const datepicker = document.querySelectorAll('.Datepicker')
		M.Datepicker.init(Datepicker);
  </script>
   <script>
  		const formselect = document.querySelectorAll('.formselect')
		M.Formselect.init(formselect);
  </script>
  <script src="../js/materialize/js/materialize.min.js"></script>

</body>
</html>