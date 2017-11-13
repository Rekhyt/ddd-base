<?php

namespace Rekhyt\DDDBase\Event;

interface EventHandler
{
    /**
     * @param Event $event
     *
     * @return Event[]
     */
    public function handle(Event $event);
}
