<!-- //////////FUNCTIONS///////
Block of code that 
can be repeatedly called

FORMATTING:
*   *most common* CamelCase - myFunction
*   Lower case with underscore: my_function
*   *classes* Pascal Case - MyFunction (starts with a capital)
 -->
<?php

echo "FUNCTIONS:  ", '<br>';
// create simple function:
//  function simpleFunction(){
//     echo 'Hello world!';
//  }

//  Run simple function
//  simpleFunction();

//  function with parameter
// function sayHello($name){
//     echo "Hello $name<br>";
// }

// sayHello('Joe');
// sayHello('Bobby');
// // error because no parameter included
// sayHello();

// lists YOU as default for name parameter
// function sayHello($name = 'YOU!'){
//     echo "Hello $name<br>";
// }

// sayHello();
// // parameter overrides default
// sayHello('ME!');

// // returning values for functions:
//     function addNumbers($num1, $num2){
//         // echo $num1 + $num2;
//         // can use return as well
//         return $num1 + $num2;
//         // if using return, echo the function
//         // to get it to print out on the screen.

//     }

//   echo addNumbers(3,3);


//   passing arguments by Reference
// normally passes in by value, but 
// passing in by reference this time. 
$myNum = 10;

function addFive(&$num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);
echo "add five Value: $myNum<br>";

addTen($myNum);
echo "then add ten Value: $myNum<br>";

 ?>



 