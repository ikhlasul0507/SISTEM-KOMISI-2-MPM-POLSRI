<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Komisi 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bc809e30a687f41a9d3e2e2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?">Aplikasi Sistem Komisi 2 Majelis Permusyaratan Mahasiswa</a>
				
            </div>
            <!-- /.navbar-header -->
			
            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" value="Contoh">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
							<center>
                            <div class="input-group custom-search-form">
                                <img src="img/mpm.png" width="100" height="100" align="center">
								<br>
								<br>
								
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="?"><i class="fa fa-th-large   fa-fw"></i> Dashboard</a>
                        </li>
						<li>
						<!--admin-->
						<?php if (isset($_SESSION['Admin'])){?>
                            <a href="?halaman=pengertian"><i class="fa fa-users fa-fw"></i> Pengertian</a>
                        </li>
						<li>
                            <a href="?halaman=visimisi"><i class="fa fa-book fa-fw"></i> Visi & Misi</a>
                        </li>
						<li>
                            <a href="?halaman=struktur"><i class="fa fa-book fa-fw"></i> Struktur</a>
                        </li>
						<li>
                            <a href="?halaman=kalenderormawa"><i class="fa fa-book fa-fw"></i> Kalender Ormawa</a>
                        </li>
						<li>
                            <a href="?halaman=proposal"><i class="fa fa-book fa-fw"></i> Proposal</a>
                        </li>
						<li>
                            <a href="?halaman=lpj"><i class="fa fa-book fa-fw"></i> Laporan Penanggungjawaban</a>
                        </li>
						<li>
                            <a href="?halaman=dmk"><i class="fa fa-book fa-fw"></i> Surat Masuk Keluar</a>
                        </li>
						<li>
                            <a href="?halaman=dmk"><i class="fa fa-book fa-fw"></i> Perhitungan Point Ormawa</a>
                        </li>
						<li>
                            <a href="?halaman=dmk"><i class="fa fa-book fa-fw"></i> Perhitungan Dana Ormawa</a>
                        </li>
						<li>
                            <a href="?halaman=dmk"><i class="fa fa-book fa-fw"></i> File Dokumen Komisi 2</a>
                        </li>
						<li>
                            <a href="?halaman=rekapproposal"><i class="fa fa-file fa-fw"></i> Rekap Data Proposal</a>
                        </li>
						<li>
                            <a href="?halaman=rekaplpj"><i class="fa fa-file fa-fw"></i> Rekap Data Laporan Penanggungjawaban</a>
                        </li>
						<li>
                            <a href="?halaman=rekap"><i class="fa fa-file fa-fw"></i> Rekap Data Surat Masuk Keluar</a>
                        </li>
						<li>
                            <a href="?halaman=dmk"><i class="fa fa-file fa-fw"></i> Rekap Data Hasil Perhitungan Dana Ormawa</a>
                        </li>
						
						<?php } ?>
						
						<!--rektor-->
						<?php if (isset($_SESSION['Anggota'])){?>
						<li>
                            <a href="?halaman=laporan"><i class="fa fa-file fa-fw"></i> Laporan Mahasiswa</a>
                        </li>
						<?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
			<?php
			if(isset($_GET['halaman'])){
				if($_GET['halaman']=="pengertian"){include "pengertian.php";}
				if($_GET['halaman']=="visimisi"){include "visimisi.php";}
				if($_GET['halaman']=="struktur"){include "struktur.php";}
				if($_GET['halaman']=="kalenderormawa"){include "kalenderormawa.php";}
				if($_GET['halaman']=="proposal"){include "proposal.php";}
				if($_GET['halaman']=="lpj"){include "lpj.php";}
				if($_GET['halaman']=="rekapproposal"){include "rekapproposal.php";}
				if($_GET['halaman']=="rekaplpj"){include "rekaplpj.php";}
				if($_GET['halaman']=="rekap"){include "rekap.php";}
				if($_GET['halaman']=="dmk"){include "mahasiswa.php";}
			}
			else{
			?>
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
					Amal Ganteng ssdsd
                </div
			><?php
			}
			?>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<hr>
 <div class="col-lg-12">
                    <h1 class="page-header"></h1>
					Amal Ganteng
                </div
</body>

</html>
