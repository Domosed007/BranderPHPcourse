<?php
$user = "user";
$password = "user1234";
$database = "testDB";
$table = "users";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  
  foreach($db->query("SELECT Name FROM $table") as $row) {
    echo "<li>" . $row['Name'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
