<?php

/*
 * This file is part of the EasyAdminBundle.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jm\Bundle\MarketplaceBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Janak Jadeja <janak@aspl.in>
 */
class MarketplaceBundle extends Bundle
{
    const VERSION = '1.0.0';

    public function build(ContainerBuilder $container)
    {
    }
}