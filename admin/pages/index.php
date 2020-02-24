
<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','db_komisi2');
	if (!$conn)
	{
		die("Database Connection:".mysqli_connect_error());
	}
	
	if(isset($_POST['login']))
	{
		if($_POST['username']=='ikhlasulamal' and $_POST['password']=='12345678')
		{
			$_SESSION['Admin']="Administrasi";
			echo "<meta http-equiv='refresh' content='0;url=./?'>";
			echo "<script>alert(Login Berhasil !!');</script>";
		}
		elseif($_POST['username']=='mpm' and $_POST['password']=='komisi2')
		{
			$_SESSION['Anggota']="Anggota Komisi 2";
			echo "<meta http-equiv='refresh' content='0;url=./?'>";
			echo "<script>alert(Login Berhasil !!');</script>";
		}
		{
			//echo "<script>alert('Username/Password Salah!');</script>";
		}
	}
	
	if(isset($_SESSION['Admin']) or isset($_SESSION['Anggota'])){include"./konten.php";}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Majelis Permusyawaratan Mahasiswa</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="img/bg.png">
<br>
<center>
<img src="img/polsri.png" width="200px" height="200px">
<img src="img/mpm.png" width="200px" height="200px">
<hr><font color="white">
<h1 >Majelis Permusyawaratan Mahasiswa</h1>
<h3>Komisi 2</h3>
<h2> ( Controlling And Budgeting )</h2>
</font>
</center>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
						<center>
                        <h3 class="panel-title">Silahkan Login </h3>
						</center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div>
                                   
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" name="login" type="submit" value="Login">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<hr>
<center>
<font color="white">Copyright@IkhlasulAmal_Kom2_2017</font>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php } ?>