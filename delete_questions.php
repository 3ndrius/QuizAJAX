<?php
session_start();


if(isset($_SESSION['LoggedIN'])) {
  
  include("connect.php");
  $conn = mysqli_connect($servername, $username, $password, $db_name);
  $limit = $_POST['limit'];

    $sql = "DELETE FROM pytania WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($conn, $sql))
 {
 echo 'Data Deleted Successufully!';
 }
}

 ?>
