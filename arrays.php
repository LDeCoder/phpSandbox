<?php 
echo 'ARRAYS: ';


// <!-- ARRAYS:- variable that holds multiple values
// Types of arrays:
// *   Indexed - list
// *   Associative
// *   Multi-dimensional

/////////////
// INDEXED ARRAYS:  List - like people, etc.  -->
// enter with parenthesis
$people = array('Stephen', 'Lori', 'Haley');
// numbers - no quotes
$numbers = array(12, 1, 10, 5, 6, 8);
// enter with array brackets
$family = ['Mom', 'Dad', 'Nina', 'Mamaw', 'Mimi', 'Grandad'];

// echo $people[0];
// echo $numbers[4];
// echo $family[5];

// to add to an array by index:
$family[5] = 'baby Logan';
// echo $family[5];

// add to array - index unknown:
$family[] = 'Haley';
// echo $family[6];

// how many in my array?
// echo count($family);

// print array with indexes:
// print_r($family);

// // all info about array:
// var_dump works for ANY variable
// var_dump($family);

/////////////
// ASSOCIATIVE ARRAYS:
// *   Allows you to define the key and the value
// *   Any datatype.


$carload = array('Lori' => 43, 'Stephen' => 51, 'Baxter' => 14);
// add to array
$carload['Bear'] = 4;
$ids = [1 => 'Mom', 2 => 'Nina', 3 => 'Gus'];
// echo $carload['Bear'];
// echo $ids[3];
// print_r($carload);
var_dump($ids);


/////////////
// MULTI-DIMENSIONAL ARRAYS:
// *   An array within an array

// $cars = array(
//     array('Porsche', 19, 2),
//     array('BMW', 88, 4),
//     array('Corvette', 86, 10),
//     array('Camaro', 75, 3),

// );
// echo $cars[2][2];


?>