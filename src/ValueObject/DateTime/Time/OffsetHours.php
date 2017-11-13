<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Time;

use Rekhyt\DDDBase\ValueObject\IntegerValue;

class OffsetHours extends IntegerValue
{
    public function __construct($value)
    {
        parent::__construct($value, -12, 14);
    }
}
