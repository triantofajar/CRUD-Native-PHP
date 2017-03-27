<?php
include '../config/koneksi.php';

	if(empty($_SESSION['username'])AND
		empty($_SESSION['password'])){
		echo "<p><b>Anda Harus Login </b></p>";
}
else {?>
<link rel="stylesheet" href="../css/style.css" type="text/css" />

<h2>Daftar User</h2>
<br>
<table border="1">
	<tr><th>No</th><th>Username</th><th>Password</th><th>Nama Lengkap</th><th>Level</th><th>Fungsi</th></tr>

<?php
include '../config/koneksi.php';


$query="SELECT * FROM user ORDER BY id";
$tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
$no=1;
while ($data=mysqli_fetch_array($tampil)) { ?>
	
	<tr><td><?php echo $no++ ?></td>
	<td><?php echo $data['username'] ?></td>
	<td><?php echo $data['password'] ?></td>
	<td><?php echo $data['nama_lengkap'] ?></td>
	<td><?php echo $data['level'] ?></td>
	<td><?php echo '<a href=index.php?page=edituser&&id='.$data['id'].'>
	<img class="view" src="images/edit.png" \></a>';?> 
	<?php echo '<a href=modUser/hapus_user.php?id='.$data['id'].'
	" onClick="return confirm(\'Apakah user '.$data['username'].' ingin dihapus ?\')">	
	<img class="view" src="images/hapus.png" \></a></td>		
	</tr>'; ?>
	
<?php
}
?>

</table>
<?php
echo"<a href='index.php?page=tambahuser'>Tambah User</a>";
}?>
 
