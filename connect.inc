<?php
$servername = "dusanrasic.rs";
$username = "dusanras_duki95";
$password = "d1u5s2a9n5";
$dbname = "dusanras_wsite";

// Create connection
$konekcija = mysqli_connect($servername, $username, $password, $dbname);
if(!$konekcija){
	echo "Greska prilikom konekcije! " . mysqli_error($konekcija);
}

	mysqli_set_charset($konekcija, 'utf8');
?>
