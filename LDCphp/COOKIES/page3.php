<?php
    $user = ['name' => 'brad', 'email' => 'test@test.com', 'age' => 25];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400*30));

   $user = unserialize($_COOKIE['user']);

   echo "User is: ". $user['name'].'<br>';
   echo "Email is: ".$user['email'],'<br>';
   print_r($user);
    
?>