<?php

namespace Defro\ColorMind\Exception;

use Throwable;

class ColorMindException extends \RuntimeException
{
    public function __construct(
        string $message,
        int $statusCode = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $statusCode, $previous);
    }
}
