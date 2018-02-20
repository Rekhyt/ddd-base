<?php
/**
 * Copyright (c) 2018 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ReadModel;

class EventResult
{
    /** @var string */
    public $eventName;

    /** @var mixed A serializable result. */
    public $result;

    /** @var string Microtimestamp of the time this object was instantiated. */
    public $microtime;

    /**
     * @param string $eventName The name of the event the result belongs to.
     * @param mixed  $result    The result of a handled event; should be serializable.
     */
    public function __construct(string $eventName, $result = null)
    {
        $this->eventName = $eventName;
        $this->result    = $result;
        $this->microtime = microtime();
    }
}
