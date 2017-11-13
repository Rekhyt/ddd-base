<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Time;

use Rekhyt\DDDBase\ValueObject\PositiveIntegerValue;

class Minute extends PositiveIntegerValue
{
    public function __construct($value)
    {
        parent::__construct($value, 59);
    }
}
