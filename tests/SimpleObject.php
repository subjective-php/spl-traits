<?php

namespace ChadicusTest\Spl\Traits;

use Chadicus\Spl\Traits\ArrayAccessTrait;
use Chadicus\Spl\Traits\IteratorTrait;
use Chadicus\Spl\Traits\MagicAccessorTrait;

class SimpleObject implements \ArrayAccess, \Iterator
{
    private $container;

    use ArrayAccessTrait;
    use IteratorTrait;
    use MagicAccessorTrait;

    public function __construct(array $data = [])
    {
        $this->container = $data;
    }

    public function getContainer()
    {
        return $this->container;
    }
}
