<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

final class ExtensionCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->hasDefinition('core23_commonmark_formatter.environment')) {
            return;
        }

        $definition = $container->getDefinition('core23_commonmark_formatter.environment');

        foreach ($container->findTaggedServiceIds('core23_commonmark_formatter.extension') as $id => $tag) {
            $definition->addMethodCall('addExtension', [new Reference($id)]);
        }
    }
}
