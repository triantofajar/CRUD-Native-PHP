<?php

include "config/koneksi.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


$nama     = $_POST["nama"];
$email    = $_POST["email"];
$komentar = $_POST["komentar"];



$q1 = "INSERT INTO guest_book(nama,email,komentar)values('$nama','$email','$komentar')";
$result1 = mysqli_query($konek,$q1);


if (result1)
{

echo "<center><strong>Komentar disimpan<br>";

}
else
{echo "gagal tersimpan";

}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=index.php?page=contact">






