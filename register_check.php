<?php
session_start();

if(isset($_POST['email'])) {
  //successfully
  $check_OK = true;

//check name
  $name = $_POST['name'];

  if(strlen($name)<3 || strlen($name) >25 ) {
    $check_OK = false;
    $_SESSION['error_name'] = " Nick musi posiadać od 3 do 25 znaków !";
    header("Location:register.php");
  }
   if( !preg_match('/^[A-Za-z][A-Za-z0-9]{3,25}$/', $name)) {
    $check_OK = false;
    $_SESSION['error_name'] = "Pole name może składać sie tylko z liter i cyfr (bez PL znaków) !";

  }
//check email

  $email = $_POST['email'];
  $validated_email = filter_var($email, FILTER_SANITIZE_EMAIL);
  if(!(filter_var($validated_email, FILTER_VALIDATE_EMAIL))|| ($validated_email!=$email)) {
    $check_OK = false;
    $_SESSION['email_error'] = "Nierpoprawny adres email";

  }
//check password

  $pwd = $_POST['password'];
  $repeat_pwd = $_POST['repeat_password'];

  if(strlen($pwd) <5 || strlen($pwd) >30) {
    $check_OK = false;
    $_SESSION['password_error'] = "Hasło musi posiadać od 6 do 30 znaków !";

  }
  else if($pwd != $repeat_pwd) {
    $check_OK = false;
    $_SESSION['password_error'] = "Hasła nie są identyczne";

  }
  //hash password
  $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);

// check re_captacha

  $secret_captcha = "6LdRUyYUAAAAAOcpWtLbjkFfztHq0GlbFr7uJSXp";
  $check_captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_captcha.'&response='.$_POST['g-recaptcha-response']);
  $google_response = json_decode($check_captcha);

  if($google_response->success == false) {
    $check_OK = false;
    $_SESSION['cap_error'] = "Potwierdz że nie jesteś robotem!";

  }
  require_once"connect.php";
  mysqli_report(MYSQLI_REPORT_STRICT);

  try {

    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_errno!=0) {

      throw new Exception(mysqli_connect_errno());

    }
    else {
      // get email form database
      $databaseEmail= $conn->query("SELECT id FROM users where email='$email'");

      if(!$databaseEmail) throw new Exception($conn->error);

      $howMuchMail = $databaseEmail->num_rows;

      if($howMuchMail > 0) {
        $check_OK = false;
        $_SESSION['email_error'] = "Podany email znajduje się już w bazie!";
      }

      if($check_OK == true){
        if($conn->query("INSERT INTO users (name, email, password ) VALUES ('$name', '$email', '$pwd_hash')")) {
            $_SESSION['registerSuccess'] = "Udało Ci się założyć konto!  Możesz się teraz zalogować!";
            header("Location:login.php");
        }


        exit();
      }
      else {
          header("Location:register.php");
      }

      $conn->close();
    }


  } catch(Exception $e) {

      $_SESSION['er'] = "Wystąpił nieoczekiwany błąd! Spróbuj później!";
      $_SESSION['dev_error'] = $e;
  }

}
