<?php
namespace App\Entity;

use Jm\Bundle\MarketplaceBundle\Entity\Product as BaseProduct;
use Doctrine\ORM\Mapping as ORM;
use Jm\Bundle\MarketplaceBundle\Entity\ProductTrait;

/**
 * Class AppProduct
 * @package App\Entity
 *
 * @ORM\Entity()
 */
class AppProduct extends BaseProduct
{

    use ProductTrait;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $short_desc;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $name;
}