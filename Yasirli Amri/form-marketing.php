<?php
include ('connect.php');

if (isset($_POST['submitform'])){

	if (!empty($_POST['nama_lengkap']) && !empty($_POST['email']) && !empty($_POST['nomor_whatsapp']) && !empty($_POST['detail_masalah'])){

		$nameform = $_POST['nama_lengkap'];
		$emailform = $_POST['email'];
		$nowhatsapp = $_POST['nomor_whatsapp'];
		$masalah = $_POST['detail_masalah'];
  
		$queryform = "INSERT INTO marketingform (nama_lengkap, email, nomor_whatsapp, detail_masalah) VALUES ('$nameform', '$emailform', '$nowhatsapp', '$masalah')" ;

    $run = mysqli_query($conn, $queryform) or die (mysqli_error());

    if ($run) {
      echo "<script>
			alert('Terima kasih telah mengisi form ini, tunggu pihak kami menghubungi anda');
			document.location.href='form-marketing.php';
			</script>";
    } else {
      echo "<script>
			alert('Form tidak terkirim');
			document.location.href='form-marketing.php';
			</script>";
    } 
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form action="" method="POST" class="contact100-form validate-form" id="whatsapp">
          <span class="contact100-form-title">MARKETING FORM</span>
          <input class="tujuan" type="hidden" id="noAdmin" />
          <div class="wrap-input100">
            <span class="label-input100">Nama Lengkap</span>
            <label>
              <input class="input100 nama" type="text" name="nama_lengkap" />
            </label>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <span class="label-input100">Email</span>
            <label>
              <input class="input100 nowhatsapp" type="text" name="email"/>
            </label>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <span class="label-input100">Nomor WhatsApp</span>
            <label>
              <input class="input100 nowhatsapp" type="text" name="nomor_whatsapp"/>
            </label>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <span class="label-input100">Detail Masalah</span>
            <label>
              <textarea class="input100 alamat" name="detail_masalah"></textarea>
            </label>
            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
              <button class="contact100-form-btn submit" type="submit" name="submitform">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
