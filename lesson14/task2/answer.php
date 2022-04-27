<?php
include_once 'repository/db.php';

$city=$_GET['city'];

$letter=mb_substr($city,0,1);

$answer=findCity($letter);

header('Lacation: index.php');