<?php
if(!isset($_POST['id'])) {
  header("Location:crud.php");
  exit();
}
include("connect.php");
$conn = mysqli_connect($servername, $username, $password, $db_name);


 $id = $_POST["id"];
 $text = $_POST["text"];
 $column_name = $_POST["column_name"];
 $sql = "UPDATE pytania SET ".$column_name."='".$text."' WHERE id='".$id."'";
 if(mysqli_query($conn, $sql))
 {
 echo 'Data Updated';
 }
 ?>
