<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle\Tests\Formatter;

use Core23\CommonMarkFormatterBundle\Formatter\CommonMarkFormatter;
use League\CommonMark\ConverterInterface;
use PHPUnit\Framework\TestCase;

class CommonMarkFormatterTest extends TestCase
{
    public function testFormatter(): void
    {
        $converter = $this->prophesize(ConverterInterface::class);
        $converter->convertToHtml('# Moin')
            ->willReturn('<h1>Moin</h1>')
        ;

        $formatter = new CommonMarkFormatter($converter->reveal());

        static::assertSame('<h1>Moin</h1>', $formatter->transform('# Moin'));
    }
}
