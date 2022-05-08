<?php
namespace App;
use App\Product;
use App\ProductInMemoryRepository;
use App\ProductInMySQLRepository;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/db/conf.php';

$p=new ProductInMySQLRepository($user,$password,$database,$table,$host);

$p->printProducts();