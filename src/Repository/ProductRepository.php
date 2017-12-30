<?php
namespace App\Repository;

use App\Entity\AppProduct;
use Jm\Bundle\MarketplaceBundle\Repository\ProductRepository as BaseProductRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProductRepository extends BaseProductRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AppProduct::class);
    }

    public function createProduct()
    {
        $class = $this->getEntityName();
        $product = new $class;
        dump($product);
        return $product;
    }
}