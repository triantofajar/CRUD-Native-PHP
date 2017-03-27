<?php
include '../config/koneksi.php';

	if(empty($_SESSION['username'])AND
		empty($_SESSION['password'])){
		echo "<p><b>Anda Harus Login </b></p>";
}
else {?>
<link rel="stylesheet" href="../css/style.css" type="text/css" />

<h2>Daftar Konten</h2>
<br>
<table id="konten" border="1">
<tr><th>No</th><th>Tanggal</th><th>Judul</th><th>Penulis</th><th>Kategori</th><th>Isi</th><th>Fungsi</th></tr>

<?php
include '../config/koneksi.php';


$query="SELECT * FROM konten ORDER BY id_konten";
$tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
$no=1;
while ($data=mysqli_fetch_array($tampil)) { ?>
	
	<tr><td><?php echo $no++ ?></td>
	<td><?php echo $data['tanggal'] ?></td>
	<td><?php echo $data['judul'] ?></td>
	<td><?php echo $data['penulis'] ?></td>
	<td><?php echo $data['kategori'] ?></td>
	<td><?php echo $data['isi'] ?></td>
	<td><?php echo '<a href=index.php?page=editkonten&&id='.$data['id_konten'].'>
	<img class="view" src="images/edit.png" \></a>';?> 
	<?php echo '<a href=modkonten/hapus_konten.php?id='.$data['id_konten'].'" onClick="return confirm(\'Apakah konten dengan judul : '.$data['judul'].' ingin dihapus ?\')">	
	<img class="view"src="images/hapus.png" \></a></td>		
	</tr>'; ?>
	
<?php
}
}
?>
</table>
 
