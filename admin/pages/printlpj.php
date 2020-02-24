<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','db_komisi2');
	if (!$conn)
	{
		die("Database Connection:".mysqli_connect_error());
	}
?>
	<center>
	<table width="100%">
		<tr>
			<td align="left"><img src="img/polsri.png" width="100" height="100" align="center"></td>
			<td align="center"><b>POLITEKNIK NEGERI SRIWIJAYA</b><br> MAJELIS PERMUSYAWARATAN MAHASISWA<br>
			Jalan Srijaya Negera Bukit Besar Palembang 30139 <br>Website : www.mpm.polsri.ac.id Email : mpm.polsri44@gmail.com</td>
			<td align="right"><img src="img/mpm.png" width="100" height="100" align="center"></td>
		</tr>
	</table>
	<hr size="4" color="black">
	<center>
	<h2>Rekap Data Laporan Pertanggung Jawaban </h2>
	</center>
 <table class="table table-striped table-hover" border="1" width="100%">
 <!--baris header-->
	<tr>
		<td align="center">No</td>
		<td align="center">Nama Ormawa</td>
		<td align="center">Nama Kegiatan</td>
		<td align="center">Tanggal Di Terima</td>
		<td align="center">Tanggal Pelaksanaan</td>
		<td align="center">Pengirim</td>
		<td align="center">Penerima</td>
		<td align="center">Nilai</td>
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
$data=mysqli_query($conn,"SELECT * FROM tbl_lpj $katakunci");
while ($tampil=mysqli_fetch_array($data)){
	echo "
	<tr>
		<td style='vertical-align:middle' align='center' height='20px'>$no</td>
		<td style='vertical-align:middle' height='20px'>$tampil[nama_ormawa]</td>
		<td style='vertical-align:middle' height='20px'>$tampil[nama_kegiatan]</td>
		<td style='vertical-align:middle' align='center' height='20px'>$tampil[tgl_diterima]</td>
		<td style='vertical-align:middle' align='center' height='20px'>$tampil[tgl_pelaksanaan]</td>
		<td style='vertical-align:middle' align='center' height='20px'>$tampil[pengirim]</td>
		<td style='vertical-align:middle' align='center' height='20px'>$tampil[penerima]</td>
		<td style='vertical-align:middle' align='center' valign='bottom' height='20px'><h1 valign='bottom'>$tampil[nilai]</h1></td>
	</tr>
	";
	$no=$no+1;
}

?>
</table>
<p align="right">
	Palembang, <?php echo date('d M Y'); ?>
	<br>
	
	<br>
	<br>
	<br>
	<br>
	Ketua Komisi II&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
</p>
<script type="text/javascript">
setTimeout("window.print();",0);//milisecond
</script>
</div>