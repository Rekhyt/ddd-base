<?php

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
