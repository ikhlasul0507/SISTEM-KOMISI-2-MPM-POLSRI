 <?php
 if(isset($_POST['simpan']))
	{
		$sql=mysqli_query($conn, "INSERT INTO tbl_kalenderormawa VALUES('$_POST[nama_ormawa]',
		'$_POST[jenis_kegiatan]','$_POST[nama_kegiatan]','$_POST[estimasi]','$_POST[tanggal_pelaksanaan]')");
		
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
	$sql=mysqli_query($conn, "DELETE FROM tbl_kalenderormawa	WHERE tanggal_pelaksanaan='$_GET[delete]'" );
		
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
                    <h1 class="page-header">Input Data Kalender Ormawa</h1>
					
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
							<td>Jenis Kegiatan</td>
							<td><select name="jenis_kegiatan" class="form-control">
								<option>Program Kerja</option>
								<option>Non Program Kerja</option>
								<option>Delegasi</option>
								
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
							<td>Estimasi</td>
							<td><input type="number" name="estimasi" class="form-control" value="<?php
							if(isset($_GET['edit'])){echo $edit['tgl_lahir'];}
							?>"/></td>
						</tr>
						<tr>
							<td>Tanggal Pelaksanaan</td>
							<td><input type="date" name="tanggal_pelaksanaan" class="form-control" value="<?php
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
				<center>
<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;height=600&amp;wkst=1&amp;bgcolor=%2333ffff&amp;src=dg8n9luhr9u15irq2mo1j9p51s%40group.calendar.google.com&amp;color=%23333333&amp;ctz=Asia%2FJakarta" style="border:solid 1px #777" width="800" height="400" frameborder="0" scrolling="no"></iframe>
				</center>
<div class="col-lg-12">
<hr size="10">
 <h1 class="page-header" align="center">Jadwal Kegiatan KM-POLSRI</h1>
<script>
function cari(){
	document.location='?halaman=kalenderormawa&cari=' + document.getElementById("katakunci").value;
}
</script>
<div class="col-lg-12">
 
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
	<tr align="center">
		<td>No</td>
		<td>Nama Ormawa</td>
		<td>Jenis Kegiatan</td>
		<td>Nama Kegiatan</td>
		<td>Estimasi</td>
		<td>Tanggal Pelaksanaan</td>
		<td>Options</td>
	</tr>
  <!--baris isi-->
   
<?php
if(isset($_GET['cari'])){
	$katakunci=" where nama_ormawa like '%$_GET[cari]%' ";
}
else{
	$katakunci="";
}

$no=1;
$data=mysqli_query($conn,"SELECT * FROM tbl_kalenderormawa $katakunci");
while ($tampil=mysqli_fetch_array($data)){
	echo "
	<tr align='center'>
		<td style='vertical-align:middle'>$no</td>
		<td style='vertical-align:middle'>$tampil[nama_ormawa]</td>
		<td style='vertical-align:middle'>$tampil[jenis_kegiatan]</td>
		<td style='vertical-align:middle'>$tampil[nama_kegiatan]</td>
		<td style='vertical-align:middle'>Rp.$tampil[estimasi],-</td>
		<td style='vertical-align:middle'>$tampil[tanggal_pelaksanaan]</td>
		<td style='vertical-align:middle' align=center>
			<a href='?halaman=kalenderormawa&delete=$tampil[tanggal_pelaksanaan]' class='btn btn-warning btn-xs' onclick='return confirm(".'"Apakah anda Yakin ?"'.")'>Delete</a>
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
