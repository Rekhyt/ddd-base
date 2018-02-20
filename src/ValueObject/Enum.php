<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject;

abstract class Enum
{
    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (!in_array($value, $this->getEnumValues(), true)) {
            throw new \InvalidArgumentException(
                'Value must be one of "' . implode('", "', $this->getEnumValues()) . '". Given: ' . $value
            );
        }

        $this->value = $value;
    }

    /**
     * @return string[]
     */
    abstract public function getEnumValues(): array;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
