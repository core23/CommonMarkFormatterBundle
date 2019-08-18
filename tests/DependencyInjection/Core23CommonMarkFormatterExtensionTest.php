<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle\Tests\DependencyInjection;

use Core23\CommonMarkFormatterBundle\DependencyInjection\Core23CommonMarkFormatterExtension;
use Core23\CommonMarkFormatterBundle\Formatter\CommonMarkFormatter;
use League\CommonMark\Converter;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class Core23CommonMarkFormatterExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadDefault(): void
    {
        $this->load();

        $this->assertContainerBuilderHasService('core23_commonmark.formatter', CommonMarkFormatter::class);

        $this->assertContainerBuilderHasService('core23_commonmark.environment', Environment::class);
        $this->assertContainerBuilderHasService('core23_commonmark.doc_parser', DocParser::class);
        $this->assertContainerBuilderHasService('core23_commonmark.html_render', HtmlRenderer::class);
        $this->assertContainerBuilderHasService('core23_commonmark.converter', Converter::class);
    }

    protected function getContainerExtensions(): array
    {
        return [
            new Core23CommonMarkFormatterExtension(),
        ];
    }
}
