<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Platform\Entity\Traits\ProductTrait;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ApiResource
 *
 */
class Product
{
    use ProductTrait;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string")
     *
     */
    private $price;
}
