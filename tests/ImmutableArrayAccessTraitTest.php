<?php

namespace SubjectivePHPTest\Spl\Traits;

use SubjectivePHP\Spl\Traits\ImmutableArrayAccessTrait;

/**
 * @coversDefaultClass SubjectivePHP\Spl\Traits\ImmutableArrayAccessTrait
 */
class ImmutableArrayAccessTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers ::offsetSet
     * @expectedException RuntimeException
     * @expectedExceptionMessage This ArrayAccess object is readonly
     *
     * @return void
     */
    public function offsetSetIsDisabled()
    {
        $object = $this->getObjectForTrait(ImmutableArrayAccessTrait::class);
        $object->offsetSet('key', 'value');
    }

    /**
     * @test
     * @covers ::offsetUnset
     * @expectedException RuntimeException
     * @expectedExceptionMessage This ArrayAccess object is readonly
     *
     * @return void
     */
    public function offsetUnsetIsDisabled()
    {
        $object = $this->getObjectForTrait(ImmutableArrayAccessTrait::class);
        $object->offsetUnset('key');
    }
}
