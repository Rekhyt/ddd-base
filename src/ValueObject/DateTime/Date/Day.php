<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

use Rekhyt\DDDBase\ValueObject\PositiveIntegerValue;

class Day extends PositiveIntegerValue
{
    public function __construct($value)
    {
        parent::__construct($value, 31);
    }
}
