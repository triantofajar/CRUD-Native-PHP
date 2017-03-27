<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include '../config/koneksi.php';

$id=$_POST['id'];
$tgl=date("Y-m-d");
$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$kategori=$_POST['kategori'];
$isi=$_POST['isi'];


$update = "UPDATE konten SET judul='$judul' ,penulis='$penulis' ,kategori='$kategori' ,isi='$isi' WHERE id_konten='$id'";
$updatekonten = mysqli_query($konek,$update)or die(mysqli_error($konek));

if ($updatekonten)
    {
    if($_SESSION['level']="admin"){
    echo "<strong><center>Data Berhasil Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=viewkonten">';
        }
    else if($_SESSION['level']="user"){
    echo "<strong><center>Data Berhasil Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">';
    }
    }
else
    {
    if($_SESSION['level']="admin"){
    echo "<strong><center>Data Gagal Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=viewkonten">';
        }
    else if($_SESSION['level']="user"){
    echo "<strong><center>Data Gagal Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">';
    }
    }
?>