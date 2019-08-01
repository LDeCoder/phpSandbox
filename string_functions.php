<?php
    // // SUBSTRING
    // //     returns a portion of a string

    // // starting positon is 1 so leaves off 0 = H
    // // starting positon is 0 = will print Hello
    // // starting 1 and end 3 = ell
    // // starting position -2 = 2 from the end = l0
    
    // $output = substr('Hello', -2);
    // echo $output;

    // // STRING LENGTH
    //         // strlen();
    //         // counts characters, including spaces

    // $output = strlen("Lori Davis");
    // echo $output;

    // // STRING POSITON - FIRST occurence
    // //     finds first occurence of str substring
    //     $output = strpos('Lori Davis', 'v');
    //     echo $output;

    // //  STRING POSITON - LAST occurrence
    // $output = strrpos('Sally Williams', 's');
    // echo $output;

    // // TRIM
    // //     Trims whitespace

    // $text = 'Hello world                      ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    // // STRING TO UPPER CASE
    //     $output = strtoupper('lori laine davis');
    //     echo $output;
    
    // // STRING TO LOWER CASE
    // $output = strtolower('LDECODER AT YOUR SERVICE');
    // echo $output;

    // // FIRST LETTER OF EACH WORD
    //     // UCwords();
    //     $output = ucwords('lori laine davis');
    //     echo $output;

    // // STRING REPLACE
    // //     find and replace
 
    // $text = 'Hello world';
    // $output = str_replace('world', 'Everyone', $text);
    // echo $output;

    // // CHECK IF STRING
    //     // is_string();
    //     // BOOLEAN value - true =1, false = blank
    // $val = 'Hello';
    // $output = is_string($val);
    // echo $output;

    $values = array(true, false, null, 'abc', 
        33, '33', 22.4, '22.4',' ', 0, '0');

    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string <br>";
        }
        else {
            echo "{$value} is NOT a string <br>";
        }
    }

    // GZ compress & uncompress
        // Compresses a string
        // it is unreadable

        $string = 'This is a very long string.  
        It has a lot of words in it.  There is really
        not any real content here, just many words so
        that I can see what GZ string is all about.';

        $compressed = gzcompress($string);
        echo $compressed;

        $original = gzuncompress($compressed);
        echo $original;
?>