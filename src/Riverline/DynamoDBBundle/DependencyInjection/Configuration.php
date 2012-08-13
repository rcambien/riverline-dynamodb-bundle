<?php

namespace Riverline\DynamoDBBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('riverline_dynamo_db');

        $rootNode->children()
            ->scalarNode('access_key')->isRequired()->end()
            ->scalarNode('secret_key')->isRequired()->end()
            ->scalarNode('cache_handler')->isRequired()->end()
            ->scalarNode('region')->defaultValue('dynamodb.eu-west-1.amazonaws.com')->end()
        ->end();

        return $treeBuilder;
    }
}
