<!-- //////////LOOPS
*Execute code a set number of times

TYPES:
    *   For - used if you know the
    number of times it is to be executed
    2 parameters - initialize, condition, increment
    parameters separated by a semicolon -->

 <?php
 for($i = 0;$i <=10 ;$i++){
     echo 'i = ', $i;
     echo'<br>'; 
 }

//     *   While
//  Only takes 1 parameter as it's condition

$i = 0;

while($i < 11){
    echo 'WHILE: i = ', $i;
    echo '<br>';
    $i++;
}

//     *   Do while
// * only the while takes a condition
// guaranteed to loop through once

$i = 0;
do{
    echo 'DO: i = ', $i;
    echo '<br>';
    $i++;
}
while($i <= 20);


// FOR EACH
// Works with arrays

$myfamily = array('Lori' => '10/5', 'Stephen' => '12/1', 'Haley' => '10/6', 'Bax' => '9/2', 'Bear' => '12/1');

foreach($myfamily as $member){
    echo $member;
    echo '<br>';
}


foreach($myfamily as $member => $bday){
    echo $member . "'s birthday is: " . $bday;
    echo '<br>';
}

?>