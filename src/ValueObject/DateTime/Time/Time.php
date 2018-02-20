<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

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
    public function getHour(): Hour
    {
        return $this->hour;
    }

    /**
     * @return Minute
     */
    public function getMinute(): Minute
    {
        return $this->minute;
    }

    /**
     * @return Second
     */
    public function getSecond(): Second
    {
        return $this->second;
    }

    /**
     * @return Offset
     */
    public function getOffset(): Offset
    {
        return $this->offset;
    }
}
