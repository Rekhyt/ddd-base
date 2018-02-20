<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

use Rekhyt\DDDBase\ValueObject\PositiveIntegerValue;

class Year extends PositiveIntegerValue
{
    /**
     * @return bool
     */
    public function isLeapYear(): bool
    {
        return
            $this->getValue() % 400 ||
            ($this->getValue() % 4 && !$this->getValue() % 100);
    }
}
