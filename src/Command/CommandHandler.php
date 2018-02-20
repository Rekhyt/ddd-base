<?php
/**
 * Copyright (c) 2017 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\Command;

use Rekhyt\DDDBase\Event\Event;

interface CommandHandler
{
    /**
     * @param Command $command
     *
     * @return Event[]
     */
    public function handle(Command $command): array;
}
