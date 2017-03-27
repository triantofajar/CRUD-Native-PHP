<?php
include '..config/koneksi.php';

	if(empty($_SESSION['username'])AND
		empty($_SESSION['password'])){
		echo "Anda Harus Login ";
}
else {
$edit="SELECT * FROM user WHERE id='$_GET[id]'";
$hasil=mysqli_query($konek,$edit)or die(mysqli_error($konek));
$data=mysqli_fetch_array($hasil);
?>
<h2>Edit User</h1>
<form action= "modUser/update_user.php" method= "POST" >
<input type= "hidden" name="id" value=<?php echo $data['username']; ?>>
<table>

<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username" value=<?php echo $data['username'];?> disabled="disabled"></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input type="text" name="nama" value=<?php echo $data['nama_lengkap'];?> disabled="disabled"></td>
</tr>
<tr>
<td>Password Lama</td><td>:</td>
<td><input type="password" name="passwordlama" id="passwordlama" ></td>
<tr>
<td>Password Baru</td><td>:</td>
<td><input type="password" name="passwordbaru" id="passwordbaru"></td>
</tr>
<tr>
<td>Konfirmasi Password Baru</td><td>:</td>
<td><input type="password" name="konfirmasipassword" id="konfirmasipassword"></td></tr>
<tr><td colspan="3" align="center"><input class="button" type="submit"  name="change" value="Edit"></td></tr>
</table>
</form>
<?php } ?>

