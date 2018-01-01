<?php
namespace Jm\Bundle\MarketplaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Jm\Bundle\MarketplaceBundle\Model\UserInterface;

/**
 * @ORM\Entity
 */
class Invoice
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Jm\Bundle\MarketplaceBundle\Model\UserInterface")
     */
    protected $user;
}