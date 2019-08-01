<?php

//need try/catch for divide by zero
function solution($number){
    for($i = 0; $i < $number; $i++){
        // echo "i = : ".$i;
        $numArr[]=$i;
        }
        $sum = 0;
        foreach($numArr as $j){
          if($numArr[$j]%3==0){
                $sum += $j;
                // echo "Sum =: ".$sum;
            }
            else if($numArr[$j]%5==0){
                $sum += $j;
                // echo "Sum =: ".$sum;
            }
          
        }
        echo "THESUM: ".$sum;
    }


    solution(0);





    // function solution($number){
    //     for($i = 0; $i < $number; $i++){
    //         echo "i = : ".$i;
    //         $numArr[]=$i;
    //         }
    //         $sum = 0;
    //         foreach($numArr as $j){
    //           if($numArr[$j]%3==0){
    //                 $sum = $sum + $j;
    //                 echo "Sum =: ".$sum;
    //             }
    //             else if($numArr[$j]%5==0){
    //                 $sum = $sum + $j;
    //                 echo "Sum =: ".$sum;
    //             }
                
    //         }
    //     }
    //     echo "The value of sum is:". $sum;
    //     solution(200);

// $date=date("m-d"); 

// if ($date=="01-10") { 
//   echo "Wishing you a very Happy Birthday"; 
// }
// else{
//   //nothing




// solution(10);
// echo $sum;


// if($i%3==0) || if($i%5==0){
//     $sum = $sum+1;











// SQUARE ROOT:
// $top = 200;
// $plist = array_fill(2,$top,1);
// for ($a = 2 ; $a <= sqrt($top)+1; $a++) 
// {
//     if ($plist[$a] == 1)
//         for ($b = ($a+$a) ; $b <= $top; $b+=$a)
//         {
//             $plist[$b] = 0;
//         }
// }

// $sum = 0;
// foreach ($plist as $k=>$v)
// {
//     $sum += $k*$v;
// }
// echo $sum;  


//     echo "ARR is:";
//     print_r($arr);





// solution(10);


// $startTime = microtime(true);
// $array = array();
// for ($x = 1; $x <= 100000; $x++)
// {
//     $array[] = $x;
// }
// $endTime = microtime(true);



// foreach ($haystack as $k=>$v) { 
   
//     if($haystack[$k]==$needle){ 
   
//        $array[] = $k; 
//     } 
// } 
// return ($array); 


// $mult=array();
// function solution($number){
//     echo "it's alive.";

//     for($i = 0;$i <=$number ;$i++){ 
//         echo"<br>";
//         echo 'i = ', $i; 
//         echo"<br>";

//     // for($i = 0; $i >= $number; $i++){
//     //     echo "i = $i";
//     if($i % 3 == 0){
//     //     // return $mult = array_fill(0,$number,$number);
//         echo $i." is a MULTIPLE of 3.<br>";
//     } 
//     if($number % 5 == 0) {
//     //     // return $mult = array_fill(0,$number,$number);
//     echo $i." is a MULTIPLE of 5.<br>";
//     }  else {
//         echo "not a multiple of 3 or 5";
//     }
//     }
// }


// solution(12);


// // $startTime = microtime(true);
// // $array = array();
// // for ($x = 1; $x <= 100000; $x++)
// // {
// //     $array[] = $x;
// // }
// // $endTime = microtime(true);



// // foreach ($haystack as $k=>$v) { 
   
// //     if($haystack[$k]==$needle){ 
   
// //        $array[] = $k; 
// //     } 
// // } 
// // return ($array); 




















// $vals = array();
// $mults = array();

// function solution($number){
//     for($i = 0;$i<=$number ;$i++){
//         $vals[] = $i;

// // foreach($vals as $j) {
// //     if($number[$j%3==0]){
// //         $mults[] = $j;
// //     }
// // }
// }
// }


// // $array = array();
// // for ($x = 1; $x <= 100; $x++)
// // {
// //     $array[] = $x;
// // }
// // echo "Array is:";
// // print_r ($array);

// solution(12);

// echo "<br> Array sum: ";
// echo array_sum($mults);
// echo "<br> MULTS Array: ";
// print_r($mults);
// echo "<br> VALS Array: ";
// print_r($vals);

// ?>

// <!-- // $startTime = microtime(true);
// // $array = array();
// // for ($x = 1; $x <= 100000; $x++)
// // {
// //     $array[] = $x;
// }
// $endTime = microtime(true);



// foreach ($haystack as $k=>$v) { 
   
//     if($haystack[$k]==$needle){ 
   
//        $array[] = $k; 
//     } 
// } 
// return ($array);  -->


<!-- $mults = array();
foreach($number as $i=>$mults) {
 $mults[] = $i;
}

print_r($mults); -->


<!-- $items = array();
foreach($group_membership as $username) {
 $items[] = $username;
}

print_r($items); -->




<!-- 

  echo"<br>";
        echo 'i = ', $i; 
        echo"<br>";

// $mult=array();

// function solution($number){
    
//     for($i = 0;$i <=$number ;$i++){ 
//         echo"<br>";
//         echo 'i = ', $i; 
//         echo"<br>";
//         foreach ($i as $x=>$k){
//     // for($i = 0; $i >= $number; $i++){
//     //     echo "i = $i";
//             if($i % 3 == 0){
//                 $mult[]=$i;
//       echo $i." is a MULTIPLE of 3.<br>";
    
//      } 
//                 if($number % 5 == 0) {
//                     $mult[]=$i;
//                     echo $i." is a MULTIPLE of 5.<br>";
   
//                 }  
                
                
        //         else {
        // echo "not a multiple of 3 or 5";
        // // $mult[] = $i;
        // // array_push($mult, $i);
        // // $pig = true;





// solution(12);
// echo "<br> Array sum: ";
// echo array_sum($mult);
// echo "<br> MULT Array: ";
// print_r($mult);


       -->