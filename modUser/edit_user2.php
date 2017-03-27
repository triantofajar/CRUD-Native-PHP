<?php
include '..config/koneksi.php';

	if(empty($_SESSION['username'])AND
		empty($_SESSION['password'])){
		echo "<p><b>Anda Harus Login </b></p>";
}
else {
$edit="SELECT * FROM user WHERE id='$_GET[username]'";
$hasil=mysqli_query($konek,$edit)or die(mysqli_error($konek));
$data=mysqli_fetch_array($hasil);


?>
<h2>Edit User</h1>
<form action= "modUser/update_user.php" method= "POST" >
<input type= "hidden" name="id" value=<?php echo $_SESSION['username']; ?>>
<table>

<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username" value=<?php echo $_SESSION['username'];?> disabled="disabled"></td>
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

