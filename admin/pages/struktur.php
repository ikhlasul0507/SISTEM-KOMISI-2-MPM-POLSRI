 <?php
 if(isset($_POST['simpan']))
 {
	 //untuk upload foto
	 if(!empty($_FILES['u_foto']['tmp_name'])){
		move_uploaded_file($_FILES['u_foto']['tmp_name'],
		"img/foto_$_POST[nim].png");
	 }
	else
		// insert
	{
		$sql=mysqli_query($conn, "INSERT INTO tbl_struktur VALUES('$_POST[nim]',
		'$_POST[nama]','$_POST[jenis_kelamin]','$_POST[jurusan]','$_POST[jabatan]','$_POST[tgl_lahir]')");
		
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Simpan');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
	}	
 }
 else
 if(isset($_GET['delete'])){
	$sql=mysqli_query($conn, "delete FROM tbl_struktur	WHERE nim='$_GET[delete]'" );
		
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Hapus');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
 }
 ?>
 <html>
<head><title>Pengertian</title></head>
<body>
 <div class="col-lg-12">
                    <h1 class="page-header">Input Data Anggota Komisi 2</h1>
					
					<form method="post" enctype="multipart/form-data">
					<?php
					//enctype="multipart/form-data" --> digunakan untuk menampilkan foto kedalam folder
					?>
					<table class="table table-hover">
						<tr>
							<td>NIM</td>
							<td>
							<input type="number" name="nim" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['nim'];}
							?>"/>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['nama'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Jenis kelamin</td>
							<td><select name="jenis_kelamin" class="form-control">
								<option <?php
							if(isset($_GET['edit'])){
								if($edit['jenis_kelamin']=="Laki-laki")
								{
								echo 'selected';
								}
							}
							?>
							>
							Laki-laki</option>
							<option 
								<?php
							if(isset($_GET['edit'])){
								if($edit['jenis_kelamin']=="perempuan")
								{
								echo 'selected';
								}
							}
							?>
							>
							perempuan</option>
							</select></td>
						</tr>
						<tr>
							<td>Jurusan / Fraksi</td>
							<td><select name="jurusan" class="form-control">
								<option>Teknik Sipil</option>
								<option>Teknik Mesin</option>
								<option>Teknik Elektro</option>
								<option>Teknik Kimia</option>
								<option>Akuntansi</option>
								<option>Administrasi Bisnis</option>
								<option>Teknik Komputer</option>
								<option>Manajemen Informatika</option>
								<option>Bahasa Inggris</option>
							</select></td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td><select name="jabatan" class="form-control">
								<option>Ketua</option>
								<option>Sekretaris</option>
								<option>Anggota</option>
							</select></td>
						</tr>
						<tr>
							<td>Tgl lahir</td>
							<td><input type="date" name="tgl_lahir" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>'<tr>
							<td>Upload Foto (.PNG)</td>
							<td><input type="file" name="u_foto" class="form-control"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="simpan" value="
							<?php if(isset($_GET['edit'])){
								echo 'Ubah Data';
							}
							else{
								echo 'Simpan Data';
							}
							?>
							"class="btn btn-primary"/></td>
						</tr>
					</table>
					</form>
                </div>
				
<div class="col-lg-12">
<hr size="10">
 <h1 class="page-header" align="center">Struktur Anggota Komisi 2 </h1>

 <table class="table table-striped table-hover">
 <!--baris header-->
	<tr align="center">
		<td>No</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Jurusan/Fraksi</td>
		<td>Jabatan</td>
		<td>Tanggal Lahir</td>
		<td>Foto</td>
		<td>Options</td>
	</tr>
  <!--baris isi-->
   
<?php
if(isset($_GET['cari'])){
	$katakunci=" where nama like '%$_GET[cari]%' ";
}
else{
	$katakunci="";
}

$no=1;
$data=mysqli_query($conn,"SELECT * FROM tbl_struktur");
while ($tampil=mysqli_fetch_array($data)){
	
	//koding untuk menampilkan foto
	if(file_exists("img/foto_$tampil[nim].png")){
		//jika ada
		$foto="<a href='img/foto_$tampil[nim].png' target='blank''>
		<img src='img/foto_$tampil[nim].png' 
		class='img-circle' width=80px height=80px>
		</a>
		";
	}
	else{
		//jika tidak ada
		$foto="";
	}
	
	echo "
	<tr align='center'>
		<td style='vertical-align:middle'>$no</td>
		<td style='vertical-align:middle'>$tampil[nim]</td>
		<td style='vertical-align:middle'>$tampil[nama]</td>
		<td style='vertical-align:middle'>$tampil[jenis_kelamin]</td>
		<td style='vertical-align:middle'>$tampil[jurusan]</td>
		<td style='vertical-align:middle'>$tampil[jabatan]</td>
		<td style='vertical-align:middle'>$tampil[tgl_lahir]</td>
		<td style='vertical-align:middle'>$foto<br>
		<a href='img/foto_$tampil[nim].png' target='blank'>Lihat foto</a></td>
		<td style='vertical-align:middle' align=center>
			
			<a href='?halaman=struktur&delete=$tampil[nim]' class='btn btn-warning btn-xs' onclick='return confirm(".'"Apakah anda Yakin ?"'.")'>Delete</a>
		</td>	
	</tr>
	";
	$no=$no+1;
}

?>
</table>
</div>
</body>
</html>
