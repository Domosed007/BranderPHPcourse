<?php
include_once 'repository/db.php';
include_once 'model/history.php';

$city=$_GET['city'];

addHistory($city);

$letter=mb_substr($city,0,1);

$answer=findCity($letter);

addHistory($answer);

//header('Lacation:index.php');
header('Location: index.php');