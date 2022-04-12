<?php
    session_start();

    $_SESSION['age']=$_POST['age'];

    header('Location: index.php');
?> 