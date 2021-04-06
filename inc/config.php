<?php
    define("Host","localhost");
    define("Username","root");
    define("Password","");
    define("Dbname","fastlane");
    
    // This is to Establish Connection With Database
    
    $link = mysqli_connect(Host, Username, Password, Dbname);

    
    // if ($link) {
    // echo "Connected";
    // }  else echo "no";

    require_once 'functions.php';
    