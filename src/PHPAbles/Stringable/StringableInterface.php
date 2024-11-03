<?php

declare(strict_types=1);

namespace PHPAbles\Stringable;

use Stringable;

interface StringableInterface extends Stringable
{
     public function __toString(): string;
}
