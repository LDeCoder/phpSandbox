
<?php
//set variable
    $loggedIn = true;
    $arr = [1, 6, 8, 2, 6, 4, 3];
//if statement:
    if($loggedIn) {
        echo 'You are logged in.';
    }else {
        echo 'You are NOT logged in';
    }

    
    // SAVE SEVERAL LINES OF CODE = SAME IF:
    echo ($loggedIn) ? 'Yep, you are logged in' : 'NOPE! You are NOT logged in.';



    // Assigned variables = only true if another condition is true

    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;

    // nested statements

    $age = 20;
    $score = 5;

    echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional!'):($age > 10 ? 'Horrible' : 'Average'));



    // Alternative syntax for conditionals, loops, etc.  Used to embed statements inside HTML



?>

// REGULAR WAY - open and close with lots of php tags:
    <!-- <div>
    <?php if($loggedIn) {?>
        <h1>Welcome user!</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
    </div>


    <div>
        <?php if($loggedIn): ?>
            <h1>Welcome User</h1>
    <?php else: ?>
            <h1>Welcome Guest</h1>
    <?php endif; ?>    
    </div> -->


    <!-- LOOPS -->
    <div>

        <?php foreach($arr as $val): ?>
            <?php echo $val; ?>
    <?php endforeach; ?>

</div>

<div>
<?php for($i = 0; $i <= 10; $i++): ?>
    <li><?php echo $i; ?></li>
<?php endfor; ?>
</div>
