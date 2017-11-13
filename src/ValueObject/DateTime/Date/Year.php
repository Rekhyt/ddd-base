<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

use Rekhyt\DDDBase\ValueObject\PositiveIntegerValue;

class Year extends PositiveIntegerValue
{
    /**
     * @return bool
     */
    public function isLeapYear()
    {
        return
            $this->getValue() % 400 ||
            ($this->getValue() % 4 && !$this->getValue() % 100);
    }
}
