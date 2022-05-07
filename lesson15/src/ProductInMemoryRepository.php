<?php
namespace App;

use App\Product;

require_once __DIR__.'/../vendor/autoload.php';

class ProductInMemoryRepository implements ProductRepositoryInterface
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct(Product $product): void
    {
       $this->products[$product->getId()] = $product;
    }

    /**
     * @return array|Product[]
     */
    public function findAllProducts(): array
    {
        return $this->products;
    }

    public function printProducts()
    {
        foreach($this->products as $product)
        {
            print_r($product);
            echo '<br>';
        }
    }

    public function updateProduct(Product $product): void
    {
        $this->products[$product->getId()]=$product;
    }

    public function deleteProduct(Product $product): void
    {
        if($this->products[$product->getId()]==$product)
        {
            echo 'Объект обновлен!<br>';
            unset($this->products[$product->getId()]);
        }
        else
        {
            echo 'Error! Это не тот объект<br>';
        }
    }
}

