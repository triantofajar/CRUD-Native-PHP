<?php  
session_start();

include "config/koneksi.php";

$session= session_id();
$ip_address=$_SERVER['REMOTE_ADDR'];
$tanggal=date("Y-m-d h:m:s");
$tanggal_saja=date("Y-m-d") . "%";

$hari=date("d") . "%";
$hits=1;
$online=1;
$online=time();


$sql="SELECT * from counter where tanggal='$tanggal_saja' 
                           and ip_address='$ip_address'";
$query=mysqli_query($konek,$sql);	   
$row=mysqli_fetch_array($query);
$time_online=$row['time_online'];

if($row and $time_online>=$online-50)
{
$sql1="UPDATE counter set hits=hits-1,time_online='$online' 
  where tanggal ='$tanggal_saja' and ip_address='$ip_address'";
$query=mysqli_query($konek,$sql1)or die(mysqli_error($konek));	
}
else
{
$sql2="INSERT into counter(session,tanggal,ip_address,hits,time_online) 
       values('$session','$tanggal','$ip_address','$hits','$online')";
$query=mysqli_query($konek,$sql2)or die(mysqli_error($konek));	   
}

$jlh_hari=mysqli_num_rows(mysqli_query ($konek,"SELECT * FROM counter WHERE tanggal GROUP BY session LIKE '".date("d") ."%'"));
$jlh_bulan=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  tanggal GROUP BY session LIKE '".date("Y-m")."%'"));
$jlh_tahun=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  tanggal GROUP BY session LIKE '".date("Y")."%'"));

$hari=date("d") . "%";
$ambil="SELECT COUNT(tanggal) as hari FROM counter  GROUP BY ip_address LIKE '$hari'";
$qw=mysqli_query($konek,$ambil);
$re=mysqli_num_rows($qw);
$data=mysqli_fetch_array($qw);
$tot=$data['hari'];



$sun=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  tanggal GROUP BY session"));







$sql3="SELECT count(hits) as jumlah FROM counter GROUP BY ip_address";
$query1=mysqli_query($konek,$sql3)or die (mysqli_error($konek));
$row=mysqli_fetch_array($query1);
$total=$row['jumlah'];


$bataswaktu= time()-300;
$time_online=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM counter WHERE  time_online > '$bataswaktu' GROUP BY session"));


?>