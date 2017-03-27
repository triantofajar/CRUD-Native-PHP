
<link rel="stylesheet" href="css/style.css" type="text/css" />

<h2 align="center">Daftar Master Katalog</h2>
<br>
<table border="1">
<tr><th>No</th><th>Kode Barang</th><th>Judul Katalog</th><th>Jenis</th></tr>

<?php
include 'config/koneksi.php';


$query="SELECT * FROM katalog ORDER BY id";
$tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
$no=1;
while ($data=mysqli_fetch_array($tampil)) { ?>
	
	<tr><td><?php echo $no++ ?></td>
	<td><?php echo $data['kode'] ?></td>
	<td><?php echo $data['judul'] ?></td>
	<td><?php echo $data['jenis'] ?></td></tr>
	
<?php
}
?>
</table>
 
