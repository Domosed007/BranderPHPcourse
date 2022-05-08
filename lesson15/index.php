<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="products">
       
    </div>
    <form action="formAction.php" method="post" id="form">
        <p>
            <label for="id">Id</label>
            <input type="number" name="id" id="id"> 
        </p>
        <p>
            <label for="name">Название товара</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="price">Цена</label>
            <input type="number" name="price" id="price">
        </p>
        <p>
            <label for="season">Сезон</label>
            <input type="text" name="season" id="season"> 
        </p>
        <input type="submit" value="Add product" id="btnAddProduct">

    </form>
    <script>
        $(function()
        {
            $('#products').load('action.php');
        });

        $("form").submit(function(event)
        {
            event.preventDefault();
            $.post('formAction.php',{
                'id':$('#id').val(),
                'name':$('#name').val(),
                'price':$('#price').val(),
                'season':$('#season').val()
            },
            function(data)
            {
                $('#products').html(data);
            }
            )
        })
    </script>
</body>
</html>