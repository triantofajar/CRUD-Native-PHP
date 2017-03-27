<?php
include '../config/koneksi.php';

  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p>Anda Harus Login </p>";
  
}
else{?>
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

<link rel="stylesheet" href="css/style.css" type="text/css" />
<h2>Konten</h2>
<form action="modKonten/tambah_konten.php" method="POST" align="center">
<table>
<tbody>
<tr>
<td>Judul</td>
<td>: <input name="judul" type="text" /></td>
</tr>
<tr>
<td>Penulis</td>
<td>: <input type="text" name="penulis" value="<?php echo $_SESSION['username'] ?> "/ disabled="disabled"></td>
</tr>
<tr>
<td>Kategori</td>
<td>: <select name="kategori"><option>Olahraga</option><option>Berita</option><option>Politik</option></select></td>
</tr>
<tr>
<td>Isi</td>
<td>: <textarea name="isi" cols="70" rows="9"></textarea> </td>
</tr>
<tr>
<td colspan="2" align="right"><input class="button" type="submit" name="" value="Simpan" tabindex="5" />
<input class="button" type="reset" name="" value="Batal" tabindex="5" />
</td>
</tr>
<tr>
</tr>
</tbody>  
</table>
</form>
<?php } ?>