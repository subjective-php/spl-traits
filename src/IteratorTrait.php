<?php

namespace SubjectivePHP\Spl\Traits;

trait IteratorTrait
{
    /**
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->container);
    }

    /**
     * Return the current element.
     *
     * @return mixed
     */
    public function current()
    {
        return current($this->container);
    }

    /**
     * Return the key of the current element
     *
     * @return mixed
     */
    public function key()
    {
        return key($this->container);
    }

    /**
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->container);
    }

    /**
     * Checks if current position is valid.
     *
     * @return boolean
     */
    public function valid()
    {
        return current($this->container) !== false;
    }
}
