<?php include 'includes/header.php'; ?>
<?php
    //check for posted data
    // IF method GET, use INPUT_GET
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data found.';
    } else {
        echo 'No data.';
    }

//validate for email
    if(filter_has_var(INPUT_POST, 'data')){
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is NOT valid.';
        }
    }

//sanitize
if(filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    //remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if(filter_input(INPUT_POST,'data', FILTER_VALIDATE_EMAIL)) {
        echo 'email is valid!';
    } else {
        echo 'email is NOT valid.';
    }
}

//integer validation

    $var = '1';

    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var. 'is a number';
    } else {
        echo $var. 'is not a number';
    }


    //number SANITIZE

    $var = '33k2l53lk2j35lk23';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
//3325323523

    $var = '<script>alert(1)</script>';
    echo $var;
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);


    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));

    $arr = array(
       "name" => "sally sue",
       "age" => "222",
       "email" => "sallysue@howareyou..com"
    );

    $filters = array(
        "name" => array(
            //apply a function to the values
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            ),
        "email" => FILTER_VALIDATE_EMAIL
        )
    );

    print_r(filter_var_array($arr, $filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>

<h1>FILTERS | VALIDATION</h1>

<ul>
    <li>Used to validate. i.e.: Is the formatting and datatype correct?</li>
    <li>VALIDATIONS AVAILABLE:
        <ul>
            <li>#FILTER_VALIDATE_BOOLEAN</li>
            <li>#FILTER_VALIDATE_EMAIL</li>
            <li>#FILTER_VALIDATE_FLOAT</li>
            <li>#FILTER_VALIDATE_INT</li>
            <li>#FILTER_VALIDATE_IP</li>
            <li>#FILTER_VALIDATE_REGEXP (regular expression)</li>
            <li>#FILTER_VALIDATE_URL</li>
        </ul>
    </li>
        <ul>
            <li>EMAIL VALIDATION SYNTAX:
            <br/>if(filter_has_var(INPUT_POST, 'data')){
                <br/>if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
                <br/>echo 'Email is valid.';
            <br/>} else {
                <br/>echo 'Email is NOT valid.';
       <br/> }
   <br/> }
   <br/> input: test@test.com
   <br/>//Email is valid. test@test.com
            </li>
            <li>INTEGER VALIDATION SYNTAX:
           <br/> if(filter_var($var, FILTER_VALIDATE_INT)) {
           <br/> echo $var. 'is a number';
           <br/> } else {
           <br/>echo $var. 'is NOT a number';
            <br/>}
            <br/> input: 23
   <br/>//23 is a number
   <br/> input: '23'
   <br/>//23 is a number
   <br/> input: 'abcd'
   <br/>//abcd is NOT a number

            </li>
        </ul>
    <li>Check datatypes with FILTER_VALIDATE_EMAIL.</li>
    <li>Sanitize -to remove erroneous characters with SUPERGLOBALS.</li>
    <li>SANITIZATIONS AVAILABLE:
        <ul>
            <li>#FILTER_SANITIZE_EMAIL</li>
            <li>#FILTER_SANITIZE_ENCODED</li>
            <li>#FILTER_SANITIZE_NUMBER_FLOAT</li>
            <li>#FILTER_SANITIZE_NUMBER_INT</li>
            <li>#FILTER_SANITIZE_SPECIAL_CHARS</li>
            <li>#FILTER_SANITIZE_STRING</li>
            <li>#FILTER_SANITIZE_URL</li>
        </ul>
    </li>
    <li>SANITIZE NUMBER SYNTAX:
        <br/>$var = '33k2l53lk2j35lk23';
        <br/>var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
        <br/>//3325323523
    </li>
    <li>SANITIZE SPECIAL CHARACTERS (works for security purposes, so no one inputs a "script" that will run on my website.)
        <br/>$var = '<>script>alert(1)<>/script>';
        <br/>echo $var;
        <br/>echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
        //<>script>alert(1)<>/script>   WITHOUT FILTER: // 1 (as an alert)
   </li>
   <li>FILTER ARRAY SYNTAX:
        <ul>
            <li>FILTER INPUT ARRAY: Works great when working with multiple fields when working with arrays
            <br/>$filters = array(
            <br/>"data" => FILTER_VALIDATE_EMAIL,
            <br/>"data2" => array(
            <br/>"filter" => FILTER_VALIDATE_INT,
            <br/>"options" => array(
            <br/>"min_range" => 1,
            <br/>"max_range" => 100
            <br/>)
            <br/>)
            <br/>);
            <br/>print_r(filter_input_array(INPUT_POST, $filters));
            <br/> Array ( [data] => test@test.com [data2] => 3 )
            </li>
            <li>FILTER VAR ARRAY: Validating with several inputs/values
            <br/>$arr = array(
            <br/>"name" => "sally sue",
            <br/>"age" => "22",
            <br/>"email" => "sallysue@howareyou.com"
            <br/>);

            <br/>$filters = array(
            <br/>"name" => array(
            <br/>//apply a function to the values
            <br/>"filter" => FILTER_CALLBACK,
            <br/>"options" => "ucwords"
            ),
            <br/>"age" => array(
            <br/>"filter" => FILTER_VALIDATE_INT,
            <br/>"options" => array(
            <br/>"min_range" => 1,
            <br/>"max_range" => 120
            <br/>),
            <br/>"email" => FILTER_VALIDATE_EMAIL
            <br/>)
            <br/>);

            <br/>print_r(filter_var_array($arr, $filters));
            <br/>//Array ( [data] => test@test.com [data2] => 3 ) Array ( [name] => Sally Sue [age] => 22 )
            <br/>Invalid email & age given: //Array ( [data] => test@test.com [data2] => 3 ) Array ( [name] => Sally Sue [age] => )
            </li>
        </ul>
   </li>
    <li>IMPORTANT!!! Make sure method matches, i.e. GET/INPUT_GET | POST/INPUT_POST</li>
 </ul>
 ?>

 <?php include 'includes/footer.php'; ?>