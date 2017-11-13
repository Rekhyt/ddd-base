<?php

namespace Rekhyt\DDDBase\Event;

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
}
