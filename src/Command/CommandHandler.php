<?php

namespace Rekhyt\DDDBase\Command;

use Rekhyt\DDDBase\Event\Event;

interface CommandHandler
{
    /**
     * @param Command $command
     *
     * @return Event[]
     */
    public function handle(Command $command);
}
