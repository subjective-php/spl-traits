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
        $value = $this->getObject()->foo;
    }

    /**
     * @test
     * @covers ::__set
     * @expectedException \BadMethodCallException
     */
    public function magicSet()
    {
        $this->getObject()->foo = 'bar';
    }

    public function getObject()
    {
        return new class
        {
            use MagicPropertyDisabledTrait;
        };
    }
}
