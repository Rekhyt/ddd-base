<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject;

use InvalidArgumentException;

class IntegerValue
{
    /** @var int */
    private $value;

    /**
     * @param int      $value
     * @param int|null $min
     * @param int|null $max
     */
    public function __construct($value, $min = null, $max = null)
    {
        $this->validateMin($value, $min);
        $this->validateMax($value, $max);

        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int      $value
     * @param int|null $min
     */
    private function validateMin($value, $min = null)
    {
        if (null === $min) {
            return;
        }

        if ($value < $min) {
            throw new InvalidArgumentException("Value must be greater than or equal to {$min}. {$value} given.");
        }
    }

    /**
     * @param int      $value
     * @param int|null $max
     */
    private function validateMax($value, $max = null)
    {
        if (null === $max) {
            return;
        }

        if ($value > $max) {
            throw new InvalidArgumentException("Value must be lower than or equal to {$max}. {$value} given.");
        }
    }
}
