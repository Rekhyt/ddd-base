<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ValueObject\DateTime;

use Rekhyt\DDDBase\ValueObject\DateTime\Date\Date;
use Rekhyt\DDDBase\ValueObject\DateTime\Time\Time;

class DateTime
{
    /** @var Date */
    private $date;

    /** @var Time */
    private $time;

    /**
     * @param Date $date
     * @param Time $time
     */
    public function __construct(Date $date, Time $time)
    {
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @return Time
     */
    public function getTime(): Time
    {
        return $this->time;
    }
}
