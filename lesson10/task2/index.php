<?php
session_start();

$user=$_SESSION;

foreach($user as $key=>$data){
    echo "<p>$key: $data</p>";
}