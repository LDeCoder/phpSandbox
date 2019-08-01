<?php include 'includes/header.php'; ?>


   <h1> SUBSTRING </h1>
       <p> returns a portion of a string</p>
    <ul>SUBSTRINGS:
        <li>starting positon is 1 so leaves off 0 = H</li>
        <li>starting positon is 0 = will print Hello</li>
        <li>starting 1 and end 3 = ell</li>
        <li>starting position -2 = 2 from the end = l0</li>
   
    EXAMPLE: <br/> $output = substr('Hello', -2);
    <br/> echo $output; //lo

    <ul>
    <li>STRING LENGTH
        <br/>strlen();
        <br/>counts characters, including spaces

        <br/>EXAMPLE:<br/>
         $output = strlen("Lori Davis");
        <br/>echo $output; //10 </li>

    <li>STRING POSITON - FIRST occurence
        <br/>finds first occurence of str substring
        <br/>$output = strpos('Lori Davis', 'v');
        <br/>echo $output; //7 </li>

     <li>STRING POSITON - LAST occurrence
    <br/>$output = strrpos('Sally Williams', 's');
    <br/>echo $output;// 13</li>

    <li>TRIM:  Trims whitespace

    <br/>$text = 'Hello world                      ' <-- lots of spaces                     ';
    <br/>var_dump($text); //string(33)

    <br/>$trimmed = trim($text);
    <br/>var_dump($trimmed); //string(11)</li>

    <li>STRING TO UPPER CASE
        <br/>$output = strtoupper('lori laine davis');
        <br/>echo $output; //LORI LAINE DAVIS</li>
    
    <li>STRING TO LOWER CASE
    <br/>$output = strtolower('LDECODER AT YOUR SERVICE');
    <br/>echo $output; //ldecoder at your service</li>

    <li>FIRST LETTER OF EACH WORD
        <br/>UCwords();
        <br/>$output = ucwords('lori laine davis');
        <br/>echo $output; //Lori Laine Davis</li>

    <li>STRING REPLACE
        find and replace
 
    <br/>$text = 'Hello world';
    <br/>$output = str_replace('world', 'Everyone', $text);
    <br/>echo $output; //Hello Everyone</li>

    <li>CHECK IF STRING
        <br/>is_string();
        <br/>BOOLEAN value - true =1, false = blank
    <br/>$val = 'Hello';
    <br/>$output = is_string($val);
    <br/>echo $output //1;

    <br/>$values = array(true, false, null, 'abc', 
        <br/>33, '33', 22.4, '22.4',' ', 0, '0');

    <br/>foreach($values as $value){
        <br/>if(is_string($value)){
           <br/> echo "{$value} is a string <br>";
       <br/> }
       <br/> else {
           <br/> echo "{$value} is NOT a string <br>";
       <br/> }
    <br/>}  //
1 is NOT a string 
is NOT a string 
is NOT a string 
abc is a string 
33 is NOT a string 
33 is a string 
22.4 is NOT a string 
22.4 is a string 
is a string 
0 is NOT a string 
0 is a string </li>

    <li>GZ compress & uncompress
       <br/> Compresses a string
       <br/> Compressed string is unreadable

       <br/> $string = 'This is a very long string.  
        It has a lot of words in it.  There is really
        not any real content here, just many words so
        that I can see what GZ string is all about.';

       <br/> $compressed = gzcompress($string);
       <br/> echo $compressed; //x�=�A�0�b�� �{O�L1M���ĥ��qJU��gW;�\K�ri��K�e.8ft$ꐘ�^ج<æ�ؔ�p)L"�ti��m�1�:k�{�{��O����.O�1��2c���~�ګ�����ؓ;�This 

       <br/> $original = gzuncompress($compressed);
        <br/>echo $original; //is a very long string. It has a lot of words in it. There is really not any real content here, just many words so that I can see what GZ string is all about.</li>

    </ul>

<?php include 'includes/footer.php'; ?>