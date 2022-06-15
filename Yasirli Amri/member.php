<?php 
session_start();
	//kode php disini
if (isset($_COOKIE["login"])){
		
			if ($_COOKIE["login"]=="true"){
				$_SESSION["login"] = true;
			}

		}

if (!isset($_SESSION["login"])){
	echo "<script>alert('Ilegal akses!');
	document.location.href='login.php';</script>";
	die;

}	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Member</title>

    <!-- Vendor CSS Files -->
    <link href="./vendor/aos/aos.css" rel="stylesheet" />
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="./vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="./vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="./vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="./vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link href="./css/mdb.min.css?ver=1.2.1" rel="stylesheet" />
    <link href="./css/aos.css?ver=1.2.1" rel="stylesheet" />
    <link href="./css/main.css?ver=1.2.1" rel="stylesheet" />
    <link href="./css/button.css" rel="stylesheet" />
    <!-- <link href="./css/style.css" rel="stylesheet" /> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="./css/member.css" rel="stylesheet" />
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0">
          <a href="#hero">YASIRLI AMRI<span></span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">BERANDA</a></li>
            <li><a class="nav-link scrollto" href="#konsultasi">KONSULTASI</a></li>
            <li><a class="nav-link scrollto" href="#team">TEAM</a></li>
            <li><a class="nav-link scrollto" href="profile.php">PROFIL</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      
        <a href="#" class="get-started-btn scrollto"><?php echo $_SESSION['user']?></a>
        <a href="changepassword.php">Ganti password?</a>
        <a href="logout.php" role="button" 
	onclick="return confirm('yakin akan logout ?')">Logout</a>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
          <div class="col-xl-6 col-lg-8">
            <h1>MARI SELESAIKAN SEMUA MASALAHMU</h1>
            <h2><span>Kami memiliki pekerja yang berpengelaman</span></h2>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line"></i>
              <h3><a href="#financial">Jasa Finansial</a></h3>
            </div>
          </div>

          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-calendar-todo-line"></i>
              <h3><a href="#hr">Jasa Human Resource</a></h3>
            </div>
          </div>

          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-paint-brush-line"></i>
              <h3><a href="#operasional">Jasa Operasional</a></h3>
            </div>
          </div>

          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-database-2-line"></i>
              <h3><a href="#marketing">Jasa Marketing</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="konsultasi">
      <div class="portfolio-section">
        <h2 class="h2 fw-light mb-4">PROGRAM KAMI</h2>

        <div class="row g-0" id="financial">
          <div class="col-md-6">
            <a href="" target="_blank"><img class="img-fluid" src="Asset/bg/bg-1.png" width="800" height="500" /></a>
          </div>
          <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
            <div class="m-4 mt-md-2">
              <p class="text-teal text-small">JASA</p>
              <h3>FINANCIAL</h3>
              <p class="text-muted">Perusahaan di industri jasa keuangan menawarkan berbagai layanan keuangan seperti layanan laporan keuangan perusahaan, Perhitungan pajak, Proyeksi bisnis perusahaan,Anggaran perusahaan.</p>
              <a href="form-finansial.php"
                ><button class="btn"><span>Konsultasi</span></button></a
              >
            </div>
          </div>
        </div>

        <div class="row g-0 portfolio-reverse" id="hr">
          <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <div class="m-4 mt-md-2 text-end">
              <p class="text-teal text-small">JASA</p>
              <h3>HUMAN RESOURCE</h3>
              <p class="text-muted">
                Human Resources merupakan divisi yang mengelola manusia sebagai sumber daya perusahaan untuk mendukung capaian tujuan perusahaan, Pembuatan sistem perkaryawanan, People development, Training, Administrasi perkaryawanan dan
                Tes kepribadian.
              </p>
              <a href="form-human-resource.php"
                ><button class="btn"><span>Konsultasi</span></button></a
              >
            </div>
          </div>
          <div class="col-md-6">
            <a href="" target="_blank"><img class="img-fluid" src="Asset/bg/bg-2.png" width="800" height="500" /></a>
          </div>
        </div>

        <div class="row g-0" id="operasional">
          <div class="col-md-6">
            <a href="https://dribbble.com/" target="_blank"><img class="img-fluid" src="Asset/bg/bg-3.png" width="800" height="500" /></a>
          </div>
          <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
            <div class="m-4 mt-md-2">
              <p class="text-teal text-small">JASA</p>
              <h3>OPERASIONAL</h3>
              <p class="text-muted">Penyusunan sistem perusahaan, Jasa operasional, Memastikan operasional perusahaan berjalan sesuai sop yg telah ditetapkan.</p>
              <a href="form-operasional.php"
                ><button class="btn"><span>Konsultasi</span></button></a
              >
            </div>
          </div>

          <div class="row g-0 portfolio-reverse" id="marketing">
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <div class="m-4 mt-md-2 text-end">
                <p class="text-teal text-small">JASA</p>
                <h3>MARKETING</h3>
                <p class="text-muted">
                  Jasa Marketing adalah suatu tindakan yang ditawarkan pihak produsen kepada konsumen berupa jasa yang tidak dapat dilihat, dirasa, didengar atau diraba namun dapat dirasakan manfaatnya oleh konsumen. Contohnya berupa
                  Pengiklanan, Strategi marketing .
                </p>
                <a href="form-marketing.php"
                  ><button class="btn"><span>Konsultasi</span></button></a
                >
              </div>
            </div>
            <div class="col-md-6">
              <a href="" target="_blank"><img class="img-fluid" src="Asset/bg/bg-3.png" width="800" height="500" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="Asset/Team/sadri.jpeg.png" class="img-fluid" alt="" />
                <div class="social">
                  <a href="https://www.instagram.com/muhammadsadri19/"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhammad Sadri</h4>
                <span>Front End Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="Asset/Team/hasto.jpeg.png" class="img-fluid" alt="" />
                <div class="social">
                  <a href="https://www.instagram.com/hermanushasta/?hl=id"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/hasta-wicaksana-359a881a0"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Hermanus Hasta Wicaksana</h4>
                <span>Back End Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="Asset/Team/dennis.jpeg.png" class="img-fluid" alt="" />
                <div class="social">
                  <a href="https://www.instagram.com/dennishavinanda/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/dennis-havinanda-683b17190/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dennis Havinanda</h4>
                <span>CEO Company</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="Asset/Team/inggrit.png" class="img-fluid" alt="" />
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Inggrit Mufida</h4>
                <span>Human Resource</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <footer id="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h4>Our Company</h4>
              <p>Yuk support perusahaan kami</p>
            </div>
            <div class="col-lg-6">
              <form action="" method="post"><input type="email" name="email" /><input type="submit" value="Kirim" /></form>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Yasirli Amri</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">World Black Code</a></div>
      </div>
    </footer>
    
    <!-- End Team Section -->
    <!-- Vendor JS Files -->
    <script src="vendor/purecounter/purecounter.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <script src="./js/member.js"></script>
  </body>
</html>
