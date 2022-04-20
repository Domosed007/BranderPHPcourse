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
        try{
            $con=new PDO("mysql:host=localhost;dbname=testDB","user","user1234");
            $result=$con->query("SELECT*FROM users");
            echo "<table><tr><th>Id</th><th>Name</th></tr>";
            while($row=$result->fetch()){
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }catch(PDOException $ex){
            echo "Connection failed: ".$ex->getMessage();
        }
    ?>
    
</body>
</html>