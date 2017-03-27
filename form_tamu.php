
    <h2>Buku Tamu</h2>
       <form action="bukutamu.php" method="POST" id="commentform">
        <p>
          <label for="name">Nama</label>
          <br />
          <input id="name" name="nama" type="text" tabindex="1" />
        </p>
        <p>
          <label for="email">Email</label>
          <br />
          <input id="email" name="email"  type="text" tabindex="2" />
        </p>
        <p>
          <label for="message">Komentar</label>
          <br />
          <textarea id="message" name="komentar" rows="10" cols="20" tabindex="4"></textarea>
        </p>
        <p class="no-border">
          <input class="button" type="submit" name="submit"value="Submit" tabindex="5" />
        </p>
      </form>
      

    

   <?php include 'Komentar.php' ?>
        