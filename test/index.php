<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="get">
        <input type="text" name="text">
        <input type="submit" value="OK">
    </form>
    <?php
        $str=$_GET['text'];

        $arr=$str;

        setcookie('text',$arr);
    ?>
</body>
</html>
