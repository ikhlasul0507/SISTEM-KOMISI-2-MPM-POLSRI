<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','db_komisi2');
	if (!$conn)
	{
		die("Database Connection:".mysqli_connect_error());
	}
?>
<?php

	if(isset($_POST['submit']))
	{
		$sql=mysqli_query($conn, "INSERT INTO tbl_pengunjung VALUES('$_POST[email]','$_POST[tgl]')");
		
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Simpan');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
	}	
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang Di Komisi 2 Majelis Permusyawaratan Mahasiswa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar-right navbar-light bg-light static-top">
      <div>
	    &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="img/polsri.png" width="50px" height="50px">
		  <img src="img/mpm.png" width="50px" height="50px">
        <a class="navbar-brand" href="#"><marquee>Majelis Permusyawaratan Mahasiswa </marquee></a>
		&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
						
<a class="btn btn-primary" href="admin/index.html">Sign In</a>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <h1 class="mb-5">Selamat Datang di Komisi 2<br> Majelis Permusyawaratan Mahasiswa <br>Politeknik Negeri Sriwjaya</h1>
			<br>
			<h4>Silahkan isi form Pengunjung !</h4>
			<br>
			<br>
          </div>
		  <center>
          <div class="col-md-8 col-lg-8 col-xl-7 mx-auto">
            <form method="post">
              <div class="form-row">
                <div class="col-8 col-md-9 mb-2 mb-md-0">
                  <input name="email" type="text" class="form-control form-control-lg" placeholder="Masukan email...">
                </div>
				<br>
				<br>
				<br>
				<div class="col-8 col-md-9 mb-2 mb-md-0">
                  <input type="date" name="tgl" class="form-control form-control-lg">
                </div>
				<br>
				<br>
				<br>
                <div class="col-8 col-md-9 mb-2 mb-md-0">
                  <button type="submit" class="btn btn-block btn-lg btn-primary" name="submit">Submit !</button>
                </div>
              </div>
            </form>
			</center>
          </div>
		 
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Kalender Ormawa</h3>
              <p class="lead mb-0">Jadwal Pelaksanaan Kegiatan KM-POLSRI </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Proposal dan Lpj</h3>
              <p class="lead mb-0">Data Masuk Proposal Dan LPJ KM-POLSRI</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Surat Masuk Keluar</h3>
              <p class="lead mb-0">Data Masuk Surat Masuk Keluar </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/rap.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>“RAPAT ANGGARAN PROGRAM KERJA KELUARGA  MAHASISWA POLITEKNIK NEGERI SRIWIJAYA 2017”.</h2>
            <p class="lead mb-0">Tema kegiatan ini adalah ”KESUKSESAN ESOK HARI ADALAH HASIL DARI RENCANA HARI INI”.</p>
			<br>
			<a href="?halaman=rap"><button type="submit" class="btn btn-block btn-lg btn-primary" name="baca_rap">Baca Lebih Lengkap >></button></a>
          </div>
        </div>
		<div class="container">
		 <?php
			if(isset($_GET['halaman'])){
				if($_GET['halaman']=="rap"){include "artikel/rap.php";}
			}
			else{
			?>
			<?php
			}
			?>
		</div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/su.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>"SIDANG UMUM KELUARGA MAHASISWA POLITEKNIK NEGERI SRIWIJAYA 28-30 Januari 2018" </h2>
            <p class="lead mb-0">Kegiatan ini bernama “ SIDANG UMUM KELUARGA MAHASISWA POLITEKNIK NEGERI SRIWIJAYA 2018” DENGAN TEMA “Wujudkan Segala Keputusan dan Tujuan dengan Mufakat“</p>
			<br>
			<a href="?halaman=su"><button type="submit" class="btn btn-block btn-lg btn-primary" name="baca_su">Baca Lebih Lengkap >></button></a>
		  </div>
        </div>
      </div>
	  <div class="container">
		 <?php
			if(isset($_GET['halaman'])){
				if($_GET['halaman']=="su"){include "artikel/su.php";}
			}
			else{
			?>
			<?php
			}
			?>
		</div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">STURUKTUR KOMISI 2 <br>MPM KM POLSRI TAHUN 2018</h2>
		 <hr>
		     <div class="row">
			
          <div class="col-lg-6">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/nailul.jpg" alt="">
			  <p><h5>Ketua</h5></p>
              <h5>Nailul Fadhilah</h5>
              <p class="font-weight-light mb-0">"Fraksi Bahasa Inggris"</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/miftah.png" alt="">
              <p><h5>Sekretaris</h5></p>
              <h5>Miftahul Huda</h5>
              <p class="font-weight-light mb-0">"Fraksi Manajemen Informatika"</p>
			  </div>
          </div>
        </div>
				<div class="row">
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/amal.jpg" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Ikhlasul Amal</h5>
              <p class="font-weight-light mb-0">"Fraksi Manajemen Informatika"</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/mpm.png" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Rayana Djaka Surya</h5>
              <p class="font-weight-light mb-0">"Fraksi Fraksi Mesin"</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/pratiwi.jpg" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Pratiwi</h5>
              <p class="font-weight-light mb-0">"Fraksi Manajemen Informatika"</p>
            </div>
          </div>
		   <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/esti.jpg" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Esti Priani</h5>
              <p class="font-weight-light mb-0">"Fraksi Bahasa Inggris"</p>
            </div>
          </div>
        </div>
			<div class="row">
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/sarah.jpg" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Sara Yunia</h5>
              <p class="font-weight-light mb-0">"Fraksi Bahasa Inggris"</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/mpm.png" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Nita Fitriani</h5>
              <p class="font-weight-light mb-0">"Fraksi Teknik Kimia"</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/mpm.png" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Balqis Sabrina Putri</h5>
              <p class="font-weight-light mb-0">"Fraksi Teknik Sipil"</p>
            </div>
          </div>
		   <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/mpm.png" alt="">
              <p><h5>Anggota</h5></p>
              <h5>Willy Alexander </h5>
              <p class="font-weight-light mb-0">"Fraksi Teknik Mesin"</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	<hr color="black">
	<center>
	Copyright@IkhlasulAmal2018  
	</hr>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
