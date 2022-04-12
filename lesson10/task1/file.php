<?php
$phoneNumber=$_POST['phoneNumber'];

setcookie('phoneNumber',$phoneNumber);

header('Location: form.php');