<?php
namespace ChadicusTest\Spl\Traits;

/**
 * @coversDefaultClass Chadicus\Spl\Traits\CloningDisabledTrait
 */
class CloningDisabledTraitTest extends \PHPUnit_Framework_TestCase
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
    public function clone()
    {
        $object = $this->getObjectForTrait('\\Chadicus\\Spl\\Traits\\CloningDisabledTrait');
        $clone = clone $object;
    }
}
