<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);

    $playerID = $_GET['id'];
    $longitude = $_GET['lon'];
    $latitude = $_GET['lat'];
    
    $mysqli = new mysqli("127.0.0.1", "root", "9872598725", "testDB");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if (!$mysqli->query("UPDATE player SET longitude = '" . $longitude . "', latitude = '" . $latitude . "' WHERE player_ID = '" . $playerID . "';")){
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }else{
        echo "Query executed sucessfully";
    }



?>
