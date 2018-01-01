<?php
namespace App\Entity;

use Jm\Bundle\MarketplaceBundle\Entity\Product as BaseProduct;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class AppProduct
 * @package App\Entity
 *
 * @ORM\Entity;
 *
 * @ORM\Table(name="jm_product")
 */
class Product extends BaseProduct
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

}