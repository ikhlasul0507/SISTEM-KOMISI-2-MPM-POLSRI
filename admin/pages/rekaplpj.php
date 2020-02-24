 <?php
 if(isset($_POST['simpan']))
	{
		$sql=mysqli_query($conn, "INSERT INTO tbl_lpj VALUES('$_POST[nama_ormawa]',
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
	$sql=mysqli_query($conn, "DELETE FROM tbl_lpj	WHERE nama_kegiatan='$_GET[delete]'" );
		
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
 <h3 class="page-header">Tampilan Data Laporan Pertanggung Jawaban</h3>
 
<script>
function cari(){
	document.location='?halaman=rekaplpj&cari=' + document.getElementById("katakunci").value;
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
<div class="col-lg-1">
 <a href="printlpj.php" class="btn btn-primary form-control" target="blank">Print</a>
</div>
<br>
<br>
 <table class="table table-striped table-hover">
 <!--baris header-->
	<tr align="center">
		<td>No</td>
		<td>Nama Ormawa</td>
		<td>Nama Kegiatan</td>
		<td>Tanggal Di Terima</td>
		<td>Tanggal Pelaksanaan</td>
		<td>Pengirim</td>
		<td>Penerima</td>
		<td>Nilai</td>
		<td>Options</td>
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
$data=mysqli_query($conn,"SELECT * FROM tbl_lpj $katakunci");
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
			<a href='?halaman=rekaplpj&delete=$tampil[nama_kegiatan]' class='btn btn-warning btn-xs' onclick='return confirm(".'"Apakah anda Yakin ?"'.")'>Delete</a>
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
