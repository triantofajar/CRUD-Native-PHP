<?php


include "hit_counter.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id_index = session_id();
$id_login=$_SESSION['id'];

$usernamedb = $_SESSION['username'];
$level      = $_SESSION['level'];


$isi_more = substr($isi,0,500); 
$page = $_GET['page'];

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Websiteku</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="header">
    
    <?php include 'header.php' ?>
    </div>
  
  <div  id="nav">
  <?php 
  if($id_login){
  include 'menulogin.php';
  }
  elseif($id_index){
     include 'menu.php';
  
   } 
  ?>
      

  </div>
   <div id="run">
		<p><marquee>Selamat Datang di Halaman Websiteku. Website ini dibuat sebagai syarat tugas akhir 
    mata kuliah Pemrograman Internet</marquee></p>
  </div>
  <div id="content">
    <div id="main"> 
      
  <?php

     if($page=="tambahuser")
      include 'modUser/form_user.php';
    else if($page=="viewuser")
      include'modUser/daftar_user.php';
    else if($page=="edituser")
      include'modUser/edit_user.php';
    else if($page=="editkonten")
      include'modKonten/edit_konten.php';
     
     else if($page=="edituser2")
      include'modUser/edit_user2.php';
      else if($page=="tamu")
      include'daftar_tamu.php';
     else if($page=="formkonten")
      include'modKonten/formkonten.php';
    else if($page=="viewkonten")
      include'modKonten/daftar_konten.php';
    else if($page=="readmore")
      include 'readmore.php';
    else if($page=="katalog")
      include 'daftar_katalog.php';
             


    else if($page=="home")
      include'konten.php';
    else if($page=="contact")
      include'form_tamu.php';
    
    include 'halaman.php';

    ?>
    <h2><?php echo "$judul"; ?></h2>
    <p><?php echo "$isi"; ?></p>
    
    </div>
    <div id="sidebar">
    
    <?php    
    if($id_index != $id_login)
      include 'login.php';?>

    

      <h3>Pencarian</h3>
      <form id="qsearch" action="#" method="get" >
        <p>
          <label for="qsearch">Cari:</label>
          <input class="tbox" type="text" name="qsearch" value="Cari disini..." onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Cari disini...':this.value;" />
          <input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="images/search.gif" />
        </p>
      </form>

    <div>
   <?php if($id_login) {include 'status.php'; }?>
   </div> 


     <?php
     if($level=="admin")
      {
      include ('menu_admin.php'); 
      }
      else if($level=="user")
      {
      include ('menu_user.php');  
      }
      ?>


      <h3>Pengunjung</h3>
	  <ul class="counter">
		<li>IP Address Anda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $ip_address; ?></li> 
		<li>Pengunjung hari ini&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jlh_hari; ?> </li> 
		<li>Pengunjung bulan ini&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jlh_bulan; ?></li> 
		<li>Pengunjung tahun ini&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jlh_tahun; ?></li> 
		<li>Total Pengunjung&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $tot; ?></li> 
		<li>Pengunjung Online&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $time_online; ?></li> 
    <li>Hari Minggu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $sun; ?></li> 
    

     </ul>

     <br>
   
      
       </div>
  </div>

  <div id="footer">
    <?php include 'footer.php' ?>
  </div>

</div>
</html>
