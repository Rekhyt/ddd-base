<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

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
    public function getHours(): OffsetHours
    {
        return $this->hours;
    }

    /**
     * @return OffsetMinutes
     */
    public function getMinutes(): OffsetMinutes
    {
        return $this->minutes;
    }
}
