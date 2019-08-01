<?php include 'includes/header.php'; ?>

<h1>SHORTHANDS | TERNARY</h1>

<h3>TERNARY: </h3>
    <ul>
        <li>set the variable:  $loggedIn = true;
            <br/>NORMAL if statement:
                <br/>if($loggedIn) {
                    <br/>echo 'You are logged in.';
                <br/>}else {
                    <br/>echo 'You are NOT logged in';
                <br/>}
        </li>
        <li>SAVE SEVERAL LINES OF CODE with a <br/>
        TERNARY IF statement:
            <br/>echo ($loggedIn) ? 'Yep, you are logged in' : 'NOPE! You are NOT logged in.';
            <br/>SYNTAX:   echo (variable) ? true : false;
        </li>
    </ul>
    <ul>
        <li>ASSIGNED VARIABLES - ($isRegistered) only true if another condition ($loggedIn) is true.
            <br/>$isRegistered = ($loggedIn == true) ? true : false;
            <br/>echo $isRegistered;
            <br/> //1 <-- 1 = true and null = false
        </li>
        <li>NESTED STATEMENT - Example is based off of a game.  <br/>If you are over 10 and your score is over 10, you are average.  <br/>If you are under 10 and your score is over 10, you are exceptional.  <br/>However, if you are over 10 and your score is under 10, your score is horrible.
            <br/>$age = 20;
            <br/>$score = 5;
            <br/>
            <br/> echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional!'):($age > 10 ? 'Horrible' : 'Average'));
        </li>
        <li>ALTERNATIVE SYNTAX USED FOR CONDITIONALS | LOOPS | ETC.  Used to embed statements inside HTML
            <br/> REGULAR WAY - open and close with lots of php tags:
                <br/><>div>
                <br/><>?php if($loggedIn) {?>
                    <br/><>h1>Welcome user!<>/h1>
                <br/><>?php } else { ?>
                    <br/><>h1>Welcome Guest<>/h1>
                <br/><>?php } ?>
                <br/><>/div>
            <br/>BETTER WAY - not so many tags:
                <br/><>div>
                <br/><>?php if($loggedIn): ?>
                <br/><>h1>Welcome User</h1>
                <br/><>?php else: ?>
                <br/><>h1>Welcome Guest</h1>
                <br/><>?php endif; ?>    
                <br/><>/div>
        </li>
        <li>LOOPS:
            <ul>
                <li>FOR-EACH:
                <br/>$arr = [1, 6, 8, 2, 6, 4, 3];
                        <br/><>div>
                        <br/><>?php foreach($arr as $val): ?>
                        <br/><>?php echo $val; ?>
                        <br/><>?php endforeach; ?>
                        <br/><>/div>
                        <br/>//
                        <br/>1 6 8 2 6 4 3
                </li>
                <li> FOR:
                <br/><div>
                        <br/><>?php for($i = 0; $i <= 10; $i++): ?>
                            <br/><>li><>?php echo $i; ?><>/li>
                        <br/><>?php endfor; ?>
                        <br/><>/div>
                        <br/>//
<br/>0
<br/>1
<br/>2
<br/>3
<br/>4
<br/>5
<br/>6
<br/>7
<br/>8
<br/>9
<br/>10
                </li>
        </ul>
    </ul>
<h1>_______________________________________________________________</h1>


   <?php 
     
     echo 'Regular if returns: ', '<br>';
  //set variable
    $loggedIn = false;
//if statement:
    if($loggedIn) {
        echo 'You are logged in.';
    }else {
        echo 'You are NOT logged in';
    }

    
    echo '<br>', 'Ternary if returns: ', '<br>';
    echo ($loggedIn) ? 'Yep, you are logged in' : 'NOPE! You are NOT logged in.';



?>

<?php include 'includes/footer.php';?>