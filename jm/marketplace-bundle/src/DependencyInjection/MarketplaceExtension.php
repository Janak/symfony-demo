<?php

/*
 * This file is part of the EasyAdminBundle.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jm\Bundle\MarketplaceBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Resolves all the backend configuration values and most of the entities
 * configuration. The information that must resolved during runtime is handled
 * by the Configurator class.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class MarketplaceExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        //$loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__).'/Resources/config'));
        //$loader->load('controllers.xml');
        //$loader->load('services.xml');


        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__).'/Resources/config'));
        // $loader->load('services.xml');
        $loader->load('controllers.yaml');


        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
    }

}


