<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <form action="file.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="surname">Фамилия:</label>
                <input type="text" id="surname" name="surname">
            <div>
                <label for="phoneNumber">Телефон:</label>
                <input type="text" id="phoneNumber" name="phoneNumber">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="photo">Фото:</label>
                <input type="file" id="photo" name="photo">
            </div>
            <div>
                <div><label for="message">Сопроводительный текст:</label></div>
                <textarea id="message" name="message"></textarea>
            </div>
            <div>
                <input type="reset">
                <input type="submit">
            </div>
    </form>
</body>
</html>