<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
              <source src="./img/Introducing Amazon Go and the world’s most advanced shopping technology.mp4" type="video/mp4">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome!</h1>
                       <p>Are you Ready for Shopping?</p>
                       <a href="products.php" class="btn btn-danger">GO</a>
                   </div>
                   </center>
               </div>
           </div>
          
</div>
    </body>
</html>