<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);

    $playername = $_GET['pn'];
    $password = $_GET['pw'];
    $playerID = $_GET['id'];
    $isDesktopPlayer = $_GET['dt'];
    $teamID = $_GET['tid'];
    
    $mysqli = new mysqli("127.0.0.1", "root", "9872598725", "testDB");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if (!$mysqli->query("INSERT INTO player (player_ID, player_name, password, is_desktop_player, team_ID, join_date) VALUES ('". $playerID . "','" . $playername . "', '". $password . "','" . $isDesktopPlayer ."','". $teamID ."',SYSDATE());")){
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }else{
        echo "Query executed sucessfully";
    }



?>
