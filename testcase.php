<!-- <?php 
    // $string="welcome";
    // echo "string is ".$string."<br />";
    // $length=strlen($string);
    // echo "total length is ".$length."<br/>";
    // $length=round($length/2);
    // echo "middle string will be no ".$length." / the index number 3 which will be the fourh item in that string <br/>";
    // echo $string[$length-1];
?>


<?php 
  
    // $length=strlen($str);  
    // $length=round($length/2);
    // echo "middle string will be no ".$length." / the index number 3 which will be the fourth item in that string <br/>";
    // echo $str[$length-1];
?>



// echo "my attempt:";
// $str = "youcandoit";
// $length = strlen($str);
// // echo $str;
// // function get_middle ($str) {
// //     if(strlen($str) %2 == 1){
// //       return $str[(strlen($str)/2)-1];
// //     } else {
// //       return $str[(strlen($str)/2)-1].$str[(strlen($str))/2];
// //     }
// //   }


// <!-- 


// //   $str2 = "letsdothis";
// //   $length = strlen($str2);
// //   $mid1 = round($length/2);
// //   $mid2 = $mid1 - 1;

// //   echo "your String is: ".$str2;

// //   function get_middle_of ($str2) {
    
// //     if($length%2 == 0){
// //         return substr($str, $mid1, $mid2)
// //     }



// $length=strlen($str);  
//     $length=round($length/2);
//     echo "middle string will be no ".$length." / the index number 3 which will be the fourth item in that string <br/>";
//     echo $str[$length-1];


echo "just print";

// $str3 = true;


function get_the_middle ($str3){

    $str3 = true;

    if($str3 == true){
        echo ("the middle two");
    } else {
        echo ("the middle one");
    }

}

get_the_middle($str3);

?> -->


<?php
// substr ( string $string , int $start [, int $length ] ) : string

// $length=strlen($str);  
// $length=round($length/2);
// ?????????????????????????????
// function get_middle ($str) {
//     $length = strlen($str);
//     $mid1 = ($length/2)-1;
//     $mid2 = $length/2;

//     if($str === null) {
//         return "ERROR: Please insert at least one character.";
//     }
//     if(strlen($str)%2 == 0) {
//         // echo "it's even";
//         echo substr($str, $mid1, 2);
//     } else {
//         echo substr($str, $mid2,1);
     
//     }
// }
//     get_middle();
//     get_middle("A");
//     get_middle("middle");
//     get_middle("Testing");
//     get_middle("test");

// ?????????????????????????????
function get_middle ($str) {
  
    $length = strlen($str);
    $mid1 = ($length/2)-1;
    $mid2 = $length/2;

  if ($str === null) {
        throw new Exception('ERROR: Please insert at least one character.');
    }
    if(strlen($str)%2 == 0) {
        echo substr($str, $mid1, 2);
    } else {
        echo substr($str, $mid2,1);
    }
 
}

get_middle("A");
echo "<br>";
get_middle("ab");
echo "<br>";
get_middle("test");
echo "<br>";
get_middle("testing");
echo "<br>";
get_middle("middle");

?>


<!-- 




if(strlen($str) %2 == 1){
    return $str[(&$lent)/2-1];
  } else {
    return $str[(&$lent/2)-1].$str[&$lent/2];
  }
}
get_middle("wiggle"); -->