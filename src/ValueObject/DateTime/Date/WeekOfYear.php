<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

use Rekhyt\DDDBase\ValueObject\NotNegativeIntegerValue;

class WeekOfYear extends NotNegativeIntegerValue
{
    public function __construct($value)
    {
        parent::__construct($value, 53);
    }
}
