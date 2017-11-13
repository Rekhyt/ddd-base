<?php

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return Time
     */
    public function getTime()
    {
        return $this->time;
    }
}
