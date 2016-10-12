<?php

namespace Chadicus\Spl\Traits;

/**
 * Simple trait disallowing serialization on an object.
 */
trait SerializationDisabledTrait
{
    /**
     * Throws an exception if this object is serialized.
     *
     * @throws \BadMethodCallException
     */
    public function __sleep()
    {
        throw new \BadMethodCallException('Serialization not allowed on this object');
    }
}
