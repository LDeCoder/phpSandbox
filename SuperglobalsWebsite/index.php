<?php include 'server-info.php'; ?>
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
    <div class="container">
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

    </div>
</body>
</html>