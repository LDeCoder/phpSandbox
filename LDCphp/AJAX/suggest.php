<?php
//people array @TODO - Get from DB

$people[] = "Stephen";
$people[] = "Lori";
$people[] = "Haley";
$people[] = "Paulette";
$people[] = "Violet";
$people[] = "Logan";
$people[] = "Debbie";
$people[] = "Leslie";
$people[] = "VanTom";
$people[] = "Cindy";
$people[] = "Libby";
$people[] = "Nick";
$people[] = "Dean";
$people[] = "Deanie";
$people[] = "Tom";
$people[] = "Anna";

//get query string
$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestions

if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === " " ? "No Suggestion" : "$suggestion";

?>