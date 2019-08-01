<?php
echo 'Traversy Tutorial', '<br>';
    //check for posted data
    // IF method GET, use INPUT_GET
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data found......';
    } else {
        echo 'No data.';
    }

//validate for email
    // if(filter_has_var(INPUT_POST, 'data')){
    //     if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    //         echo 'Email is valid';
    //     } else {
    //         echo 'Email is NOT valid.';
    //     }
    // }

//sanitize
if(filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    //remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if(filter_input(INPUT_POST,'data', FILTER_VALIDATE_EMAIL)) {
        echo 'email is valid!', '<br>';
    } else {
        echo 'email is NOT valid.', '<br>';
    }
}


?>
<!-- //form method needs to match filter, GET or POST -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>

<h1>FILTERS | VALIDATION</h1>

<ul>
    <li>Used to validate. i.e.: Is the formatting and datatype correct?</li>
        <ul>
            <li>
            <br/>if(filter_has_var(INPUT_POST, 'data')){
                <br/>if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
                <br/>echo 'Email is valid';
            <br/>} else {
                <br/>echo 'Email is NOT valid.';
       <br/> }
   <br/> }
            </li>
        </ul>
    <li>Check datatypes.</li>
    <li>Sanitize(email address formatted wtihout erroneous characters.
            
    </li>
    <li>Make sure method matches, i.e. GET/INPUT_GET | POST/INPUT_POST</li>
 </ul>