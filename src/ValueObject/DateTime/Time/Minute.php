<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject\DateTime\Time;

use Rekhyt\DDDBase\ValueObject\PositiveIntegerValue;

class Minute extends PositiveIntegerValue
{
    public function __construct($value)
    {
        parent::__construct($value, 59);
    }
}
