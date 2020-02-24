 <?php
 if(isset($_POST['kirim']))
	 {
		$sql=mysqli_query($conn, "INSERT INTO tbl_matakuliah VALUES('$_POST[kode_mk]',
		'$_POST[nama_mk]','$_POST[jumlah_sks]')");
		
		if($sql)
		{
			echo"<script>alert('Data Mata Kuliah Di Simpan');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
	}	
?>

 
 
 <div class="col-lg-12">
                    <h1 class="page-header">Data Mata Kuliah Politeknik Negeri Sriwijaya</h1>
                </div>
<div class="col-lg-4">
                    <h1 class="page-header">Form Data Kuliah</h1>
					
					<form method="post" enctype="multipart/form-data">
					<?php
					//enctype="multipart/form-data" --> digunakan untuk menampilkan foto kedalam folder
					?>
					
					<table class="table table-hover">
						<tr>
							<td>Kode Mata Kuliah</td>
							<td>
							<input type="number" name="kode_mk" class="form-control"/>
							</td>
						</tr>
						<tr>
							<td>Nama Mata Kuliah</td>
							<td><input type="text" name="nama_mk" class="form-control"></td>
						</tr>
						
						<tr>
							<td>Jumlah SKS</td>
							<td><input type="number" name="jumlah_sks" class="form-control"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="kirim" class="btn btn-primary"/></td>
						</tr>
					</table>
					</form>
</div>
<script>
function cari(){
	document.location='?halaman=dmk&cari=' + document.getElementById("katakunci").value;
}
</script>
<div  class="col-lg-8">
 <h1 class="page-header">Tampilan Data Mata Kuliah</h1>
 
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
		<td>Kode Mata Kuliah</td>
		<td>Nama Mata Kuliah</td>
		<td>Jumlah SKS</td>
		<td>Nama</td>
	</tr>

<?php
if(isset($_GET['cari'])){
	$katakunci=" where nama like '%$_GET[cari]%' ";
}
else
{
	$katakunci="";
}

$no=1;
$isi=mysqli_query($conn,"SELECT * FROM tbl_matakuliah $katakunci");
while ($tampil=mysqli_fetch_array($isi)){
	echo "
	<tr>
		<td style='vertical-align:middle'>$no</td>
		<td style='vertical-align:middle'>$tampil[kode_mk]</td>
		<td style='vertical-align:middle'>$tampil[nama_mk]</td>
		<td style='vertical-align:middle'>$tampil[jumlah_sks]</td>
		<td style='vertical-align:middle' align=center>
			<class='btn btn-primary btn-xs'>Edit</a>
			<class='btn btn-warning btn-xs'>Delete</a>
		</td>
	</tr>
	";
$no=$no+1;
}
?>
</table>
</div>