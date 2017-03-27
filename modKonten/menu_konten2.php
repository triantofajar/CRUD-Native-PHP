  <?php
   $user=$_GET['user']; 

$tampil="SELECT * FROM user WHERE username='$user'";
$data=mysqli_fetch_array($tampil);
$hasil=mysqli_query($konek,"SELECT username FROM user WHERE id='$_GET[username]'")or die(mysqli_error($konek));

   ?>

     <ul class="sidemenu">
        <li><?php echo '<a href=index.php?page=formkonten&&user='.$_SESSION['username'].'>' ?>Tambah Konten</a></li>
         <li><?php echo '<a href="index.php?page=viewkonten">Daftar Konten</a>'?></li>
      </ul>
