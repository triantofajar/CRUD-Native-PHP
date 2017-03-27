<?php
include '..config/koneksi.php';

	if(empty($_SESSION['username'])AND
		empty($_SESSION['password'])){
		echo "Anda Harus Login ";
}
else {
$edit="SELECT * FROM konten WHERE id_konten='$_GET[id]'";
$hasil=mysqli_query($konek,$edit)or die(mysqli_error($konek));
$data=mysqli_fetch_array($hasil);
?>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<h2>Edit Konten</h2>
<form action= "modKonten/update_konten.php" method= "POST" >
<input type= "hidden" name="id" value=<?php echo $data['id_konten']; ?>>
<table>

<tr>
<td>Tanggal</td>
<td>:</td>
<td><input type="text" name="tanggal" value=<?php echo $data['tanggal'];?> ></td>
</tr>
<tr>
<td>Judul</td>
<td>:</td>
<td><input type="text" name="judul" value=<?php echo $data['judul'];?>></td>
</tr>
<tr>
<td>Penulis</td>
<td>:</td>
<td><input type="text" name="penulis" value=<?php echo $data['id_konten'];?> disabled="disabled"></td>
</tr>
<tr>
<td>Kategori</td>
<td>:</td>
<td><input type="text" name="kategori" value=<?php echo $data['kategori'];?>></td>
</tr>
<tr>
<td>Isi</td>
<td>:</td>
<td><textarea name="isi" value=<?php echo $data['isi'];?>></textarea></td>
</tr>
<tr><td colspan="3" align="center"><input class="button" type="submit"  name="change" value="Edit"></td></tr>
</table>
</form>
<?php } ?>

