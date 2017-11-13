<?php

namespace Rekhyt\DDDBase\Event;

use Rekhyt\DDDBase\ValueObject\StringValue;

class EventDispatcherLocal implements EventDispatcher
{
    /** @var array [string, EventHandler[]] */
    private $subscriptions;

    public function __construct()
    {
        $this->subscriptions = [];
    }

    public function subscribe(StringValue $eventName, EventHandler $eventHandler)
    {
        if (!class_exists($eventName->getValue(), true)) {
            throw new \InvalidArgumentException(
                "Event type not found, expecting fully-qualified class name: {$eventName}"
            );
        }

        if (empty($this->subscriptions[$eventName->getValue()])) {
            $this->subscriptions[$eventName->getValue()] = [];
        }

        $this->subscriptions[$eventName->getValue()][] = $eventHandler;
    }

    public function publish(Event $event)
    {
        // in local implementation publishing an event will cause immediate dispatching and execution
        $this->dispatch($event);
    }

    public function publishMany(array $events)
    {
        foreach ($events as $event) {
            $this->publish($event);
        }
    }

    public function dispatch(Event $event)
    {
        $eventName = get_class($event);

        if (empty($this->subscriptions[$eventName])) {
            return;
        }

        $resultingEvents = [];
        foreach ($this->subscriptions[$eventName] as $eventHandler) {
            /** @var EventHandler $eventHandler */
            array_merge($resultingEvents, $eventHandler->handle($event));
        }

        $this->publishMany($resultingEvents);
    }
}
