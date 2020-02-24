<script>
function cari(){
	document.location='?halaman=rekap&cari=' + document.getElementById("katakunci").value;
}
</script>
<div class="col-lg-12">
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
		<td>NIM</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Tanggal Lahir</td>
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
$data=mysqli_query($conn,"SELECT * FROM tbl_mahasiswa $katakunci");
while ($tampil=mysqli_fetch_array($data)){
	echo "
	<tr>
		<td>$no</td>
		<td>$tampil[nim]</td>
		<td>$tampil[nama]</td>
		<td>$tampil[jenis_kelamin]</td>
		<td>$tampil[tgl_lahir]</td>
		<td>
			<a href='' class='btn btn-primary btn-xs'>Edit</a>
			<a href='' class='btn btn-warning btn-xs'>Delete</a>
		</td>
	</tr>
	";
	$no=$no+1;
}

?>
</table>
</div>