<?php
    $redis = new Redis();
    $redis->connect('redis', 6379);
    // echo "Connection to server sucessfully";
    
    $redis->set("a", "aaaa");
    // Get the stored data and print it
    
    echo "Stored string in redis:: ". $redis->get("a");
?>
