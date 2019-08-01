<?php

    $path = 'anotherDir/dir1/myfile.php';
    $file = 'file1.txt';


    //permission denied on my machine - so I hope thee are all correct!
    //return filename
    echo basename($path);

    // return filename WITHOUT extension
    echo basename($path, 'php');

    // return the directory name from the path
    echo dirname($path);

    //check if file/folder exists
    // echo file_exists($file);

    //Get absolute path - the whole thing
    // echo realpath($file);

    //checks to see if file
    // echo is_file($file);

    //check if file is writable
    // echo is_writable($file);

    //check if file is readable
    // echo is_readable($file);

    // //check filesize
    // echo filesize($file);

    //Create a directory(folder)
    // mkdir('JUSTtesting');

    // //remove directory(folder), if empty
    // rmdir('JUSTtesting');

    //Copy a file
    // echo copy('file1.txt', 'file2.txt');

    //rename file
    // rename('file2.txt', 'myfile.txt');

    //delete a file
    // unlink('myfile.txt');

    //Write from file to string
    // echo file_get_contents(filename);

    //Write string to the file
    // echo file_put_contents($file, 'Goodbye World.');

    // $current = file_get_contents($file);

    // $current .= 'Goodbye world!';

    // file_put_contents($file, $current);


    //Open file for Reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;

    //Open file for writing
    // $handle = fopen('file2,txt', 'w');
    // $txt = 'John Doe\n';
    // fwrite($handle, $txt);
    // $txt = 'Steve Smith\n';
    // fwrite($handle, $txt);
    // fclose($handle);


?>