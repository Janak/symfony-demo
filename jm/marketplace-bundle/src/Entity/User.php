<?php
namespace Jm\Bundle\MarketplaceBundle\Entity;

use Jm\Bundle\MarketplaceBundle\Model\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 * @ORM\Table(name="jm_user")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $description;
}