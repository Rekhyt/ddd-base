<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

use InvalidArgumentException;
use Rekhyt\DDDBase\ValueObject\Enum;

class Month extends Enum
{
    const JANUARY   = '01';
    const FEBRUARY  = '02';
    const MARCH     = '03';
    const APRIL     = '04';
    const MAY       = '05';
    const JUNE      = '06';
    const JULY      = '07';
    const AUGUST    = '08';
    const SEPTEMBER = '09';
    const OCTOBER   = '10';
    const NOVEMBER  = '11';
    const DECEMBER  = '12';

    public function __construct($value)
    {
        if ($value > 12) {
            throw new InvalidArgumentException('Value must not be greater than 12: ' . $value);
        }

        parent::__construct($value);
    }

    /**
     * @return string[]
     */
    public function getEnumValues()
    {
        return [
            self::JANUARY,
            self::FEBRUARY,
            self::MARCH,
            self::APRIL,
            self::MAY,
            self::JUNE,
            self::JULY,
            self::AUGUST,
            self::SEPTEMBER,
            self::OCTOBER,
            self::NOVEMBER,
            self::DECEMBER,
        ];
    }

    /**
     * @param Year $year
     *
     * @return int
     */
    public function getNumberOfDays(Year $year)
    {
        return $this->getValue() === self::FEBRUARY
            ? ($year->isLeapYear() ? 29 : 28)
            : ($this->getValue() % 2 === 0 ? 30 : 31);
    }
}
