<?php

namespace Rekhyt\DDDBase\ValueObject;

abstract class Enum
{
    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct($value)
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
    abstract public function getEnumValues();

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
