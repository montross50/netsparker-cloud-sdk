<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Exception;

class ScansUnscheduleNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('NotFound', 404);
    }
}
