<h1><?php
// <!-- echo is faster but won't return a value -->
    echo 'let\'s learn php!!';
    echo "          ";
    // <!-- Returns a value - for expressions -print works like echho, but it is slower. -->
    print 'Hi LORI!';
?></h1>

<!-- 
// ***************VARIABLES**********************
rules of variables: 
* prefix with $ (otherwise defaults as a constant)
* variable must start with letter or _ (underscore)
* variables cannot start with numbers!
* case sensitive -->
<?php
$output = 'Hello world correct syntax....';
echo $output;
// regular variable - works

// $Output = 'CASE SENSITIVE - Hello world';
// echo $output;
// // case sensitive - wont work both must be uppercase

$_output = 'Underscore Hello world...works!';
echo $_output;
// works - starts with underscore

// $3output = 'NUMBERS NOT ALLOWED!! parsing error - Hello world';
// echo $3output;
// // error - cannot start with a number
?>

<!-- DATA TYPES:
String - wrapped with quotes - single or double
Integers - numbers positive or negative
Float - decimal
Boolean  - true/false
Arrays - list
Object - 
NULL
Resource - return or reference to a function. -->



<html>
<?php
$outputString = 'String in quotes: "I LOVE MY PRESIDENT!"';
$outputInt = 3;
$outputFloat = 4.44;
$outputBool =  false;
$outputBool =  true;
$outputBool2 = false;

$num1 = 11;
$num2 = 44;
$sum = $num1 + $num2;
$mult = $num1 * $num2;

$string1 = 'Jesus';
$string2 = 'Loves';
$string3 = 'ME!';
// <!-- ESCAPE SEQUENCES: -->
// double quotes - works fine with contraction
$string4 = "they're here";
// single quotes requires a \ to override it thinking
// string ends there
$string5 = 'they\'re here';

$declaration = $string1 . " " . $string2 . " " . $string3 . "!!!!!";
$declaration2 = 'string1 $string2 string3';
$declaration3 = "$string1 $string2  $string3";


// ***************VARIABLES**********************

// // info about variable - datatype & characters
// var_dump works for ANY variable
// var_dump($declaration3);

// ***************CONSTANTS**********************
// * For VALUES that will never change, i.e. server name
// * CONVENTION is all UPPERCASE
// case senstitive, but can add third parameter of true 
    // and it becomes case INsensitive

    // define('CONSTANT NAME', 'value', true)

define('GREETING', 'hello everyone');


// ***************CONSTANTS**********************

//////////////////NEW LINE///////////////////////
// Use the Newline Characters ' \n ' or ' \r\n ' 
// You can use the PHP newline characters \n or \r\n 
// to create a new line inside the source code. 
// However, if you want the line breaks to be visible in 
// the browser too, you can use the PHP  function 
// which inserts HTML line breaks before all newlines 
// in a string.'<br>'
echo "////////////////////";

echo '<br>',"VARIABLES:",     
'<br>', $outputString,'<br>',
"      Int: ", $outputInt,'<br>',
"     Float: ", $outputFloat,'<br>',
"    Bool - true: ", $outputBool, '<br>',
"      Bool - false: ", $outputBool2, '<br>',
"     Sum: ", $sum, '<br>',
"   Mult: ", $mult, '<br>',
"   Declaration: ", $declaration, '<br>',
"   Declaration2 with single quotes: ", $declaration2, '<br>',
"   Declaration3 concatenate with double quotes: ", $declaration3, '<br>',
" String 4 - double quotes:  ", $string4, '<br>',
" String 5 - single quotes string with contraction ", $string5, '<br>',


"           CONSTANTS    
String: ", GREETING,
'<br>',"The var_dump to find out datatype and character count: ",
var_dump($declaration3);


?>

