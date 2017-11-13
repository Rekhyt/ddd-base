<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Time;

class Time
{
    /** @var Hour */
    private $hour;

    /** @var Minute */
    private $minute;

    /** @var Second */
    private $second;

    /** @var Offset */
    private $offset;

    /**
     * @param Hour   $hour
     * @param Minute $minute
     * @param Second $second
     * @param Offset $offset
     */
    public function __construct(Hour $hour, Minute $minute, Second $second, Offset $offset)
    {
        $this->hour   = $hour;
        $this->minute = $minute;
        $this->second = $second;
        $this->offset = $offset;
    }

    /**
     * @return Hour
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @return Minute
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @return Second
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * @return Offset
     */
    public function getOffset()
    {
        return $this->offset;
    }
}
