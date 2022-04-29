<?php

function findCity($letter){
    try{
        $user = "user";
        $password = "user1234";
        $database = "cityDB";
        $host="localhost";
        $connect = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $letter=strtoupper($letter);
        $result=$connect->query("SELECT name FROM city WHERE name LIKE '$letter%' ORDER BY RAND() LIMIT 1;");
        return $result->fetch()['name'];
    }
    catch(PDOexception $ex){
        echo "Exception: ".$ex->getMessage();
    }
}