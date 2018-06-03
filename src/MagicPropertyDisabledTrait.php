<?php

namespace SubjectivePHP\Spl\Traits;

use BadMethodCallException;

trait MagicPropertyDisabledTrait
{
    /**
     * Access an internal array element as a property
     *
     * @param string $name The name of class the property.
     *
     * @return void
     *
     * @throws BadMethodCallException Always thrown
     */
    public function __get(string $name)
    {
        throw new BadMethodCallException('dynamic properties are disabled in this class');
    }

    /**
     * Set an internal array element as a property
     *
     * @param string $name  The name of class the property.
     * @param mixed  $value The class property value.
     *
     * @return void
     *
     * @throws BadMethodCallException Always thrown
     */
    public function __set(string $name, $value)
    {
        throw new BadMethodCallException('dynamic properties are disabled in this class');
    }
}
