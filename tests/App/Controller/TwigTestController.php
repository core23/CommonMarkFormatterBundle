<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\CommonMarkFormatterBundle\Tests\App\Controller;

use Symfony\Component\HttpFoundation\Response;

final class TwigTestController
{
    public function __invoke(): Response
    {
        return new Response();
    }
}
