<?php
include_once "conf.php";

if(!(isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["season"]))){
    echo "Error: incorrect data";
}

$name=htmlentities($_POST["name"]);
$price=htmlentities($_POST["price"]);
$season=htmlentities($_POST["season"]);

try{
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $db->exec("INSERT INTO products (NameProduct, Price, Season) VALUES ('$name',$price,'$season')");

    header('Location: index.php');
}
catch(PDOexception $ex){
    echo "Exception: ".$ex->getMessage();
}