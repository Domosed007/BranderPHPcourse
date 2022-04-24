<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="get">
        <p>
            <label>Число1</label>
            <input type="number" name="number1">
        </p>
        <p>
            <label>Число2</label>
            <input type="number" name="number2">
        </p>
        <p>
            <input type="radio" name="action" value="+">+<br>
            <input type="radio" name="action" value="-">-<br>
            <input type="radio" name="action" value="*">*<br>
            <input type="radio" name="action" value="/">/<br>
            <input type="radio" name="action" value="| |">Модуль числа<br>
            <input type="radio" name="action" value="%">Остаток от деления<br>
        </p>
        <p>
            <input type="reset" value="Сбросить">
            <input type="submit" value="Отправить">
        </p>
    </form>
</body>
</html>