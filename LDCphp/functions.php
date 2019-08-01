<?php include 'includes/header.php'; ?>
    <h1>FUNCTIONS:</h1>
        <p>A block of code that can be repeatedly called.</p>
    <ul>FORMATTING:
        <li>*most common* CamelCase - myFunction</LI>
        <li>Lower case with underscore: my_function</li>
        <li>*classes* Pascal Case - MyFunction (starts with a capital)</li>
    </ul>

    <ul>
        <li>SIMPLE FUNCTION:
            <ul><li>function simpleFunction(){<br/>
            echo 'Hello World!'<br/>}<br/>run the function:  echo simpleFunction <br/>//Hello World!</li></ul></li>
    
    </ul>
    <ul>
        <li>FUNCTION WITH PARAMETER:
            <ul><li>function sayHello($name){<br/>
                echo "Hello $name<br>";<br/>}<br/>
                    <ul>run the function:  
                        <li>sayHello('Joe'); <br/>//Hello Joe!</li> 
                        <li>sayHello('Fred'); <br/>//Hello Fred!</li>
                        <li>sayHello(); <br/>//ERROR message! No parameter included</li>

                    </ul>
                <li>ADD DEFAULT VALUE:</li>
                    <li>function sayHello($name = 'YOU!'){<br/>
                    echo "Hello $name";<br/>}<br/>
                        <ul>NOW run the function with NO parameter:  
                            <li>sayHello(); <br/>//Hello YOU!  It will now print the default value.</li> 
                            <li>sayHello('ME!'); <br/>//Hello ME! Parameter passed in will override default value.</li>
                        </ul>

                <li>RETURN A VALUE:</li>
                    <li>function addNumbers($num1, $num2){
                        <br/>echo $num1 + $num2;         
                        <br/>can use return as well
                        <br/>return $num1 + $num2;
                            <br/>**if using return, echo the function to get it to print out on the screen.**
                            <br/>}
                        <br/> Run the function: echo addNumbers(3,3); 
                        <br/>//6
                    </li>

                <li>PASSING ARGUMENTS BY REFERENCE(instead of by value):</li>
                    <li>$myNum = 10; <br/>
                    function addFive(&$num){
                        <br/>$num += 5;
                    <br/>}
<br/>
                    <br/>function addTen(&$num){
                    <br/>    $num += 10;
                    <br/>}
<br/>
                    <br/>addFive($myNum);
                    <br/>    echo "add five Value: $myNum"; <br/> add five Value: 15
<br/>
                    <br/>addTen($myNum);
                    <br/>    echo "then add ten Value: $myNum"; <br/> add ten Value: 25 (stores previous value(10) as new value(15) then adds 10)
<br/>
                    </li>
            </ul>  
    </ul>              

                
<?php include 'includes/footer.php'; ?>

