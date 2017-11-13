<?php

namespace Rekhyt\DDDBase\ValueObject;

class PositiveIntegerValue extends IntegerValue
{
    public function __construct($value, $max = null)
    {
        parent::__construct($value, -1, $max);
    }
}
