<?php
include 'config/koneksi.php';

	if(empty($_SESSION['username'])AND
		empty($_SESSION['password'])){
		echo "<p>Anda Harus Login </p>";
}
else {?>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<h2>Daftar Tamu</h2>
<br>
<table border="1">
	<tr><th>No</th><th>Nama</th><th>E-mail</th><th>Komentar</th><th>Hapus</th></tr>

<?php
include 'config/koneksi.php';

$query="SELECT * FROM guest_book ORDER BY id";
$tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
$no=1;
while ($data=mysqli_fetch_array($tampil)) { ?>
	
	<tr><td><?php echo $no++ ?></td>
	<td><?php echo $data['nama'] ?></td>
	<td><?php echo $data['email'] ?></td>
	<td><?php echo $data['komentar'] ?></td>
	<td><?php echo '<a href=hapus_tamu.php?id='.$data['id'].'" onClick="return confirm(\'Apakah komentar '.$data['nama'].' ingin dihapus ?\')">	
	<img class="view" src="images/hapus.png" \></a></td>		
	</tr>'; ?>
	
<?php
}
}?>
</table>