<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\Event;

use Rekhyt\DDDBase\ReadModel\EventResult;

interface EventHandler
{
    /**
     * @param Event $event
     *
     * @return Event[]
     */
    public function handle(Event $event): array;

    /**
     * @return EventResult[]
     */
    public function getResults(): array;
}
