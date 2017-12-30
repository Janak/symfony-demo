<?php
namespace Jm\Bundle\MarketplaceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package Jm\Bundle\MarketplaceBundle\Entity
 *
 * @ORM\Entity(repositoryClass="Jm\Bundle\MarketplaceBundle\Repository\ProductRepository")
 * @ORM\Table(name="jm_product")
 * @ORM\InheritanceType("SINGLE_TABLE")
 *
 */
class Product
{

    use ProductTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

}