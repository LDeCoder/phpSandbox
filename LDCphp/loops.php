<?php include 'includes/header.php';?>

<h1>LOOPS:</h1>

<h1>GOTTA CHECK THIS OUT!!</h1>

The two ways of iterating through arrays
void list ( mixed ...)

array each ( array input)

If you do not specify a key, as in the first example, PHP will just assign incrementing numbers starting with 0. However, these numbers cannot be guaranteed to exist within the array in any given order, or even to exist at all - they are just key values themselves. For example, an array may have keys 0, 1, 2, 5, 3, 6, 7. That is, it can have its keys out of order or entirely missing. As a result, code like this should generally be avoided:

<?php
    for ($i = 0; $i < count($array); ++$i) {
        print $array[$i];
    }
?>
However, there is a quick and easy way to accomplish the same thing: a foreach loop, which itself has two versions. The easiest way to use foreach looks like this:

foreach($array as $val) {
    print $val;
}
Here the array $array is looped through and its values are extracted into $val. In this situation, the array keys are ignored completely, which usually makes most sense when they have been auto-generated (i.e. 0, 1, 2, 3, etc).

The second way to use foreach does allow you to extract keys, and looks like this:

foreach ($array as $key => $val) {
    print "$key = $val\n";
}
Another commonly used way to loop over arrays is using the list() and each() functions, like this:

<?php
    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }
?>
List() is a function that does the opposite of array() - it takes an array, and converts it into individual variables. Each() takes an array as its parameter, and returns the current key and value in that array before advancing the array cursor. "Array cursor" is the technical term for the element of an array that is currently being read. All arrays have a cursor, and you can freely move it around - it is used in the while loop above, where we need to iterate through an array. To start with, each() will return the first element, then the second element, then the third, and so on, until it finds there are no elements left, in which case it will return false and end the loop.

The meaning of that first line is "get the current element in the array, and assign its key to $var and its value to $val, then advance the array cursor. There is a lot more detail on array cursors later.

Generally speaking, using foreach loops is the most optimised way to loop through an array, and is also the easiest to read. In practice, however, you will find foreach loops and list()/each() loops in about equal proportions, despite the latter option being slower. The key difference between the two is that foreach automatically starts at the front of the array, whereas list()/each() does not.

<br/> 
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>











<p>Executes code a set number of times</p>

<ul>TYPES:
    <li>FOR LOOP - used if you know the
    number of times it is to be executed.  Takes in 2 parameters - initializer (i=0); condition(i < 10)<--processes/loops until this is true; increment(i++)
    <br/>SYNTAX:
        <br/>for($i = 0;$i <=10 ;$i++){
        <br/>echo 'i = ', $i;
        <br/>echo,'<>br<>'; 
    </li>
    <li>WHILE -  Only takes 1 parameter as it's condition
    <br/>SYNTAX:
        <br/>     $i = 0;
        <br/>     while($i < 11){
        <br/>     echo 'WHILE: i = ', $i;
        <br/>     echo '<>br<>';
        <br/>     $i++;
        <br/> }
    </li>
    <li>DO WHILE - only the while takes a condition.  This loop is guaranteed to run through at least once.
    <br/>SYNTAX:
        <br/> $i = 0;
        <br/> do{
        <br/>     echo 'DO: i = ', $i;
        <br/>     echo '<br>';
        <br/>     $i++;
        <br/> }
        <br/> while($i <= 20);
    </li>
    <li>FOR EACH - Works with arrays.
    <br/>SYNTAX:
    <br/>$myfamily = array('Lori' => '10/5', 'Stephen' => '12/1', 'Haley' => '10/6', 'Bax' => '9/2', 'Bear' => '12/1');
    <br/>foreach($myfamily as $member) {
    <br/>echo $member;
    <br/>echo '<>break<>';
    <br/>}
    //
<br/>10/5
<br/>12/1
<br/>10/6
<br/>9/2
<br/>12/1
   
    <br/>OR:
    <br/>foreach($myfamily as $member => $bday){
    <br/>echo $member . "'s birthday is: " . $bday;
    <br/>echo '<>break<>';
    <br/>}
    //
<br/>Lori's birthday is: 10/5
<br/>Stephen's birthday is: 12/1
<br/>Haley's birthday is: 10/6
<br/>Bax's birthday is: 9/2
<br/>Bear's birthday is: 12/1
    </li>
</ul>




<?php include 'includes/footer.php'; ?>

