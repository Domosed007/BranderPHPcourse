<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname">
        </div>
        <div>
            <label for="phoneNumber">Phone number</label>
            <input type="text" name="phoneNumber" id="phoneNumber" value=<?php echo $_COOKIE['phoneNumber']?>>
        </div>
    </form>
</body>
</html>