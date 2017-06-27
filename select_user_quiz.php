<?php
session_start();
if(isset($_SESSION['LoggedIN']) && isset($_POST['limit'])){
$user = $_SESSION['email'];

include("connect.php");
$conn = mysqli_connect($servername, $username, $password, $db_name);
$limit = $_POST['limit'];
//$query = "SELECT * FROM pytania order by rand() LIMIT 1";
$query = "SELECT * FROM pytania where user_email='$user' order by rand() LIMIT 1";

mysqli_query($conn,"SET NAMES `utf8` COLLATE `utf8_polish_ci`");
$result = mysqli_query($conn, $query);



    ?>

    <?php


if($result->num_rows>0) {
    while($row = $row = mysqli_fetch_array($result)) {
    ?>

      
        <h1><?php  echo $row['tresc']; ?></h1>
        <div class="odp change" id="odp1"><?php  echo $row['odp1'].'</div>'; ?>
        <div class="odp change" id="odp2"><?php  echo $row['odp2'].'</div>'; ?>
        <div class="odp change" id="odp3"><?php  echo $row['odp3'].'</div>'; ?>
        <div class="odp change" id="odp4"><?php  echo $row['odp4'].'</div>'; ?>
        <?php  echo '<div id="poprawna">'.$row['poprawna'].'</div><br>'; ?>






<?php

      }

}

}
else {
    header("Location:index.php");
}



?>
