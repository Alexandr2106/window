<?php
$mysql = new mysqli('localhost','root','','pws_db');
    $mysql->query("SET NAMES utf8");
    $mysql->query("SET CHARACTER SET utf8");
    $mysql->query("SET character_set_client = utf8");
    $mysql->query("SET character_set_connection = utf8");
    $mysql->query("SET character_set_results = utf8");
	
	if($mysql == false){
        echo "Error";
        echo mysqli_connect_errno();
        exit();
    }
?>