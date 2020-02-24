 <?php
 if(isset($_POST['simpan']))
 {
	 //echo $_POST['nim'];
	 
	 //untuk upload foto
	 if(!empty($_FILES['u_foto']['tmp_name'])){
		move_uploaded_file($_FILES['u_foto']['tmp_name'],
		"./file/foto_$_POST[nim].png");
	 }
	 
	 
	if(isset($_GET['edit']))
	{
			//update
			$sql=mysqli_query($conn, "UPDATE tbl_mahasiswa SET nama='$_POST[nama]',
			tgl_lahir='$_POST[tgl_lahir]',jenis_kelamin='$_POST[jenis_kelamin]' WHERE nim='$_POST[nim]'");
	
		if($sql)
		{
			echo"<script>alert('Data Mahasiswa Di ubah');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
	}
	else
		// insert
	{
		$sql=mysqli_query($conn, "INSERT INTO tbl_mahasiswa VALUES('$_POST[nim]',
		'$_POST[nama]','$_POST[jenis_kelamin]','$_POST[tgl_lahir]')");
		
		if($sql)
		{
			echo"<script>alert('Data Mahasiswa Di Simpan');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
	}	
 }
 
 if(isset($_GET['edit'])){
	 $edit=mysqli_fetch_array(mysqli_query($conn,"select *from tbl_mahasiswa where nim='$_GET[edit]'"));
 }
 if(isset($_GET['delete'])){
	$sql=mysqli_query($conn, "DELETE FROM tbl_mahasiswa WHERE nim='$_GET[delete]'" );
		
		if($sql)
		{
			echo"<script>alert('Data Mahasiswa Di Simpan');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
 }
 ?>
 
 
 <div class="col-lg-3">
                    <h1 class="page-header">Data Mahasiswa</h1>
					
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
<script>
function cari(){
	document.location='?halaman=mhs&cari=' + document.getElementById("katakunci").value;
}
</script>
<div class="col-lg-9">
 <h1 class="page-header">Tampilan Data</h1>
 
 <div class="col-lg-10">
 <input class="form-control" placeholder="Masukan Pencarian" id="katakunci">
 </div>
 <div class="col-lg-2">
 <a onclick="cari()" class="btn btn-primary form-control">Cari</a>
</div>
<br>
<br>
<br>
 <table class="table table-striped table-hover">
 <!--baris header-->
	<tr>
		<td>No</td>
		<td>Foto</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Tanggal Lahir</td>
		<td>Options</td>
		<td>Foto</td>
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
$data=mysqli_query($conn,"SELECT * FROM tbl_mahasiswa $katakunci");
while ($tampil=mysqli_fetch_array($data)){
	
	//koding untuk menampilkan foto
	if(file_exists("./file/foto_$tampil[nim].png")){
		//jika ada
		$foto="<a href='./file/foto_$tampil[nim].png' target='blank''>
		<img src='./file/foto_$tampil[nim].png' 
		class='img-circle' width=80px height=80px>
		</a>
		";
	}
	else{
		//jika tidak ada
		$foto="";
	}
	
	echo "
	<tr>
		<td style='vertical-align:middle'>$no</td>
		<td style='vertical-align:middle'>$foto</td>
		<td style='vertical-align:middle'>$tampil[nim]</td>
		<td style='vertical-align:middle'>$tampil[nama]</td>
		<td style='vertical-align:middle'>$tampil[jenis_kelamin]</td>
		<td style='vertical-align:middle'>$tampil[tgl_lahir]</td>
		<td style='vertical-align:middle' align=center>
			<a href='?halaman=mhs&edit=$tampil[nim]' class='btn btn-primary btn-xs' onclick='return confirm(".'"Apakah anda akan Mengubah data ?"'.")'>Edit</a>
			<br><br>
			<a href='?halaman=mhs&delete=$tampil[nim]' class='btn btn-warning btn-xs' onclick='return confirm(".'"Apakah anda Yakin ?"'.")'>Delete</a>
		</td>
			
		<td style='vertical-align:middle'>
			<a href='./file/foto_$tampil[nim].png' target='blank'>Lihat foto</a>
		</td>
	</tr>
	";
	$no=$no+1;
}

?>
</table>
</div>