  <?php 

  $isi_more = substr($isi,0,500); 
  include 'config/koneksi.php';

    $tampil="SELECT * FROM konten ORDER BY id_konten";
    $hasil=mysqli_query($konek,$tampil)or die(mysqli_error($konek));
    

    while ($data=mysqli_fetch_array($hasil)) { ?>

    <h2><?php echo $data['judul']; ?></h2>
    <p class="post-info">Kategori : <?php echo $data['kategori']; ?> 
      
    <p><?php echo $data['isi']; ?> </p>
      
      <p class="post-footer">
      <?php echo'<a href=index.php?page=readmore&&id='.$data['id_konten'].' class="readmore">';?>Baca Selengkapnya</a> | 
      <span class="date"><?php echo $data['tanggal']; ?></span> |
      <?php echo'<a href=report.php?id='.$data['id_konten'].' class="print">';?> Cetak PDF </a></p>
      <?php } ?>

      
