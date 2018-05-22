<footer>

  <h1>The Alps</h1>
  <span id="links">
<a href="index.php">Home</a>
<a href="xml/sitemap.xml">Sitemap</a>
<a href="documentation/document.pdf">Documentation</a>
<?php
  if(!isset($_SESSION['idU'])){
 $upit_footer= "SELECT * FROM footer ORDER BY footerID";
 $rez = mysqli_query($konekcija , $upit_footer) or die("Greska prilikom iscitavanja futera!");

 while($r=mysqli_fetch_array($rez))
 {
   echo "<a href='index.php?category=pages&page=page{$r['footerID']}'>{$r['footerName']}</a>";
 }
}
else{?>

   </span>
   <div class="anketa" id="ispisanketa">
   <?php
    $anketares = "anketaglasovi.txt";
    $sadrzaj = file($anketares);

    $niz = explode(",", $sadrzaj[0]);
    $like = $niz[0];
    $dislike = $niz[1];
   ?>
     <form>
    <input type="button" name="btnLike" value="0" id="like" onclick="anketa(this.value);"/><p>(<?php echo $like?>)</p>
    <input type="button" name="btnDislike"  value="1" id="dislike" onclick="anketa(this.value);"/><p>(<?php echo $dislike?>)</p>
    </form>
  <?php  }?>
  </div>
</footer>
