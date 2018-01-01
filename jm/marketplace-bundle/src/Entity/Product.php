<?php
namespace Jm\Bundle\MarketplaceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Jm\Bundle\MarketplaceBundle\Model\ProductInterface;

/**
 * Class Product
 * @package Jm\Bundle\MarketplaceBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="jm_product")
 *
 */
class Product implements ProductInterface
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    protected  $price;

    /**
     * @ORM\Column(type="string", length=500)
     */
    protected  $description;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

}