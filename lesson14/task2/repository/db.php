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

// class DB{
//     private $db;

//     function __construct($connect)
//     {
//         $this->db=$connect;
//     }
    
//     function findAnswer($letter){
//         $letter=strtoupper($letter);
//         $result=$this->db->query("SELECT name FROM city WHERE name LIKE '$letter%' ORDER BY RAND() LIMIT 1;");
//         echo $result->fetch()['name'];
//     }
// }

// $play=new DB($connect);

// $play->findAnswer('a');
