<?php include 'includes/header.php'; ?>
<php 
<h1>GET | POST</h1>

<h2>IMPORTANT:  
SECURITY PRECAUTIONS</h2>
<p>When hacker can submit user data,
called cross-site scripting or XSS attacks

hacker inputs crazy script to mess up application
<strong>To prevent this, add htmlentities function.</strong>
Takes the power out of the html tags/brackets.</p>


<ul>GET-POST RULES:
    <li>Make sure the form method in the HTML is set to either GET or POST</li>
    <li>$name attribute is very important, used to access data from the server/li>
    <li>A simple HTML form works great. Div with label & input.</li>
    <li>To process the form, needs GET/POST method and an action (the page we are submitting to)</li>
</ul>

<ul>FORMATTING:
    <li>GET:
    <br/>if(isset($_GET['name'])){
    <br/>    print_r($_GET);
    <br/>echo htmlentities($_GET['name']);
    <br/>BETTER AS:
    <br/>$name = htmlentities($_GET['name']);
    <br/>echo $name;
    <br/>}
    </li>
    <li>POST:
    <br/>if(isset($_POST['name'])){
        <br/>print_r($_POST);
    <br/>echo htmlentities($_GET['name']);
    <br/>BETTER AS: 
    <br/>$name = htmlentities($_POST['name']);
    <br/>echo $name;
    <br/>}
    </li>
    <li>REQUEST:
<br/>   <form> method to POST or GET both work</form>
<br/>     if(isset($_REQUEST['name'])){
<br/>     print_r($_REQUEST);
<br/>     echo htmlentities($_GET['name']);
<br/>     BETTER AS:
<br/>     $name = htmlentities($_REQUEST['name']);
<br/>     echo $name;
<br/>     }
    </li>
    <li>SERVER:
        <ul>
            <li>QUERY STRING VALUE:
            <br/> echo $_SERVER['QUERY_STRING'];
            </li>
            <li>QUERY STRING IN URL: use a tag 
            <br/> To show profiles
            <br/> "\a href="get_post.php?name="Lori">Lori \a"
        </ul>
    </li>
</ul>

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
        echo htmlentities($_GET['name']);
        // better as:
        $name = htmlentities($_POST['name']);
        echo $name;
        }

        //  <form> method to POST or GET both work</form>
    if(isset($_REQUEST['name'])){
        print_r($_REQUEST);
    echo htmlentities($_GET['name']);
    // better as:
    $name = htmlentities($_REQUEST['name']);
    echo $name;
    }

    echo $_SERVER['QUERY_STRING'];
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
<h1>THE FORM:</h1>

    <form method="POST" action="get_post.php">
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

   <p>ERROR HAPPENS THE FIRST TIME BECAUSE NOTHING HAS BEEN SUBMITTED AS YET.</p>
    <h2>CHECK THE HTML SOURCE CODE FOR THE FORM.<br/>
</body>
</html>

<?php include 'includes/footer.php'; ?>