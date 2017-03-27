<?php
	
include '../config/koneksi.php';

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$tanggal=date("Y-m-d");
$judul=$_POST['judul'];
$penulis=$_SESSION['POST']['penulis'];
$kategori=$_POST['kategori'];
$isi=$_POST['isi'];



$input="INSERT INTO konten(id_konten,tanggal,judul,penulis,kategori,isi)
		values('','$tanggal','$judul','$penulis','$kategori','$isi')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	if($_SESSION['level']="admin"){
    echo "<strong><center>Data Berhasil Disimpan";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=viewkonten">';
        }
    else if($_SESSION['level']="user"){
    echo "<strong><center>Data Berhasil Disimpan";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">';
	}
    }
else
    {
    if($_SESSION['level']="admin"){
    echo "<strong><center>Data Gagal Disimpan";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=viewkonten">';
        }
    else if($_SESSION['level']="user"){
    echo "<strong><center>Data Gagal Disimpan";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">';
    }
}
?>


