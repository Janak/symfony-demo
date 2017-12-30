<?php
namespace Jm\Bundle\MarketplaceBundle\Repository;

use Jm\Bundle\MarketplaceBundle\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProductRepository extends ServiceEntityRepository implements ProductRepositoryInterface
{
    public function __construct(RegistryInterface $registry, $class = Product::class)
    {
        parent::__construct($registry, $class);
    }

    public function createProduct()
    {
        $class = $this->getEntityName();
        $product = new $class;
        return $product;
    }
}