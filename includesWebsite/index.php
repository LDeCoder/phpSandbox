<?php include 'inc/header.php'; ?>
<!-- can also be done in function format
include('filename';) -->
    
    <h1>Home</h1>

    WHAT IS THE DIFFERENCE BETWEEN
    INCLUDES AND REQUIRES?

    Includes - you can place your header in a file
    and your footer in a file then INCLUDE them.
    <br>
    <br>
    Even if the included file path is incorrect,
    the page will still load the remaining scripting.
    For an example, change the filename above to 
    one that does not exist.  It will generate a warning.
    <br>
    <br>
    If you use REQUIRE and the filepath is incorrect,
    the page will then not load anything beyond the 
    incorrect filepath.
    <br>
    <br>
    This is useful if you want to make sure that a file
    is available and loads on the website, and that it will
    throw errors if it is not working properly.
    <br>
    <br>
    REQUIRE_ONCE - Will check to see if it has required the file
    already, and if it has, it will not require it again.

<?php include 'inc/footer.php'; ?>
