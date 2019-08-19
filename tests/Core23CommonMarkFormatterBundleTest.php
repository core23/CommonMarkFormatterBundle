<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle\Tests;

use Core23\CommonMarkFormatterBundle\Core23CommonMarkFormatterBundle;
use Core23\CommonMarkFormatterBundle\DependencyInjection\Compiler\ExtensionCompilerPass;
use Core23\CommonMarkFormatterBundle\DependencyInjection\Core23CommonMarkFormatterExtension;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Core23CommonMarkFormatterBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new Core23CommonMarkFormatterBundle();

        static::assertInstanceOf(Core23CommonMarkFormatterExtension::class, $bundle->getContainerExtension());
    }

    public function testBuild(): void
    {
        $builder = $this->prophesize(ContainerBuilder::class);

        $bundle = new Core23CommonMarkFormatterBundle();
        $bundle->build($builder->reveal());

        $builder->addCompilerPass(Argument::type(ExtensionCompilerPass::class))
            ->shouldHaveBeenCalled()
        ;
    }
}
