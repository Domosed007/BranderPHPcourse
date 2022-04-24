<?php
include_once 'model/product.php';

$pr1=Product::constructorArg('Wollet',new Price(25));

print_r($pr1);

echo '<br>';

$pr2=Product::constructorArr(['title'=>'Key','price'=>50]);

print_r($pr2);