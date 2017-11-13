<?php

namespace Rekhyt\DDDBase\ValueObject;

class NotNegativeIntegerValue extends IntegerValue
{
    public function __construct($value, $max = null)
    {
        parent::__construct($value, 0, $max);
    }
}
