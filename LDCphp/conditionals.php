<?php include 'includes/header.php'; ?>
    <h1>CONDITIONALS:</h1>
        <ul>
            <li>if</li>
            <li>if-else</li>
            <li>if-else-if</li>
            <li>Logical Operators:</li>
                <ul>
                    <li>and:  AND or &&</li>
                    <li>or:  OR or ||</li>
                    <li>exclusive or:  XOR</li>
                </ul>
        </ul>

    <h1>EXAMPLES:</h1>
        <ul>
            <li>IF:</li>
                <ul>As integer: Number, no quotes<br/>
                    $num = 6;
                    <li>if($num == 5){<br/>
                        echo "Num passed.";
                        <br/>};
     </li>  //Num passed.
                </ul>
                <ul>As string: Use 'quotes'<br/>
                    $num = 6;
                    <li>if($num == '5'){<br/>
                        echo "Num passed.";
                        <br/>};
                        //Num not equal to 6 - did not pass
                    </li>
                    <li>5 and '5' are equal if string.  If integer, cannot have quotes.</li>
                    <li>Datatype specific uses 3 equals.  EX: if($num === 3)</li>    
                </ul>
            
            
            
            
            <li>ELSE IF:</li>
                <ul>$num = 6;<br/>
                    <li>if($num == 5){
                        <br/>echo "5 passed.";
                        <br/>}
                        <br/>else if($num == 6){
                        <br/>    echo '6 passed.';
                        <br/>}
                        <br/>else {
                        <br/>    echo 'Num did not pass.';
                        <br/>}
                    </li> // 6 passed.
                </ul>


            <li>NESTING IF:</li>
                <p>Option 1:</p>
                <ul>$num = 6;<br/>
                    <li>if($ifNum > 4){
                        <br/>      if($ifNum < 10) {
                        <br/>echo 'This num is between 4 and 10.';
                        <br/> }
                        <br/>else {
                        <br/>echo 'This num is too big or too small.';
                        <br/> }
                        <br/>}
                    </li> // 6 passed.
                </ul>

                <p>Option 2:  Better with Logical Operators (&& or || or XOR):</p>
                <ul>$num = 6;<br/>
                    <li>AND &&:  Works if both conditions are true.
                        <br/>if($ifNum > 4 AND $ifNum < 10){
                        <br/>     echo "$ifNum passed";
                        <br/> }  else {
                        <br/>    echo  "$ifNum DID NOT PASS";
                        <br/> }</li> //6 passed   Because it is greater than 4 && less than 10.  
                    <li>OR ||:  Works as long as one condition is true.
                        <br/> if($ifNum > 4 OR $ifNum < 10){
                        <br/>     echo "$ifNum passed<br>";
                        <br/> }
                        <br/> else {
                        <br/>    echo  "$ifNum DID NOT PASS<br>";
                        <br/> }</li> //6 passed   Because it is greater than 4 OR less than 10.  
                    <li>EXCLUSIVE OR XOR:  Works if ONLY one condition is true, but NOT BOTH.
                        <br/> if($ifNum > 4 XOR $ifNum < 10){
                        <br/>     echo "$ifNum passed<br>";
                        <br/> }
                        <br/> else {
                        <br/>     echo "$ifNum DID NOT PASS";
                        <br/> }</li> //6 DID NOT PASS   Because it is greater than 4 AND IS less than 10.  <br/>Both conditions met, so it does not pass.        
                </ul>
                
            <li>SWITCHES:  Tests for a value, with different cases,
    then it will do something based on those cases</li>
                <ul>$favColor = 'blue';<br/>
                    <li>switch($favColor){
       <br/> case 'red';
       <br/>     echo 'Favorite color is RED';
       <br/>     break;
       <br/> case 'blue';
       <br/>     echo 'Favorite color is blue';
       <br/>     break;
       <br/> case 'green';
       <br/>     echo 'Favorite color is green';
       <br/>     break;
       <br/> default;
       <br/>     echo 'Your favorite color must be purple!';
<br/>}
                    </li> // Favorite color is blue
                </ul>
                </ul>

<?php include 'includes/footer.php'; ?>









 
