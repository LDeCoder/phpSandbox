<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    //unset name
    unset($_SESSION['name']);

    // //destroy session
    // session_destroy();

   echo 'THIS IS PAGE 4.', '<br>';
   echo "Currently name is: ".$name;
   echo "Currently email is: ".$email, '<br>';
   echo "REFRESH TO LEARN MORE!";
?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
   </head>
   <body>
       <h3>This is page 4 - you can see how to UNSET a variable.  Simply refresh this page and you will see a NOTICE of an undefined index.  You can then click back through the pages and see that it unsets them on ALL pages until a new value is set on that variable.</h3>
       <a href='page3.php';>Go back to page 3</a>
       <a href='page2.php';>Go back to page 2</a>
       <a href='page1.php';>START OVER at page 1</a>
   </body>
   </html>
