<?php
include '../config/koneksi.php';

  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{?>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<h2>Form User</h2>
      <form id="login" action="modUser/tambah_user.php" method="POST">
        <table>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
          </tr> 
           <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
          </tr>
         
            <td colspan ="3" align="center">
            <input class="button" type="submit" value="Sign" />
            </td>
          </tr>
        </table>  
      </form>
<?php } ?>      