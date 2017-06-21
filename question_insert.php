<?php
session_start();
include"connect.php";

if(isset($_SESSION['email'])) {

  $tresc = $_POST['tresc'];
  $odp1 = $_POST['odp1'];
  $odp2 = $_POST['odp2'];
  $odp3 = $_POST['odp3'];
  $odp4 = $_POST['odp4'];
  $poprawna = $_POST['poprawna'];
  $user_email = $_SESSION['email'];

   $sql = "INSERT INTO pytania(tresc, odp1, odp2, odp3, odp4, poprawna, user_email, kat_id) VALUES('$tresc', '$odp1', '$odp2', '$odp3', '$odp4', '$poprawna' , '".$_SESSION["email"]."','1')";
 if(mysqli_query($conn, $sql))
 {

 echo 'Record Inserted Successfully!';

 }
 else{
   die($sql);
 }



}
else{
    echo "Musisz być  zalogowany";
    header("Location:login.php");
}


 ?>
