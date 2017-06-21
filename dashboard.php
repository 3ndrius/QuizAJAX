<?php
session_start();


?>
<!DOCTYPE html>
<html lang="pl">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        Dashboard
    </title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
 <div class="loader"></div>
   <div class="btn btn-info" id="menu-btn">MENU</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="wrap">
                   
                   <?php 
                    
                    echo $_SESSION['email'];
                    echo $_SESSION['name'];
                    echo $_SESSION['password'];

                    
                    ?>
                    
                </div>
            </div>
        </div> 
    </div>
    
 
 
<script
  src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="crossorigin="anonymous">
</script>   
     
</body>
</html>