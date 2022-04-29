<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Игрок</h1>
    <form action="" method="get">
        <p>
            <label>Введите название города:</label>
            <input type="text" name="city">
        </p>
        <input type="submit" value="Ok">
    </form>
    
    <h1>Компьютер</h1>
    <?php
        include_once 'repository/db.php';
        include_once 'model/history.php';

        $city=$_GET['city'];

        addHistory($city);

        $letter=mb_substr($city,-1);

        $answer=findCity($letter);

        addHistory($answer);

        echo "<p>$answer</p><br>";

        echo '<h3>История</h3><br>';

        showHistory();
    ?>
</body>
</html>