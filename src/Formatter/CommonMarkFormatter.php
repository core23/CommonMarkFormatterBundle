<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle\Formatter;

use League\CommonMark\ConverterInterface;
use Sonata\FormatterBundle\Extension\ExtensionInterface;
use Sonata\FormatterBundle\Formatter\BaseFormatter;

final class CommonMarkFormatter extends BaseFormatter
{
    /**
     * @var ConverterInterface
     */
    private $converter;

    public function __construct(ConverterInterface $converter)
    {
        $this->converter = $converter;
    }

    public function transform(string $text): string
    {
        return $this->converter->convertToHtml($text);
    }

    public function addExtension(ExtensionInterface $extensionInterface): void
    {
        throw new \RuntimeException('Extensions are not yet supported');
    }

    public function getExtensions(): array
    {
        return [];
    }
}
