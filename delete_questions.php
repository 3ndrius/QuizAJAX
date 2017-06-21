<?php 
session_start();
include"connect.php";

if(isset($_SESSION['email'])) {
    
    $sql = "DELETE FROM pytania WHERE id = '".$_POST["id"]."'"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Data Deleted Successufully!'; 
 }  
}

 ?> 