<?php
////////////CONDITIONALS////////////

$num = 6;

// // as integer
// if($num == 5){
//     echo "Num passed.";
// }

// // as string
// if($num == '5'){
//     echo "Num passed.";
// }
// // as specific datatype (3 equals)
// if($num == 5){
//     echo "5 passed.";
// }
// else if($num == 6){
//     echo '6 passed.';
// }
// else {
//     echo 'Num did not pass.';
// }

/////////NESTING IF//////////

$ifNum = 5;

// if($ifNum > 4){
//     if($ifNum <10){
//         echo 'This num is between 4 and 10.';
//     }
//     else {
//         echo 'This num is too big or too small.';
//     }
// }

    // better way with logical operators:
    // LOGICAL OPERATORS:
    // and &&
    // or ||
    // exclusive or xor

    // if($ifNum > 4 AND $ifNum < 10){
    //     echo "and...$ifNum passed<br>";
    // } 
    // else {
    //    echo  "and....$ifNum DID NOT PASS<br>";
    // }

    // if($ifNum > 4 OR $ifNum < 10){
    //     echo "or....$ifNum passed<br>";
    // }
    // else {
    //    echo  "or....$ifNum DID NOT PASS<br>";
    // }

    // // exclusive or - one has to be true,
    // // BUT NOT BOTH!
    // if($ifNum > 4 XOR $ifNum < 10){
    //     echo "exclusive or....$ifNum passed<br>";
    // }
    // else {
    //     echo "exclusive or....$ifNum DID NOT PASS";
    // }


    //////////SWITCHES//////////
    // *Tests for a value, with different cases,
    // then it will do something based on those
    // cases

    $favColor = 'turquoise';

    switch($favColor){
        case 'red';
            echo 'Favorite color is RED';
            break;
        case 'blue';
            echo 'Favorite color is blue';
            break;
        case 'green';
            echo 'Favorite color is green';
            break;
        default;
            echo 'Your favorite color must be purple!';


    }


?>