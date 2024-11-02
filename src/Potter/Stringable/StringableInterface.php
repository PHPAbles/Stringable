<?php

declare(strict_types=1);

namespace Potter\Stringable;

use Stringable;

interface StringableInterface extends Stringable
{
     public function __toString(): string;
}
