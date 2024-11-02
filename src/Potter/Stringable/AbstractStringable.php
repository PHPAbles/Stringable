<?php

declare(strict_types=1);

namespace Potter\Stringable;

use Potter\{ArrayAccess\ArrayAccessInterface, Json\Serializable\JsonSerializableInterface};
use Illuminate\Support\Stringable;

abstract class AbstractStringable extends Stringable implements ArrayAccessInterface, 
                                                                JsonSerializableInterface, 
                                                                StringableInterface
{ }
