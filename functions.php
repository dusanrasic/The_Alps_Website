<?php
include('connect.inc');

  if(!isset($_SESSION['idU']) || $_SESSION['uloga'] != 'admin')
  {
    header('Location:index.php');
  }

 if(isset($_REQUEST['btnDelete'])){
   $id = $_POST['inpText'];
   $user_delete = "DELETE  FROM users WHERE id_user=".$id;
   $user_function_delete = "DELETE  FROM user_function WHERE id_user=".$id;
   mysqli_query($konekcija ,$user_delete);
   mysqli_query($konekcija ,$user_function_delete);
   header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
 }
 if(isset($_REQUEST['btnAdd'])){
   $user_name= $_REQUEST['nickname'];
   $email=$_REQUEST['email'];
   $password=md5($_REQUEST['password']);

   $insert_query="INSERT INTO users  VALUES ('','$user_name','$password','$email')";
   $function_query="SELECT * FROM users WHERE id_user=(SELECT MAX(id_user) FROM users)";
   mysqli_query($konekcija, $insert_query);
   $rez=mysqli_query($konekcija,$function_query);

   while ($r = mysqli_fetch_array($rez)) {
       $pos_id=$r['id_user'];
   }
   $uf_query="INSERT INTO user_function VALUE ('','$pos_id', 2)";
   mysqli_query($konekcija, $uf_query);
   header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
    }
  if(isset($_REQUEST['btnUpdateNavigation'])){
  /*  $name=$_REQUEST['nav_name'];
    $id=$_REQUEST['nav_id'];
    $update_navigation="UPDATE navigation SET navID='$id' , navName='$name' WHERE 'navID'='$id' ";*/
    $name=$_REQUEST['nav'];
    $update_navigation="INSERT INTO navigation VALUES ('', '$name')";
    mysqli_query($konekcija , $update_navigation);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  if(isset($_REQUEST['btnUpdateGallery'])){
    $gal_name=$_REQUEST['galName'];
    $location=$_REQUEST['galLoc'];
    $update_gallery="INSERT INTO gallery VALUES ('','$gal_name','$location')";
    mysqli_query($konekcija,$update_gallery);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
  }
  if(isset($_REQUEST['btnDeleteGallery'])){
    $gal_id=$_REQUEST['gal_id'];
    $delete_query="DELETE FROM gallery WHERE galID=".$gal_id;
    mysqli_query($konekcija,$delete_query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  if(isset($_REQUEST['btnDeleteComment'])){
    $com_id=$_REQUEST['comID'];
    $delete="DELETE FROM comments WHERE commentID=".$com_id;
    mysqli_query($konekcija,$delete);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  if(isset($_REQUEST['userUpdate'])){
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $pasword=$_REQUEST['pasword'];
    $mail=$_REQUEST['mail'];
    $update="UPDATE users SET user_name='$name',password='$pasword',mail='$mail' WHERE id_user=".$id;
    mysqli_query($konekcija,$update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  if(isset($_REQUEST['btnUpdateAbout'])){
    $id=$_REQUEST['id'];
    $text=$_REQUEST['text'];
    $fb=$_REQUEST['fb'];
    $insta=$_REQUEST['insta'];
    $plus=$_REQUEST['gplus'];
    $out=$_REQUEST['out'];
    $update="UPDATE aboutme SET aboutText='$text',aboutFB='$fb',aboutG='$plus',aboutInsta='$insta',aboutOut='$out' WHERE aboutID=".$id;
    mysqli_query($konekcija,$update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  if(isset($_REQUEST['btnUpdateHistory'])){
    $id=$_REQUEST['id'];
    $prvi=$_REQUEST['prvi'];
    $drugi=$_REQUEST['drugi'];
    $treci=$_REQUEST['treci'];
    $naslov=$_REQUEST['naslov'];
    $update="UPDATE history SET hi_prvi='$prvi',hi_drugi='$drugi',hi_treci='$treci',hi_naslov='$naslov' WHERE hi_id=".$id;
    mysqli_query($konekcija,$update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  if(isset($_REQUEST['btnUpdateFacts'])){
    $id=$_REQUEST['id'];
    $prvi=$_REQUEST['prvi'];
    $drugi=$_REQUEST['drugi'];
    $treci=$_REQUEST['treci'];
    $prva=$_REQUEST['prva'];
    $druga=$_REQUEST['druga'];
    $treca=$_REQUEST['treca'];
    $update="UPDATE facts SET row_jedan='$prva',row_dva='$druga',row_tri='$treca',row_jedan_naslov='$prvi',row_dva_naslov='$drugi',row_tri_naslov='$treci' WHERE fact_id=".$id;
    mysqli_query($konekcija,$update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
 ?>
