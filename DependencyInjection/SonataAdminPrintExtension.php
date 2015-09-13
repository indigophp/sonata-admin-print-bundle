<?php

namespace SonataAdminPrintBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class SonataAdminPrintExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('sonata_admin_print.templates', $config['templates']);
    }
}
