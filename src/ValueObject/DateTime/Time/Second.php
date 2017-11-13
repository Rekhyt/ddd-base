<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Time;

use Rekhyt\DDDBase\ValueObject\NotNegativeIntegerValue;

class Second extends NotNegativeIntegerValue
{
    public function __construct($value)
    {
        parent::__construct($value, 59);
    }
}
