<?php
    // DB variables
    
    $dbn = "drinks";
    $user = "Josh";
    $pass = "josh";

    // Connection

    $dsn = "mysql:host=localhost;dbname=$dbn";
    $db = new PDO($dsn, $user, $pass);



