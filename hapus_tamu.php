<?php

include 'config/koneksi.php';

$id=$_GET['id'];

	$hapus="DELETE FROM guest_book where id='$id'";
	$qhapus=mysqli_query($konek,$hapus)or die(mysqli_error($konek));

	if($qhapus){
	echo "<strong><center>Data Terhapus";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=index.php?page=tamu">'; 
	
	}
?>