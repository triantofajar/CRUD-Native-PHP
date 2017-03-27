<?php
session_start();
$usernameform = $_POST['user'];
$passwordform = $_POST['pass'];


include'config/koneksi.php';
$sql="SELECT * FROM user WHERE username='$usernameform' 
      AND password='$passwordform' AND blokir='N'";

$query=mysqli_query($konek,$sql)or die(mysqli_error($konek));
$jlhrecord = mysqli_num_rows($query);
$data = mysqli_fetch_array($query);
$usernamedb=$data['username'];
$level=$data['level'];

if($jlhrecord > 0)
{
//login SUKSES
	mysqli_query($konek,"UPDATE user SET batas_login = 0 where username='$usernameform'");
	$_SESSION['username']=$usernamedb;
	$_SESSION['level']=$level;
	$_SESSION['id']=session_id();

echo "<strong><center>Berhasil Login";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=index.php?page=home">'; 
}


else 
{
//login GAGAL
	mysqli_query($konek,"UPDATE user SET batas_login = batas_login + 1 where username='$usernameform'");
 	$cek=mysqli_fetch_array(mysqli_query($konek,"SELECT batas_login from user where username= '$usernameform'"));
 	$hasil=$cek['batas_login'];
 	if($hasil > 2){
        mysqli_query($konek,"UPDATE user SET blokir = 'Y' where username='$usernameform'");
        echo "<strong><center>Username $usernameform Telah Di Blokir, Silahkan Hubungi Admin";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=index.php?page=home">'; 
            }
        else{
       echo "<strong><center>Username Atau Password Salah. Anda Sudah $hasil Kali Mencoba 
       		. Silahkan <a href=index.php?page=home>Login</a>";
              
              
       }
	}

?>
