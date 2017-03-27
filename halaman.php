<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$kat = $_GET['page'];

include 'config/koneksi.php';

    $sql="SELECT * FROM menu WHERE kategori='$kat'";
    $query=mysqli_query($konek,$sql)or die(mysqli_error($konek));
    $data=mysqli_fetch_array($query);
    $judul=$data['judul'];
    $isi=$data['isi'];

?>
