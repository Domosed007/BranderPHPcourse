<?php

use App\ProductInMySQLRepository;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/db/conf.php';



$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader);

$p=new ProductInMySQLRepository($user,$password,$database,$table,$host);

$products=$p->findAllProducts();

echo $twig->render('file.html.twig', ['products' => $products]);