<?php 

$id=$_GET['id'];
$page=$_GET['page'];
 include 'config/koneksi.php';

 $tampil="SELECT * FROM konten ORDER BY id_konten='$id'";
 $hasil=mysqli_query($konek,$tampil)or die(mysqli_error($konek));
 $data=mysqli_fetch_array($hasil);


$judul=$data['judul'];
$isi = $data['isi'];
$isi_more = substr($isi,0,400);
$penulis=$data['penulis'];
$kategori=$data['kategori'];




if($page=="readmore")
	echo "$isi";
else
	echo "$isi_more";

?>