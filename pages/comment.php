<?php
  include ('./connect.inc');

  if (isset($_REQUEST['btnComment'])) {
    $txt=mysqli_real_escape_string($konekcija, $_POST['txtarea']);
    $user=$_SESSION['korIme'];
    $time=date("Y-m-d H:i:s");
    $sql = "INSERT INTO comments  VALUES ( '', '$txt', '$time', '$user' )";

    $rez_upis = mysqli_query($konekcija, $sql);

    if(!$rez_upis)
    {
      $greske[] = "Greska prilikom upisa";
    }
    else {
      header('Location: ./index.php');
    }
  }
    ?>
