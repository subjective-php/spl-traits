<?php
namespace SubjectivePHPTest\Spl\Traits;

/**
 * @coversDefaultClass SubjectivePHP\Spl\Traits\CloningDisabledTrait
 */
class CloningDisabledTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Verify basic behavior of _clone().
     *
     * @test
     * @covers ::__clone
     * @expectedException \BadMethodCallException
     *
     * @return void
     */
    public function magicClone()
    {
        $object = $this->getObjectForTrait('\\SubjectivePHP\\Spl\\Traits\\CloningDisabledTrait');
        clone $object;
    }
}
