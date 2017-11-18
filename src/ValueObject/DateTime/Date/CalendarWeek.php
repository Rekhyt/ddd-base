<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

use Rekhyt\DDDBase\ValueObject\IntegerValue;

class CalendarWeek
{
    /** @var WeekOfYear */
    private $week;

    /** @var IntegerValue */
    private $year;

    /**
     * @param WeekOfYear   $week
     * @param IntegerValue $year
     */
    public function __construct(WeekOfYear $week, IntegerValue $year)
    {
        $this->week = $week;
        $this->year = $year;
    }

    /**
     * @return WeekOfYear
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * @return IntegerValue
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $yearString = $this->year->getValue() === 0
            ? '0'
            : (string)$this->year->getValue();

        return "{$this->week->getValue()}-{$yearString}";
    }
}
