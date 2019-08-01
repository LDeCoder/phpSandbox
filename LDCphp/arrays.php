<?php include 'includes/header.php'; ?>
    <h1>ARRAYS:</h1>




<h2>ARRAYS:- variable that holds multiple values.  
<h5>Arrays are zero indexed, meaning the first value index =0.  Therefore, if your array has 5 values, the fifth value's index will be 4.</h5>
<h3>Types of arrays:</h3>
    <ul>
        <li>Indexed: a list with indexes</li>
        <li>Associative: Defines key and value</li>
        <li>Multidimensional: An array within an array</li>
    </ul>

    <h4>SYNTAX:</h4>
        <ul>
            <li>ENTER WITH PARENTHESIS:  $people = array('Stephen', 'Lori', 'Haley');</li>
            <li>ENTER WITH BRACKETS:  $family = ['Mom', 'Dad', 'Nina', 'Mamaw', 'Mimi', 'Grandad'];
            <li>ENTER INTEGERS (no quotes): $numbers = array(12, 1, 10, 5, 6, 8);</li>  
        </ul>
   <h3>INDEXED ARRAYS:  A simple list </h3>
    <h4>PRINT & EDIT:</h4>
        <ul>
            <li>PRINT BY INDEX:</li>
                <ul>
                    <li>PRINT index 0: echo $people[0]  //Stephen</li>
                    <li>PRINT index 5: echo $family[5]; //Granddad</li>
                    <li>PRINT index 4: echo $numbers[4];  //6</li>
                    <li>HOW MANY IN MY ARRAY: echo count($family);  //8</li>
                    <li>PRINT ARRAY WITH INDEXES:  print_r($family); <br/>//Array ( [0] => Mom [1] => Dad [2] => Nina [3] => Mamaw [4] => Mimi [5] => baby Logan [6] => Haley )</li>
                    <li>PRINT ALL INFO ABOUT ARRAY:  var_dump($family);  <br/>//array(7) { [0]=> string(3) "Mom" [1]=> string(3) "Dad" [2]=> string(4) "Nina" [3]=> string(5) "Mamaw" [4]=> string(4) "Mimi" [5]=> string(10) "baby Logan" [6]=> string(5) "Haley" }</li>
                </ul>
            <li>EDIT ARRAY:</li>
                <ul>
                    <li>ADD by index: $family[5] = 'baby Logan';  PRINT: echo $family[5];</li>
                    <li>ADD index unknown: $family[] = 'Haley'; PRINT: // echo $family[6];</li>
                    <li>PRINT INDEX 4:  echo $numbers[4];  //6</li>
                </ul>

            
        </ul>
    <h3> ASSOCIATIVE ARRAYS:  Allows you to define the key and the value | any datatype
    <h4>PRINT & EDIT:</h4>
        <ul>
            <li>PRINT BY INDEX:</li>
                <ul>
                    <li>ASSOCIATIVE ARRAY: $carload = array('Lori' => 43, 'Stephen' => 51, 'Baxter' => 14);</li>
                    <li>PRINT index 5: echo $ids[3]; //Gus</li>
                    <li>PRINT ALL INFO ABOUT ARRAY:  var_dump($ids);  <br/>//array(3) { [1]=> string(3) "Mom" [2]=> string(4) "Nina" [3]=> string(3) "Gus" }</li>
                </ul>
            <li>EDIT ARRAY:</li>
                <ul>
                    <li>ADD by index: $carload['Bear'] = 4;  PRINT: echo $carload[4];</li>
                </ul>
        </ul>

    <h3> MULTIDIMENSIONAL ARRAYS:  An array within an array</h3>
        <ul>
            <li>INPUT ARRAYS:</li>
                <ul>
                    <li>$cars = array(
                            <br/>array('Porsche', 19, 2),
                            <br/>array('BMW', 88, 4),
                            <br/>array('Corvette', 86, 10),
                            <br/>array('Camaro', 75, 3),
                            <br/>);
                    </li>
                </ul>
            <li>PRINT ARRAY:</li>
                <ul>
                    <li>PRINT BY INDEX: echo $cars[0][0]; //Porsche</li>
                </ul>

            
        </ul>   

<?php include 'includes/footer.php'; ?>
