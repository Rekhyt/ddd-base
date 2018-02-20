<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject;

class IntegerValue
{
    /** @var int */
    private $value;

    /**
     * @param int      $value
     * @param int|null $min
     * @param int|null $max
     */
    public function __construct(int $value, int $min = null, int $max = null)
    {
        $this->validateMin($value, $min);
        $this->validateMax($value, $max);

        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int      $value
     * @param int|null $min
     */
    private function validateMin(int $value, int $min = null)
    {
        if (null === $min) {
            return;
        }

        if ($value < $min) {
            throw new \InvalidArgumentException("Value must be greater than or equal to {$min}. {$value} given.");
        }
    }

    /**
     * @param int      $value
     * @param int|null $max
     */
    private function validateMax(int $value, int $max = null)
    {
        if (null === $max) {
            return;
        }

        if ($value > $max) {
            throw new \InvalidArgumentException("Value must be lower than or equal to {$max}. {$value} given.");
        }
    }
}
