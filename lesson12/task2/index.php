<?php
$user = "user";
$password = "user1234";
$database = "list_products_db";
$table = "products";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  
  $result=$db->query("SELECT*FROM $table");

  echo "<table><tr><th>Id</th><th>Name</th><th>Price</th><th>Season</th></tr>";

  while($row=$result->fetch()){
      echo "<tr>";
      echo "<td>".$row["Id"]."</td>";
      echo "<td>".$row["Name"]."</td>";
      echo "<td>".$row["Price"]."</td>";
      echo "<td>".$row["Season"]."</td>";
      echo "</tr>";
  }
  echo "</table>";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
