<?php

namespace SonataAdminPrintBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Custom configuration (not used ATM)
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sonata_admin_print');

        $rootNode
            ->fixXmlConfig('template')
            ->children()
                ->arrayNode('templates')
                ->addDefaultsIfNotSet()
                ->children()
                    ->scalarNode('print')->defaultValue('SonataAdminPrintBundle:print.html.twig')->cannotBeEmpty()->end()
                    ->scalarNode('action')->defaultValue('SonataAdminPrintBundle:list__action_print.html.twig')->cannotBeEmpty()->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
