<?php 
    session_start();  //comment this out to see what 
    // happens if you don't start the sessions.
    // // might be a good idea to put this inside of the includes! 
    // It needs to go at the top of any page that will use those 
    // variables included in the session

    // see what is in the session
    print_r($_SESSION);

//set a default value of Guest so that name isnt completely blank if not entered
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest *name not set*';
    //set default value for email
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not subscribed.';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <h3>Hello ____ <? echo $name; ?>  OHHHH no sessions....I have no idea what your '$name' is!!!! #facepalm?></h3>
    <a href='page4.php';>Continue to page 4</a>
</body>
</html>