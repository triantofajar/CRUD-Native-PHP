       
  <h3 id="comments">Komentar</h3>
        <?php

		include 'config/koneksi.php';

		$tampil="SELECT * FROM guest_book ORDER BY id";
		$hasil=mysqli_query($konek,$tampil)or die(mysqli_error($konek));
    

		while ($data=mysqli_fetch_array($hasil)) { ?>
 
      <ol class="commentlist">
       <li class="alt" id="comment-63"> <cite> 
       
      <img alt="" src="images/gravatar.jpg" class="avatar" height="40" width="40" />

        <p>Nama : <?php echo $data['nama'] ?></p><br />
        <p>E-Mail :<?php echo  $data['email'] ?></p>
          
          <div class=comment-text>
          <p>Komentar :<?php echo $data['komentar'] ?></p>
           </div>
        </li>
        </ol>   
           <?php
       		}

           ?>
          
        
        