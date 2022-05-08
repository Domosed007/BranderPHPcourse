<?php
namespace App;

use App\Product;
use PDO;
use PDOException;

require_once __DIR__.'/../vendor/autoload.php';

class ProductInMySQLRepository implements ProductRepositoryInterface
{
    private $db;
    private $table;

    public function __construct($user,$password,$database,$table,$host)
    {
        try{
            $this->db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        }
        catch(PDOexception $ex){
            echo "Exception: ".$ex->getMessage();
        }

        $this->table=$table;
    }

    public function findAllProducts(): array
    {    
        $arrayProducts=[];

        $result=($this->db)->query("SELECT*FROM $this->table");

        while($row=$result->fetch())
        {
           $product=new Product($row['Id'],$row['ProductName'],new Price($row['Price']),$row['Season']);
           
           $arrayProducts[]=$product;
        }

        return $arrayProducts;
    }

    public function addProduct(Product $product): void
    {
        $id=$product->getId();
        $name=$product->getName();
        $price=$product->getPrice();
        $season=$product->getSeason();

       ($this->db)->exec("INSERT INTO $this->table VALUES ($id,'$name',$price,'$season');");
    }

    public function printProducts()
    {
        foreach($this->findAllProducts() as $product)
        {
            print_r($product);
            echo '<br>';
        }
    }

    public function updateProduct(Product $product): void
    {
        $id=$product->getId();
        $name=$product->getName();
        $price=$product->getPrice();
        $season=$product->getSeason();

        ($this->db)->exec("UPDATE $this->table SET ProductName='$name',Price=$price,Season='$season' WHERE Id=$id");
    }

    public function deleteProduct(Product $product): void
    {
        $id=$product->getId();

        ($this->db)->exec("DELETE FROM $this->table WHERE Id=$id");
    }
}

