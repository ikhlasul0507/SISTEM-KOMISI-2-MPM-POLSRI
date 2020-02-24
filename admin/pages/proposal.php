 <?php
 if(isset($_POST['simpan']))
	{
		$sql=mysqli_query($conn, "INSERT INTO tbl_proposal VALUES('$_POST[nama_ormawa]',
		'$_POST[nama_kegiatan]','$_POST[tgl_diterima]','$_POST[tgl_pelaksanaan]','$_POST[pengirim]','$_POST[penerima]',
		'$_POST[nilai]')");
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Simpan');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
	}	
 else
 if(isset($_GET['delete'])){
	$sql=mysqli_query($conn, "DELETE FROM tbl_proposal	WHERE nama_kegiatan='$_GET[delete]'" );
		
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
                    <h1 class="page-header">Input Data Proposal</h1>
					
					<form method="post" enctype="multipart/form-data">
					<?php
					//enctype="multipart/form-data" --> digunakan untuk menampilkan foto kedalam folder
					?>
					<table class="table table-hover">
						<tr>
							<td>Nama Ormawa</td>
							<td>
							<select name="nama_ormawa" class="form-control">
								<option>Majelis Permusyawatan Mahasiswa</option>
								<option>Badan Eksekutif Mahasiswa</option>
								<option>HMJ Teknik Sipil</option>
								<option>HMJ Teknik Mesin</option>
								<option>HMJ Teknik Elektro</option>
								<option>HMJ Teknik Kimia</option>
								<option>HMJ Akuntansi</option>
								<option>HMJ Administrasi Bisnis</option>
								<option>HMJ Teknik Komputer</option>
								<option>HMJ Manajemen Informatika</option>
								<option>HMJ Bahasa Inggris</option>
								<option>UKM Kharisma</option>
								<option>UKM Himpunan Bahtera Buana</option>
								<option>UKM English Debate Society</option>
								<option>UKM Olahraga</option>
								<option>UKM Warta Politeknik Sriwijaya</option>
								<option>UKM Symponi</option>
								<option>UKM Mars</option>
								<option>Pemilu KM-POLSRI</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>Nama Kegiatan</td>
							<td><input type="Text" name="nama_kegiatan" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Tanggal Diterima</td>
							<td><input type="date" name="tgl_diterima" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Tanggal Pelaksanaan</td>
							<td><input type="date" name="tgl_pelaksanaan" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Pengirim</td>
							<td><input type="Text" name="pengirim" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Penerima</td>
							<td><input type="Text" name="penerima" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Nilai</td>
							<td><input type="number" name="nilai" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
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
 <h1 class="page-header" align="center">Jadwal Kegiatan KM-POLSRI</h1>
<script>
function cari(){
	document.location='?halaman=proposal&cari=' + document.getElementById("katakunci").value;
}
</script>
<div class="col-lg-12">
 
 <div class="col-lg-10">
 <input class="form-control" placeholder="Masukan Pencarian" id="katakunci" tabindex="1">
 </div>
 <div class="col-lg-2">
 <button>
 <a onclick="cari()" class="btn btn-block form-control" tabindex="2">Cari</a>
 </button>
</div>
<br>
<br>
<br>
 <table class="table table-striped table-hover">
 <!--baris header-->
	<tr align="center"><b>
		<td>No</td>
		<td>Nama Ormawa</td>
		<td>Nama Kegiatan</td>
		<td>Tanggal Di Terima</td>
		<td>Tanggal Pelaksanaan</td>
		<td>Pengirim</td>
		<td>Penerima</td>
		<td>Nilai</td>
		<td>Options</td></b>
	</tr>
  <!--baris isi-->
   
<?php
if(isset($_GET['cari'])){
	$katakunci=" where nama_kegiatan like '%$_GET[cari]%' ";
}
else{
	$katakunci="";
}

$no=1;
$data=mysqli_query($conn,"SELECT * FROM tbl_proposal $katakunci");
while ($tampil=mysqli_fetch_array($data)){
	echo "
	<tr align='center'>
		<td style='vertical-align:middle'>$no</td>
		<td style='vertical-align:middle'>$tampil[nama_ormawa]</td>
		<td style='vertical-align:middle'>$tampil[nama_kegiatan]</td>
		<td style='vertical-align:middle'>$tampil[tgl_diterima]</td>
		<td style='vertical-align:middle'>$tampil[tgl_pelaksanaan]</td>
		<td style='vertical-align:middle'>$tampil[pengirim]</td>
		<td style='vertical-align:middle'>$tampil[penerima]</td>
		<td style='vertical-align:middle'><h1>$tampil[nilai]</h1></td>
		<td style='vertical-align:middle' align=center>
			<a href='?halaman=proposal&delete=$tampil[nama_kegiatan]' class='btn btn-warning btn-xs' onclick='return confirm(".'"Apakah anda Yakin ?"'.")'>Delete</a>
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
