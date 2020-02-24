<?php
	$conn = mysqli_connect('localhost','root','','db_universitas');
	if (!$conn)
	{
		die("Database Connection:".mysqli_connect_error());
	}
?>
	<center>
<h1>LAPORAN MAHASISWA</h1>
 <table class="table table-striped table-hover" border="1" width="100%">
 <!--baris header-->
	<tr>
		<td>No</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Tanggal Lahir</td>
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
		<td style='vertical-align:middle'>$tampil[nim]</td>
		<td style='vertical-align:middle'>$tampil[nama]</td>
		<td style='vertical-align:middle'>$tampil[jenis_kelamin]</td>
		<td style='vertical-align:middle'>$tampil[tgl_lahir]</td>
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
	Pimpinan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
</p>
<script type="text/javascript">
setTimeout("window.print();",0);//milisecond
</script>
</div>