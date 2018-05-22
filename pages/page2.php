<section id="third">
  <div id="rows">
    <?php
    $fact_query="SELECT * FROM facts";
    $rez = mysqli_query($konekcija, $fact_query) or die("Greska prilikom iscitavanja teksta Facts!");
    while($r=mysqli_fetch_array($rez)){
      echo "<div class='row-1' id='post'><p><h2>{$r['row_jedan_naslov']}</h2></p></br><p>{$r['row_jedan']}</p></div>
                <div class='row-2' id='post'><p><h2>{$r['row_dva_naslov']}</h2></p></br><p>{$r['row_dva']}</p></div>
                  <div class='row-3' id='post'><p><h2>{$r['row_tri_naslov']}</h2></p></br><p>{$r['row_tri']}</p></div>";
                }
     ?>
  </div>
</section>
