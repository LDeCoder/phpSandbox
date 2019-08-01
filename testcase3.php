You are provided a string containing a list 
of positive integers separated by a space (" "). 
Take each value and calculate the sum of its 
digits, which we call it's "weight". Then 
return the list in ascending order by weight, 
as a string joined by a space.


For example 99 will have "weight" 18, 
100 will have "weight" 1 so in the ouput 
100 will come before 99.

function orderWeights($str) {
  $nums = explode(" ", $str);
  sort($nums);
  return implode(' ', $nums);
}

<!-- Given a descending list of values, $list=array();
sum the digits of each value  foreach($list as $i){
    $sum = 0; 
    while ($x != 0) 
    { 
        $sum += $x %10; 
        $x = $x /10; 
    } 
    return $sum; 
} 
}
to create a new value and return the list 
of new values ordered from lowest to highest. 
implode() //separate by a space -->

<!-- sort() -->
<?php

$numbers = array(40, 61, 2, 22, 13); 
sort($numbers); 
  
$arrlength = count($numbers); 
for($x = 0; $x < $arrlength; $x++) { 
    echo $numbers[$x]; 
    echo "<br>"; 
} 



       
            //    // PHP program to calculate the sum of digits 
            //    function sum($num) { 
            //        $sum = 0; 
            //        for ($i = 0; $i < strlen($num); $i++){ 
            //            $sum += $num[$i]; 
            //        } 
            //        return $sum; 
            //    } 
                 
            //    // Driver Code 
            //    $num = "711"; 
            //    echo sum($num); 
     


// A Simple php program to compute sum  
//of digits in numbers from 1 to n 
  
// Returns sum of all digits in 
// numbers from 1 to n 
function sumOfDigitsFrom1ToN($n) 
{ 
    $result = 0; // initialize result 
  
    // One by one compute sum of digits 
    // in every number from 1 to n 
    for ($x = 1; $x <= $n; $x++) 
        $result += sumOfDigits($x); 
  
    return $result; 
} 
  
// A utility function to compute sum 
// of digits in a given number x 
function sumOfDigits($x) 
{ 
    $sum = 0; 
    while ($x != 0) 
    { 
        $sum += $x %10; 
        $x = $x /10; 
    } 
    return $sum; //weight
} 
  
// Driver Program 
  
    $n = 328; 
    echo "Sum of digits in numbers from" 
               . " 1 to " . $n . " is " 
               . sumOfDigitsFrom1ToN($n); 



// PHP program to print  
// the array in given order 
  
// Function which 
// arrange the array. 
function rearrangeArray($arr, $n) 
{  
    // Sorting the  
    // array elements 
    sort($arr); 
  
    // To store modified array 
    $tempArr = array($n);  
      
    // Adding numbers from  
    // sorted array to new 
    // array accordingly 
    $ArrIndex = 0; 
  
    // Traverse from begin  
    // and end simultaneously  
    for ($i = 0, $j = $n - 1; 
         $i <= $n / 2 || $j > $n / 2; 
         $i++, $j--)  
    { 
        $tempArr[$ArrIndex] = $arr[$i]; 
        $ArrIndex++; 
        $tempArr[$ArrIndex] = $arr[$j]; 
        $ArrIndex++; 
    } 
  
    // Modifying original array 
    for ($i = 0; $i < $n; $i++) 
        $arr[$i] = $tempArr[$i]; 
      
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i] . " "; 
} 
  
// Driver Code 
$arr = array(5, 8, 1, 4, 2,  
             9, 3, 7, 6 ); 
$n = count($arr) ; 
rearrangeArray($arr, $n); 
  

?> 
