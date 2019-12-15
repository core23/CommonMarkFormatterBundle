<?php

declare(strict_types=1);

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

        $this->assertContainerBuilderHasService('core23_commonmark_formatter.formatter', CommonMarkFormatter::class);

        $this->assertContainerBuilderHasService('core23_commonmark_formatter.environment', Environment::class);
        $this->assertContainerBuilderHasService('core23_commonmark_formatter.doc_parser', DocParser::class);
        $this->assertContainerBuilderHasService('core23_commonmark_formatter.html_render', HtmlRenderer::class);
        $this->assertContainerBuilderHasService('core23_commonmark_formatter.converter', Converter::class);
    }

    protected function getContainerExtensions(): array
    {
        return [
            new Core23CommonMarkFormatterExtension(),
        ];
    }
}
