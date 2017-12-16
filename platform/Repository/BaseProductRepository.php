<?php

namespace Platform\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class BaseProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry, $entity)
    {
        parent::__construct($registry, $entity);
    }


    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.title = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
