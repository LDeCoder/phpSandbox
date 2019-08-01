<!-- SECURITY PRECAUTIONS
When hacker can submit user data,
called cross-site scripting or SSS attacks

hacker inputs crazy script to mess up application
To prevent this, add htmlentities function.
Takes the power out of the html tags/brackets. -->

<?php 
// be sure to change <form> method to GET</form>
    if(isset($_GET['name'])){
        print_r($_GET);
    echo htmlentities($_GET['name']);
    // better as:
    $name = htmlentities($_GET['name']);
    echo $name;
    }

// be sure to change <form> method to POST</form>
    if(isset($_POST['name'])){
            print_r($_POST);
        // echo htmlentities($_GET['name']);
        // better as:
        $name = htmlentities($_POST['name']);
        echo $name;
        }

        //  <form> method to POST or GET both work</form>
    if(isset($_REQUEST['name'])){
        // print_r($_REQUEST);
    // echo htmlentities($_GET['name']);
    // better as:
    $name = htmlentities($_REQUEST['name']);
    echo $name;
    }

    echo $_SERVER['QUERY_STRING'];
        
?>
<!-- error happens the first time because there
hasn't been a form submitted as yet. need if IS-SET -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email:</label><br>
            <input type="text" name="email">
        </div>
            <input type="submit" value="SUBMIT"> 
    </form>
    <ul>
        <li>
            <a href='get_post.php?name=Lori'>Lori</a>
        </li>
        <li>
            <a href='get_post.php?name=Stephen'>Stephen</a>
        </li>
        <li>
            <a href='get_post.php?name=Suzie'>Suzie</a>
        </li>
    </ul>
    <!-- name value in the url -->
   <h1> <?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>