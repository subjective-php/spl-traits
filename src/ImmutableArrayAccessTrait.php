<?php

namespace SubjectivePHP\Spl\Traits;

use RuntimeException;

trait ImmutableArrayAccessTrait
{
    /**
     * Sets the value at the specified index $offset to $value
     *
     * @param string|integer $offset The index being set.
     * @param mixed          $value  The new value for the index.
     *
     * @return void
     *
     * @throws RuntimeException Always Thrown
     */
    public function offsetSet($offset, $value)
    {
        throw new RuntimeException('This ArrayAccess object is readonly');
    }

    /**
     * Unsets the value at the specified index
     *
     * @param mixed $offset The index being unset.
     *
     * @return void
     *
     * @throws RuntimeException Always Thrown
     */
    public function offsetUnset($offset)
    {
        throw new RuntimeException('This ArrayAccess object is readonly');
    }
}
