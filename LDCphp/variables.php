<?php include 'includes/header.php'; ?>
<h3>GOOD TO KNOW:</h3>
    <ul>
        <li>ECHO: 
            <ul>
                <li>Faster but won't return a value
                <br/>    echo 'let\'s learn php!!';</li>
            </ul>
        <li>PRINT:
        <ul>
                <li>Returns a value - for expressions -print works like echho, but it is slower.
                <br/>   print 'Hi LORI!';</li>
        </ul>
    </ul>

<h1>VARIABLES:</h1>
        
 
    <ul>RULES OF VARIABLES:
        <li>prefix with $ (otherwise defaults as a constant)</li>
        <li>variable must start with letter or _ (underscore)</li>
        <li>variables cannot start with numbers!</li>
        <li>case sensitive</li>
        <li>If you name a variable and then use the same name later in your programming, it will replace the value with the most recent one, overwriting it.</li>
    </ul>

    <ul>DATA TYPES:
        <li>String - wrapped with quotes - single or double</li>$outputString = 'String in quotes: "I LOVE MY PRESIDENT!"';
        <li>Integers - numbers positive or negative</li>$outputInt = 3;
        <li>Float - decimal</li>$outputFloat = 4.44;
        <li>Boolean  - true/false</li>$outputBool =  false;
        <li>Arrays - Visit <a href='http://localhost/phpSandbox/LDCphp/arrays.php'>Arrays</a> for more information and syntax for Arrays.</li>
        <li>Object</li>
        <li>NULL - lacks a value - either none entered or none provided as default</li>
        <li>Resource - return or reference to a function.</li>
    </ul>
    <ul>EXAMPLES:
        <li>REGULAR VARIABLE:<br/>
        $output = 'Hello world correct syntax....';<br/>
            echo $output; <br/>
            // Hello world correct syntax....</li>
        <li>CASE SENSITIVE:<br/>
        $Output = 'CASE SENSITIVE - Hello world';
            <br/>echo $output;
            //ERROR because O is capital on variable, but not when called.  Won't run until case matches.
        </li>
        <li>UNDERSCORE:<br/>
        $_output = 'Underscore Hello world...works!';
        <br/>echo $_output;
            //Underscore Hello world...works! - starts with underscore        
        </li>
        <li>$3output = 'NUMBERS NOT ALLOWED!! parsing error - Hello world';
            <br/>echo $3output;
        <br/>ERROR - cannot start with a number</li>
        <li>ESCAPE SEQUENCES:</li>
            <ul>
                <li>Double Quotes:  works fine with contractions<br>
                //$string4 = "they're here"</li>
                <li>Single Quotes: requires a \ to override it thinking the string ends there.<br/>
                //$string5 = 'they\'re here'</li>
            </ul>
        <li>CALLING VARIABLES:
            <ul> Name Variables:

            <br/>$outputString = 'String in quotes: "I LOVE MY PRESIDENT!"';
            <br/>$outputInt = 3;
            <br/>$outputFloat = 4.44;
            <br/>$outputBool =  false;
            <br/>$outputBool =  true;
            <br/>$outputBool2 = false;
            <br/>$num1 = 11;
            <br/>$num2 = 44;
            <br/>$sum = $num1 + $num2;
            <br/>$mult = $num1 * $num2;

            <br/>$string1 = 'Jesus';
            <br/>$string2 = 'Loves';
            <br/>$string3 = 'ME!';

            <br/>$declaration = $string1 . " " . $string2 . " " . $string3 . "!!!!!";
            <br/>$declaration2 = 'string1 $string2 string3';
            <br/>$declaration3 = "$string1 $string2  $string3";
            </ul>
            <ul>Print Variables:,<br/>
            echo 
            <br>$outputString //String in quotes: "I LOVE MY PRESIDENT!"
            <br/>Int: ", $outputInt; // Int: 3
            <br/>Float: ", $outputFloat; //Float: 4.44
            <br/>Bool - true: ", $outputBool; //Bool - true: 1
            <br/>Bool - false: ", $outputBool2; //Bool - false: 
            <br/>Sum: ", $sum; //Sum: 55
            <br/>Mult: ", $mult; //Mult: 484
            <br/>Declaration: ", $declaration; //Declaration: Jesus Loves ME!!!!!!
            <br/>Declaration2 with single quotes: ", $declaration2; //Declaration2 with single quotes: string1 $string2 string3
            <br/>Declaration3 concatenate with double quotes: ", $declaration3;  //Declaration3 concatenate with double quotes: Jesus Loves ME!
            <br/>String 4 - double quotes:  ", $string4; //String 4 - double quotes: they're here
            <br/>String 5 - single quotes string with contraction ", $string5; //String 5 - single quotes string with contraction they're here
            </ul>
        </li>
        <li>PRINT ALL INFO ABOUT SPECIFIC VARIABLE: 
            <br/> var_dump($declaration3);
           <br/> // string(16) "Jesus Loves ME!"
        </li>    
    </ul>
<h1>CONSTANTS:</h1>
<ul>RULES OF CONSTANTS:
    <li>For VALUES that will never change, i.e. server name</li>
    <li>CONVENTION is all UPPERCASE</li>
    <li>case senstitive, but can add third parameter of true and it becomes case INsensitive<br/>
        EXAMPLE: define('CONSTANT NAME', 'value', true)
    </li>
 </ul>
 <h1>NEW LINE:</h1>
 <p>Use the Newline Characters ' \n ' or ' \r\n ' ,
 <br>You can use the PHP newline characters \n or \r\n 
to create a new line inside the source code. 
However, if you want the line breaks to be visible in 
the browser too, you can use the PHP  function 
which inserts HTML line breaks before all newlines 
in a string. <>br/ <>.  Obviously the line break tag, but 
I can't get it to print! hah!
</p>


<?php include 'includes/footer.php'; ?>



