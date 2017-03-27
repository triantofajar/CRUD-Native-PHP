<?php
include '..config/koneksi.php';

$user=$_GET['user'];
$edit="SELECT * FROM user WHERE username='$user'";
$data=mysqli_fetch_array($edit);
$hasil=mysqli_query($konek,"SELECT username,nama_lengkap FROM user WHERE id='$_GET[username]'")or die(mysqli_error($konek));
$data_edit=mysqli_fetch_array($hasil);
?>

 <h3>Menu User</h3>
      <ul class="sidemenu">
       <li><?php echo '<a href=index.php?page=edituser2&&user='.$_SESSION['username'].'>Edit User</a>';?></li>
        </ul>
<h3>Kelola Konten</h3>
<?php include 'modKonten/menu_konten1.php'; ?>