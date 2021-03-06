<?php
include ('connect.php');

if (isset($_POST['submitform'])){

	if (!empty($_POST['nama_lengkap']) && !empty($_POST['email']) && !empty($_POST['pesan'])) {

		$name = $_POST['nama_lengkap'];
		$email = $_POST['email'];
		$message = $_POST['pesan'];
  
		$queryform = "INSERT INTO contact_us (nama_lengkap, email, pesan) VALUES ('$name', '$email', '$message')" ;

    $run = mysqli_query($conn, $queryform) or die (mysqli_error());

    if ($run) {
      echo "<script>
			alert('Terima kasih telah menghubungi kami, kami akan membantu anda secepatnya :)');
			document.location.href='profile.php';
			</script>";
    } else {
      echo "<script>
			alert('Form tidak terkirim');
			document.location.href='profile.php';
			</script>";
    } 
	}
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'" />
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet" />
    <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet" />
    <link href="css/aos.css?ver=1.2.1" rel="stylesheet" />
    <link href="css/main.css?ver=1.2.1" rel="stylesheet" />
    <noscript>
      <style type="text/css">
        [data-aos] {
          opacity: 1 !important;
          transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body class="bg-light" id="top">
    <div class="page-content">
      <div class="container">
        <div class="resume-container">
          <div class="shadow-1-strong bg-white my-5" id="intro">
            <div class="bg-info text-white">
              <div class="cover bg-image">
                <img src="Asset/bg/backconsul.jpg" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.7); backdrop-filter: blur(2px)">
                  <div class="text-center p-5">
                    <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong" src="Asset/bg/logo.jpeg" width="160" height="160" /></div>
                    <div class="header-bio mt-3">
                      <div data-aos="zoom-in" data-aos-delay="0">
                        <h2 class="h1">SEMUA ADA SOLUSINYA</h2>
                        <p>Bersama kami di Yasirli Amri Company</p>
                        <p>Awal mula berdiri konsultan ini dimulai dari keinginan founder untuk menyebarkan ilmu & pengalaman terutama di bidang marketing & advertising..</p>
                        <p>
                          Keinginan founder ( yasir ) yang kemudian diutarakan ke beberapa relasi (aris, isfandiar, alfian, lucki) menghasilkan suatu project untuk mendirikan perusahaan konsultan, tidak hanya di bidang marketing &
                          advertising tetapi merambah ke bidang bisnis manajemen, keuangan, dan hrd. sehingga berdirilah perusahaan konsultan pt. yasirli amri grup di tanggal 1 maret 2022.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
            <div class="contant-section">
              <h2 class="h2 fw-light text mb-4">Contact Us</h2>
              <div class="row mb-4">
                <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
                  <div class="mt-1">
                    <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width: 24px; opacity: 0.85"></i> +62 81246279393</div>
                    <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width: 24px; opacity: 0.85"></i> yasirliteam@gmail.com</div>
                  </div>
                  <div class="mt-5 d-print-none">
                    <form action="" method="POST">
                      <div class="form-outline mb-4">
                        <input type="text" id="name" name="nama_lengkap" class="form-control" required />
                        <label class="form-label" for="name">Name</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control" required />
                        <label class="form-label" for="email">Email address</label>
                      </div>
                      <div class="form-outline mb-4">
                        <textarea class="form-control" style="resize: none" id="message" name="pesan" rows="4" required></textarea>
                        <label class="form-label" for="message">Message</label>
                      </div>
                      <button class="btn btn-info btn-block mb-4" type="submit" name="submitform">Send</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-7 d-print-none" data-aos="zoom-in" data-aos-delay="100">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3613349947755!2d107.63862189999999!3d-6.9666306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e84c935056af%3A0xed9def630964963f!2sBuah%20Batu%20Square!5e0!3m2!1sid!2sid!4v1654396657712!5m2!1sid!2sid"
                    width="500"
                    height="400"
                    style="border: 0; width: 100%"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  >
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4">Yasirli Amri</div>
          </div>
        </div>
        <div class="text-small">
          <div class="mb-1"> &copy; Copyright <strong>  </strong
            >. All Rights Reserved</div>
        </div>
      </div>
    </footer>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script>
  </body>
</html>
