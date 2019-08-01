<?php 
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        //1 hour

        header('Location: page2.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cookies</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        <input type="text" name="username" placeholder="
        Enter Username">
        <br>
        <input type="submit" name="submit" value="Submit
        "> 
    </form>

    <h1>COOKIES = GOOD TO KNOW:</h1>
        <ul>
            <li>Data is stored on the client-side browser.</li>
            <li>Can have an expiration date set, which can be after the browser is closed - should consider persisting data to database if that is the desired option.</li>
            <li>View cookies and the data about them in Chrome Dev Tools => Application => Cookies</li>
            <li>Set them to expire, change/edit them, delete them</li>
        
        
        </ul>

</body>
</html>