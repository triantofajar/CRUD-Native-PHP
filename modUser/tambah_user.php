<?php
	
include '../config/koneksi.php';


$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama_lengkap'];

$input="INSERT INTO user(id,username,password,nama_lengkap)values('','$username','$password','$nama')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda berhasil mendaftar";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=home">'; 
}

?>


