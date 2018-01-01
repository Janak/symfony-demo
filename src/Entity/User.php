<?php
namespace App\Entity;

use Jm\Bundle\MarketplaceBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package App\Entity
 *
 * @ORM\Entity;
 *
 * @ORM\AttributeOverrides({
 *   @ORM\AttributeOverride(name="description", column=@ORM\Column(nullable=false, length=700))
 * })
 *
 * @ORM\Table(name="jm_user")
 */
class  User extends BaseUser
{

    /**
     * @ORM\Column(type="string", length=1000)
     */
    protected $name;
}