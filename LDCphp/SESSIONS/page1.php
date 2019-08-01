<?
    if(isset($_POST['submit'])){
       //test that it works
        // echo 1234;

        session_start(); //Start the session(required 
        // on each page session variables will be used.)
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name" placeholder="Enter Name">
    <input type="text" name="email" placeholder="Enter Email">
    <input type="submit" name="submit" value="SUBMIT">

<h1>___________________________________________________________</h1>
<h1>GOOD TO KNOW</h1>
    <ul>
        <li>to see what is in the session - simply print_r(Pg3)</li>
        <li>you can unset with SESSION_UNSET - this removes the value (PG4)</li>
        <li>you can stop the session with SESSION_DESTROY (PG4)</li>
        <li>Be sure to include SESSIONS at the top of any page you want to use the variables on(PG1,2,3,4(</li>
        <li>if you forget to START THE SESSION, an error message will appear(PG3)</li>
        <li>Any changes made update across all pages</li>
        <li>unlike cookies(where the data is stored on the client-side browser), sessions are stored on the server</li>
        <li>Sessions are more secure than cookies.</li>
    </ul>
</body>
</html>


