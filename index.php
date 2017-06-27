<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        Quiz Ajax
    </title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/index.css">
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


    <div class="container pading-top ">
        <div class="container pading-top"></div>


        <div class="row margin-top">
            <div class="col-lg-4 col-md-6 col-sm-12" id=col-1>
                <h2 class="text-center"><i class="fa fa-home fa-2x" aria-hidden="true"></i></h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur unde aliquid ipsum tempora numquam qui neque quidem cum cupiditate? Dolores?
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" id=col-2>
                <h2 class="text-center">
                    <i class="fa fa-database fa-2x" aria-hidden="true"></i>
                </h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur unde aliquid ipsum tempora numquam qui neque quidem cum cupiditate? Dolores?
            </div>
            <a href="quiz_user.php">
                <div class="col-lg-4 col-md-6 col-sm-12 " id=col-3>
                    <h2 class="text-center"><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i></h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur unde aliquid ipsum tempora numquam qui neque quidem cum cupiditate? Dolores?
                </div>
            </a>
            <?php
                        if(isset($_SESSION['LoggedIN'])){

                       echo '<div class="col-lg-4 col-md-6 col-sm-12" id="col-4"><h2 class="text-center"><i class="fa fa-user fa-2x" id="icon-4" aria-hidden="true"></i></h2><p class="text-center">';

                         echo "Witaj ".strtoupper($_SESSION['name']) ;
                        echo '</div> </p>';
                        }
                           else{


                        echo '<div class="col-lg-4 col-md-6 col-sm-12" id="col-44"> <h2 class="text-center"><i class="fa fa-user fa-2x" aria-hidden="true"></i></h2><p class="text-center">Nie zalogowany</p></div>';

                          }
                        ?>

                <a href="logout.php">
                    <div class="col-lg-4 col-md-6 col-sm-12" id=col-5>
                        <h2 class="text-center"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur unde aliquid ipsum tempora numquam qui neque quidem cum cupiditate? Dolores?
                    </div>
                </a>
                <div class="col-lg-4 col-md-6 col-sm-12" id=col-6>
                    <h2 class="text-center">
                        <i class="fa fa-envelope-open fa-2x" aria-hidden="true"></i>
                    </h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur unde aliquid ipsum tempora numquam qui neque quidem cum cupiditate? Dolores?
                </div>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous">


    </script>
    <script src="js/menu.js"></script>
    <script src="js/loader.js"></script>
</body>

</html>
