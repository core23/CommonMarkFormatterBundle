<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle;

use Core23\CommonMarkFormatterBundle\DependencyInjection\Compiler\ExtensionCompilerPass;
use Core23\CommonMarkFormatterBundle\DependencyInjection\Core23CommonMarkFormatterExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class Core23CommonMarkFormatterBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new ExtensionCompilerPass());
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new Core23CommonMarkFormatterExtension();
        }

        return $this->extension;
    }
}
