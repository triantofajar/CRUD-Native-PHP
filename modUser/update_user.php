<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include '../config/koneksi.php';

$id=$_POST['id'];
$user=$_POST['username'];
$nama=$_POST['nama_lengkap'];
$passwordlama = $_POST['passwordlama'];
$passwordbaru = $_POST['passwordbaru'];
$konfirmasipassword = $_POST['konfirmasipassword'];


$cekuser = "SELECT * FROM user where username = '$user' and  nama_lengkap ='$nama' and password = '$passwordlama'";
$query = mysqli_query($konek,$cekuser)or die(mysqli_error($konek));
$count = mysqli_num_rows($query);

if ($count == 1)
$data = mysqli_fetch_array($query);

$updatepassword = "UPDATE user set password = '$passwordbaru' where username = '$id'";

$updatequery = mysqli_query($konek,$updatepassword)or die(mysqli_error($konek));

if ($updatequery)
    {
    if($data['id']&&$_SESSION['level']="admin"){
    echo "<strong><center>Data Berhasil Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=viewuser">';
        }
    else if($_SESSION['level']="user")
    echo "<strong><center>Data Berhasil Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">';
    }
else
    {
    if($_SESSION['level']="admin"){
    echo "<strong><center>Data Gagal Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=viewuser">';
        }
    else if($_SESSION['level']="user")
    echo "<strong><center>Data Gagal Diubah";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">';
    }
    
?>