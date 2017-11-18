<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject;

class StringValue
{
    /** @var string */
    private $value;

    /**
     * @param string $value
     * @param bool   $allowEmpty
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($value, $allowEmpty = false)
    {
        if (!$allowEmpty && '' === $value) {
            throw new \InvalidArgumentException($value);
        }

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
