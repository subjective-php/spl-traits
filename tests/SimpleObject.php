<?php

namespace SubjectivePHPTest\Spl\Traits;

use SubjectivePHP\Spl\Traits\ArrayAccessTrait;
use SubjectivePHP\Spl\Traits\IteratorTrait;
use SubjectivePHP\Spl\Traits\MagicAccessorTrait;

/**
 * Basic object to use in tests.
 *
 * @property mixed $foo
 */
class SimpleObject implements \ArrayAccess, \Iterator
{
    /**
     * Array container.
     *
     * @var array
     */
    private $container;

    use ArrayAccessTrait;
    use IteratorTrait;
    use MagicAccessorTrait;

    /**
     * Construct a new instance.
     *
     * @param array $data The data to use in the object.
     */
    public function __construct(array $data = [])
    {
        $this->container = $data;
    }

    /**
     * Get the container.
     *
     * @return array
     */
    public function getContainer()
    {
        return $this->container;
    }
}
