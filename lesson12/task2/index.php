<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
include_once "conf.php";

try {
  $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  
  $result=$db->query("SELECT*FROM $table");

  echo "<table><tr><th>Id</th><th>Name</th><th>Price</th><th>Season</th></tr>";

  while($row=$result->fetch()){
      echo "<tr>";
      echo "<td>".$row["Id"]."</td>";
      echo "<td>".$row["NameProduct"]."</td>";
      echo "<td>".$row["Price"]."</td>";
      echo "<td>".$row["Season"]."</td>";
      echo "</tr>";
  }
  echo "</table>";
  $db=null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

<a href="formAdd.html">Add new product</a>

</body>
</html>
