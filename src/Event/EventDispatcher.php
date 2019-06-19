<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\Event;

use Rekhyt\DDDBase\ReadModel\EventResult;
use Rekhyt\DDDBase\ValueObject\StringValue;

interface EventDispatcher
{
    /**
     * @param StringValue  $eventName
     * @param EventHandler $eventHandler
     */
    public function subscribe(StringValue $eventName, EventHandler $eventHandler);

    /**
     * Publishes an event to the event bus.
     *
     * @param Event $event
     */
    public function publish(Event $event);

    /**
     * Publishes multiple events to the event bus.
     *
     * @param Event[] $events
     */
    public function publishMany(array $events);

    /**
     * Dispatches/notifies event handlers registered for the incoming event and publishes resulting events.
     *
     * @param Event $event
     */
    public function dispatch(Event $event);

    /**
     * @return EventResult[]
     */
    public function getResults();
}
