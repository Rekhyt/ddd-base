<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject;

class PositiveIntegerValue extends IntegerValue
{
    public function __construct($value, $max = null)
    {
        parent::__construct($value, -1, $max);
    }
}
