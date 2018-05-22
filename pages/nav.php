<div id="nav">
  <ul>
    <li><a href="index.php">Home</a></li>
    <?php
    $upit = "SELECT * FROM navigation ORDER BY navID";
    $rez = mysqli_query($konekcija, $upit) or die("Greska prilikom iscitavanja navigacije!");

      while($r=mysqli_fetch_array($rez))
      {
        echo "<li><a href='index.php?category=pages&page=page{$r['navID']}'>{$r['navName']}</a></li>";
      }
      if(isset($_SESSION['idU']) && $_SESSION['uloga'] == 'admin'){

        $upit_g = "SELECT * FROM admin_panel ORDER BY adID";
        $rezultat = mysqli_query($konekcija , $upit_g) or die("Greska prilikom iscitavanja admin panela!");

        while($rezu=mysqli_fetch_array($rezultat))
        {
          echo "<li><a href='index.php?category=pages&page=page{$rezu['adID']}'>{$rezu['adName']}</a></li>";
        };}

		  if(isset($_SESSION['idU']))
				{
			?>
				<li><a href="./logout.php">Logout</a></li>
			<?php
				}
			?>

  </ul>
</div>
