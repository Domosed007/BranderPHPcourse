<?php
namespace App;
use App\Product;
use App\ProductInMemoryRepository;
use App\ProductInMySQLRepository;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/db/conf.php';

$p=new ProductInMySQLRepository($user,$password,$database,$table,$host);

$p->addProduct(new Product((int)$_POST['id'],$_POST['name'],new Price((int)$_POST['price']),$_POST['season']));

$p->printProducts();