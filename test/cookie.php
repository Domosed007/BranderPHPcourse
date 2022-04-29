<?php
$names=['Alex','Sem','Ben'];
$name='Alex';
setcookie('name',serialize($names));

header('Location: index.php');