<?php
session_start();
//
if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != null && $_POST['password'] !=null) {



include_once"connect.php";

$conn = @new mysqli($servername, $username, $password, $db_name);

if($conn->connect_errno!=0) {
  echo "Error:".$conn->connect_errno. "Opis:". $conn->connect_error;
}
else{
  $email = $_POST['email'];
  $password = $_POST['password'];

  $email = htmlentities($email, ENT_QUOTES, "UTF-8");
  // $password = htmlentities($password, ENT_QUOTES, "UTF-8");


  $sql = sprintf("SELECT * FROM users where email='%s'",mysqli_real_escape_string($conn, $email));
  if($result = $conn->query($sql)) {
      $howMuchUser = $result->num_rows;
      if($howMuchUser>0) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {

          $_SESSION['email'] = $row['email'];
          $_SESSION['name'] = $row['name'];


          $result->free();
          $_SESSION['LoggedIN'] = true;
          header("Location:index.php");
        }
        else{
          $_SESSION['loginFailed'] = "Niepoprawny login lub hasło !";
          header("Location:login.php");
        }
      }
      else{
          $_SESSION['loginFailed'] = "Niepoprawny login lub hasło !";
          header("Location:login.php");
      }
    }
    else{
        $_SESSION['loginFailed'] = "Niepoprawny login lub hasło !";
        header("Location:login.php");
    }

}




  $conn->close();

}
else{
    header("Location:login.php");
    exit();
}
