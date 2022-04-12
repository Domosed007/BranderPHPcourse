<?php
    session_start();

    $_SESSION['surname']=$_POST['surname'];

    header('Location: form3.html');
?> 
