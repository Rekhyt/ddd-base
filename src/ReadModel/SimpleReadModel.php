<?php
/**
 * Copyright (c) 2018 Timo Ebel
 *
 * This work is licensed under the terms of the MIT license.
 * For a copy, see <https://opensource.org/licenses/MIT> or the LICENSE file included in this project.
 */

namespace Rekhyt\DDDBase\ReadModel;

abstract class SimpleReadModel implements ReadModel
{
    public function toArray()
    {
        return get_object_vars($this);
    }

    public function initializeFromArray(array $array)
    {
        foreach ($array as $property => $value) {
            if (!property_exists($this, $property)) {
                continue;
            }

            $this->$property = $value;
        }
    }
}
