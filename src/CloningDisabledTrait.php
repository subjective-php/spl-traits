<?php

namespace Chadicus\Spl\Traits;

/**
 * Simple trait to disallow cloning on any object.
 */
trait CloningDisabledTrait
{
    /**
     * Throws an exception if this object is cloned.
     *
     * @return void
     *
     * @throws \BadMethodCallException
     */
    public function __clone()
    {
        throw new \BadMethodCallException('Cloning of this object is not allowed');
    }
}
