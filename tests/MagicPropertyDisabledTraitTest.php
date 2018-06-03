<?php

namespace SubjectivePHPTest\Spl\Traits;

use SubjectivePHP\Spl\Traits\MagicPropertyDisabledTrait;

/**
 * @coversDefaultClass SubjectivePHP\Spl\Traits\MagicPropertyDisabledTrait
 */
class MagicPropertyDisabledTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers ::__get
     * @expectedException \BadMethodCallException
     */
    public function magicGet()
    {
        $object = $this->getObjectForTrait(MagicPropertyDisabledTrait::class);
        $foo = $object->foo;
    }

    /**
     * @test
     * @covers ::__set
     * @expectedException \BadMethodCallException
     */
    public function magicSet()
    {
        $object = $this->getObjectForTrait(MagicPropertyDisabledTrait::class);
        $object->foo = 'bar';
    }
}
