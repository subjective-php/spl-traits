<?php

namespace Chadicus\Spl\Traits;

trait ArrayAccessTrait
{
    use ArrayContainerTrait;

    /**
     * Sets the value at the specified index $offset to $value
     *
     * @param string|integer $offest The index being set.
     * @param mixed          $value  The new value for the index.
     *
     * @return void
     *
     * @throws \InvalidArgumentException Thrown if $offset is not null, an integer or a string.
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->container[] = $value;
            return;
        }

        if (!is_string($offset) && !is_int($offset)) {
            throw new \InvalidArgumentException('$offset must be an integer or string');
        }

        $this->container[$offset] = $value;
    }

    /**
     * Returns whether the requested index exists.
     *
     * @param mixed $offest The index being checked.
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        if (is_string($offset) || is_int($offset)) {
            return array_key_exists($offset, $this->container);
        }

        return false;
    }

    /**
     * Unsets the value at the specified index
     *
     * @param mixed $offest The index being unset.
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        if (is_string($offset) || is_int($offset)) {
            unset($this->container[$offset]);
        }
    }

    /**
     * Returns the value at the specified index.
     *
     * @param integer|string $offset The index with the value.
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException Thrown if $offset is not null, an integer or a string.
     */
    public function offsetGet($offset)
    {
        if (!is_string($offset) && !is_int($offset)) {
            throw new \InvalidArgumentException('$offset must be an integer or string');
        }

        return array_key_exists($offset, $this->container) ? $this->container[$offset] : null;
    }

}
