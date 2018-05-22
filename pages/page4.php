<section id="second">
   <?php
   $upit = "SELECT * FROM aboutme";
   $rez = mysqli_query($konekcija, $upit) or die("Greska prilikom iscitavanja teksta AboutMe!");

   while($r=mysqli_fetch_array($rez))
   {
     echo "<div class='text'>
       <span>{$r['aboutTitle']}</span>
       <p>{$r['aboutText']} </p>
     </div>
     <div id='about_me'></div>
     <div class='linkovi'>
       <ul>
         <li><a href='{$r['aboutFB']}'><img src='{$r['aboutFB_img']}'/></a></li>
         <li><a href='{$r['aboutInsta']}'><img src='{$r['aboutInsta_img']}'/></a></li>
         <li><a href='{$r['aboutG']}'><img src='{$r['aboutG_img']}'/></a></li>
         <li><a href='{$r['aboutOut']}'><img src='{$r['aboutOut_img']}'/></a></li>
       </ul>";
   }
 ?>
</section>
