<?php

namespace Rekhyt\DDDBase\ValueObject\DateTime\Date;

class Date
{
    /** @var Day */
    private $day;

    /** @var Month */
    private $month;

    /** @var Year */
    private $year;

    /**
     * @param Day   $day
     * @param Month $month
     * @param Year  $year
     */
    public function __construct(Day $day, Month $month, Year $year)
    {
        $this->day   = $day;
        $this->month = $month;
        $this->year  = $year;

        $maxDays = $month->getNumberOfDays($year);

        if ($day->getValue() > $maxDays) {
            throw new \InvalidArgumentException(
                "Month {$month->getValue()} in {$year->getValue()} has only {$maxDays} days. " .
                "Passed {$day->getValue()} days."
            );
        }
    }

    /**
     * @return Day
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @return Month
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return Year
     */
    public function getYear()
    {
        return $this->year;
    }
}
