<?php 
include"connect.php";

 $id = $_POST["id"]; 
 $text = $_POST["text"]; 
 $column_name = $_POST["column_name"]; 
 $sql = "UPDATE pytania SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Data Updated'; 
 } 
 ?> 