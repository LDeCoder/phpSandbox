
<?php
//Message vars
    $msg = '';
    $msgClass = '';
    //can have alerts in classes different colors, i.e. alerts red....

//Check for submit
if(filter_has_var(INPUT_POST, 'submit')){
    // echo 'SUBMITTED.';
    //Get form data:
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //passed
                // echo "PASSED!";
                //check email
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                   //failed
                    $msg = "Please use a valid email.";
                    $msgClass = 'alert-danger';

                } else {
                    //Passed
                    echo "EMAIL PASSED!";
                    //Recipient Email
                    $toEmail = 'ldavis1005@gmail.com';
                    $subject = 'Contact Request From '.$name;
                    $body = '<h2>Contact Request:</h2>
                    <h4>Name:</h4><p>'.$name.'</p>
                    <h4>Email:</h4><p>'.$email.'</p>
                    <h4>Message:</h4><p>'.$message.'</p>
                    ';
                    //Email Headers:
                    $headers = "MIME-Version: 1.0" . "/r/n/";
                    $headers .= "Content-Type:text/html;charset=UTF-8" . "/r/n";
                    //ADditional headers
                    $headers .= "From: " .$name. "<" .$email. ">". "/r/n";

                    if(mail($toEmail, $subject, $body, $headers)) {
                            //Email sent
                            $msg = "Your email has been sent.";
                            $msgClass = 'alert-success';
                    } else {
                        //Email NOT sent
                        $msg = "Your email DID NOT SEND.";
                        $msgClass = 'alert-danger';
                    }
                }
        } else {
            $msg = 'Please fill in all fields.';
            $msgClass= 'alert-danger';
                //makes it red
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us | LDeCoder</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">LDeCoder</a>
</nav>
    <div class="container">
            <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
        <form method="post" action="<? ECHO $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                 value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" 
                value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea type="text" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br/>
            <button type="submit" name="submit" class='btn btn-primary'>SUBMIT</button>
        </form>
    </div>

    <h1>Check out the Chrome Dev Tools to see the code and comments.</h1>
</body>
</html>

