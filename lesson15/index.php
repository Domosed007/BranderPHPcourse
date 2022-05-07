<?php
namespace App;
use App\Product;
use App\ProductInMemoryRepository;

require_once __DIR__.'/vendor/autoload.php';

$p=new ProductInMemoryRepository();
$p->addProduct(new Product(0,'strawberry',new Price(2500),'spring'));
$p->addProduct(new Product(1,'apple',new Price(1500),'autumn'));
$p->addProduct(new Product(2,'tomato',new Price(1000),'summer'));

$p->printProducts();

echo '==========================================<br>';

$p->deleteProduct(new Product(1,'apple',new Price(1500),'autumn'));

$p->printProducts();