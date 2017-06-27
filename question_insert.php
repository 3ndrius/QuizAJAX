<?php
session_start();
if(!isset($_SESSION['LoggedIN']) && !isset($_SESSION['email'])) {
  header("Location:index.php");
}
include"connect.php";
$conn = mysqli_connect($servername, $username, $password, $db_name);

  $tresc = $_POST['tresc'];
  $odp1 = $_POST['odp1'];
  $odp2 = $_POST['odp2'];
  $odp3 = $_POST['odp3'];
  $odp4 = $_POST['odp4'];
  $poprawna = $_POST['poprawna'];
  $user_email = $_SESSION['email'];
mysqli_query($conn,"SET NAMES `utf8` COLLATE `utf8_polish_ci`");
   $sql = "INSERT INTO pytania(tresc, odp1, odp2, odp3, odp4, poprawna, user_email, kat_id) VALUES('$tresc', '$odp1', '$odp2', '$odp3', '$odp4', '$poprawna' , '".$_SESSION["email"]."','1')";
 if(mysqli_query($conn, $sql))
 {

 echo 'Record Inserted Successfully!';

 }
 else{
   die($sql);
 }
 ?>
