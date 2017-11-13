<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Time;

class Offset
{
    /** @var  OffsetHours */
    private $hours;

    /** @var OffsetMinutes */
    private $minutes;

    /**
     * @param OffsetHours   $hours
     * @param OffsetMinutes $minutes
     */
    public function __construct(OffsetHours $hours, OffsetMinutes $minutes)
    {
        $this->hours   = $hours;
        $this->minutes = $minutes;
    }

    /**
     * @return OffsetHours
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @return OffsetMinutes
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
}
