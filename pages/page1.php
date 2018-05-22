<section id="first">
  <?php
  $his_query="SELECT * FROM history";
  $rez = mysqli_query($konekcija, $his_query) or die("Greska prilikom iscitavanja teksta History!");
  while($r=mysqli_fetch_array($rez)){
    echo "<h1>{$r['hi_naslov']}</h1><div class='paragraf'><p>{$r['hi_prvi']}</p></div>
              <div class='paragraf'><p>{$r['hi_drugi']}</p></div><div class='paragraf'><p>{$r['hi_treci']}</p></div>";
  }
   ?>
</section>
