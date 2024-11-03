<?php

declare(strict_types=1);

namespace PHPAbles\Stringable;

use Potter\ArrayAccess\ArrayAccessInterface,
    PHPAbles\Json\Serializable\JsonSerializableInterface,
    Illuminate\Support\Stringable;

abstract class AbstractStringable extends Stringable implements ArrayAccessInterface, 
                                                                JsonSerializableInterface, 
                                                                StringableInterface
{ }
