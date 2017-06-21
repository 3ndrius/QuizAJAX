<?php
session_start();


if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != null && $_POST['password'] !=null) {
  $email = $_POST['email'];
$password = $_POST['password'];  
  include"connect.php";  


echo "good";

$query = "SELECT * FROM users where email='$email'and password='$password'";

$result = mysqli_query($conn, $query);
    
    
    if($result->num_rows>0) {
    while($row = $result->fetch_assoc()) {

         $mail = $row['email'];
        
         $haslo = $row['password'];
         $name = $row['name'];
        
      }

}
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['password'] = $row['password'];
    
    echo $mail;
    echo $haslo;
    if($mail == $email && $password == $haslo) {
        
        
         $_SESSION['email'] = $mail;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
         echo "<br><br> All good";
        header("Location:index.php");
    } else{
        header("Location:login.php");
    }
    
   
    
}
else{
    header("Location:login.php");
}

?>