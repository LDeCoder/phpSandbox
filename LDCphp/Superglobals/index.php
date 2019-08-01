
<?php include 'server_info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Info</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
</head>
<body>
<h1> ^ Server info printed as include ^</h1>
<br/>
<br/>
<h1>$_SERVER['PHP_SELF'];  <-- returns THE CURRENT PAGE.</h1>
    <p>Use as an include or within a form as the action.</p>
    <p>Also a neater way to document, then if the file name gets changed, the page still loads, nothing breaks</p>
<br/>


<h1>SUPERGLOBALS INFO AND SYNTAX:</h1>
    <ul>SERVER:
        <li>Always starts with '$' and is an array</li>
        <li>Associative array with key and value.</li>
            <ul>
                <li>$server = [
                        <br/>'Host Server Name' => $_SERVER['SERVER_NAME'],
                        <br/>'Host Header' => $_SERVER['HTTP_HOST'],
                        <br/>'Server Software' => $_SERVER['SERVER_SOFTWARE'],
                        <br/>'Document Root' => $_SERVER['DOCUMENT_ROOT'],
                        <br/>'Current Page' => $_SERVER['PHP_SELF'],
                        <br/>'Script Name' => $_SERVER['SCRIPT_NAME'],
                        <br/>'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
                    <br/>];
                    </li>
                <li>HTML MARKUP WITH STYLES:
                        <br/><>?php if($server): ?>
                            <br/><>ul class="list-group">
                                <br/><>?php foreach($server as $key => $value): ?>
                                    <br/><>li class="list-group-item">
                                        <br/><>strong><>?php echo $key; ?>; <>/strong>
                                        <br/><>?php echo $value; ?>
                                    <br/><>/li>
                                <br/><>/ul>
                        <br/><>?php endif; ?>
                
                
                </li>
            </ul>
    </ul>                    
   
    <ul>CLIENT:
            <ul>
                <li>$client = [
                    <br/>'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
                    <br/>'Client IP' => $_SERVER['REMOTE_ADDR'],
                    <br/>'Remote Port' => $_SERVER['REMOTE_PORT']
                <br/>];
                </li>
                <li>HTML MARKUP WITH STYLES:
                    <br/><>?php if($client): ?>
                        <br/><>ul class="list-group">
                            <br/><>li class="list-group-item">
                                    <br/><>strong><>?php echo $key; ?>; <>/strong>
                                    <br/><>?php echo $value; ?>
                            <br/><>/li>
                            <br/><>?php endforeach; ?>
                        <br/><>/ul>
                    <br/><>?php endif; ?>
                </li>
            </ul>
        </ul>

    <div class="container">
    <h1>________________________________________________________</h1>

    <h1>SERVER AND FILE INFO:</h1>
    <!-- PHP SHORTHAND -->
    <?php if($server): ?>
        <ul class="list-group">
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key; ?>; </strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <h1>________________________________________________________</h1>

    <h1>CLIENT INFO:</h1>
    <!-- PHP SHORTHAND -->
    <?php if($client): ?>
        <ul class="list-group">
            <?php foreach($client as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key; ?>; </strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <h1>________________________________________________________</h1>
    </div>
    
</body>
</html>