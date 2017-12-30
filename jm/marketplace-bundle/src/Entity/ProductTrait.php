<?php

namespace Jm\Bundle\MarketplaceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

trait ProductTrait {

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

}