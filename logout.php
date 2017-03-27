<?php

session_start();
$out=session_destroy();
if($out)
{
	echo "<strong><center>Anda sudah Keluar";

}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=index.php?page=home">
