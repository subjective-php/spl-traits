<?php

namespace Chadicus\Spl\Traits;

trait MagicAccessorTrait
{
    /**
     * Array containing Elements
     *
     * @var array
     */
    protected $container;

    /**
     * Access an internal array element as a property
     *
     * @param string $name The name of class the property.
     *
     * @return mixed The class property value.
     */
    public function __get($name)
    {
        return array_key_exists($name, $this->container) ? $this->container[$name] : null;
    }

    /**
     * Set an internal array element as a property
     *
     * @param string $name  The name of class the property.
     * @param mixed  $value The class property value.
     *
     * @return void
     */
    public function __set($name, $value)
    {
        $this->container[$name] = $value;
    }
}
