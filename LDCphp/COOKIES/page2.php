<?php

    //to make changes
    setcookie('username', 'Frank', time()+86400*30);
    //expires in 1 day

    // //unset/delete = set for date/time in the past.
    // setcookie('username', 'Frank', time()-86400*30);
    
    //check for cookies:
        if(count($_COOKIE) >0){
            echo 'There are ' .count($_COOKIE). ' cookie(s) saved <br>';
        } else {
            'There are NO cookies saved.';
        }



    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . ' is set<br>';
    } else {
        echo 'User is NOT set.';
    }
?>