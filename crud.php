<?php session_start();
if(isset($_SESSION['LoggedIN'])) {

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        Add edit Delete questions
    </title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/loader.css">
</head>

<body>
    <div class="loader">
        <div class="spiner"></div>
    </div>

    <div class="menu-btn">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="menu">
        <div id="menu-wrap">
            <nav>
                <ul>
                    <li><a href="index.php">START</a></li>
                    <li><a href="quiz.php">QUIZ</a></li>
                    <li><a href="crud.php">DODAJ PYTANIE</a></li>
                    <br>
                    <li><a href="login.php">LOGOWANIE</a></li>
                    <li><a href="register.php">REJESTRACJA</a></li>
                    <li><a href="quiz.php">KONTAKT</a></li>
                </ul>
            </nav>
        </div>

    </div>

    <div class="container-fluid" id="margin">
        <div class="row">
            <div class="col-md-12  ">
                <div class="wrap">
                    <h1>Dodaj pytanie</h1>
                    <div id="show_data">


                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous">


    </script>
    <script src="js/add.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/loader.js"></script>


</body>

</html>
<?php
}
else{
    header("Location:login.php");
}
?>
