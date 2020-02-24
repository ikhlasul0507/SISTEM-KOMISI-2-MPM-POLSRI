
<div class="col-lg-12">
 <h1 class="page-header">Tampilan Data</h1>
 
 <div class="col-lg-1">
 <a href="cetak.php" class="btn btn-primary form-control" target="blank">Print</a>
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