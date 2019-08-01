<?php include 'includes/header.php'; ?>

<h1>INCLUDES:</h1>
    <ul>
        <li>Allows inserting php code, markup and text into another .php file - saves time and code.</li>
        <li>Use to "include" header and footer - and any other markup you want on more than one page of your website.</li>
        <li>SYNTAX:  <>?php include 'folder/fileToInclude.php'; ?></li>
        <li>SYNTAX(FUNCTION FORMAT):  <>?php include ('folder/fileToInclude.php'); ?></li>
        <li>Header information in header.php and footer in footer.php. Then include them where you want on the page, i.e. header at the top of the code and footer at the bottom of the code.</li>
        <li>Also very helpful for importing CSS, styles, Bootstrap, etc.</li>
        <li>WARNING - if you include a file that is not there, but it will continue to run the script below/above it.</li>
    </ul>

<h1>REQUIRES:</h1>
    <ul>
        <li>SYNTAX:  <>?php require 'folder/fileToInclude.php'; ?></li>
        <li>SYNTAX(FUNCTION FORMAT):  <>?php require('folder/fileToInclude.php'); ?></li>
        <li>FATAL ERROR - if you include a file that is not there.</li>
        <li>Use requre if you don't want to the script to continue if the file doesn't load.</li>
        <li>REQUIRE ONCE: works like require but .php will check the file to see if it is alreay included, and if it has, it won't include or require it again. </li>
    </ul>



<?php include 'includes/footer.php'; ?>