  <section id="fourth"><h1>Gallery</h1>
    <div class="gall">
        <ul class="rslides">
        <?php
        $upit = "SELECT * FROM gallery";
        $rez = mysqli_query($konekcija, $upit) or die("Greska prilikom iscitavanja slika!");

        while($r=mysqli_fetch_array($rez)){
          echo "<li><img src='{$r['galImg']}'/></li>";
        }
         ?>
       </ul>
    </div>
  </section>
