<?php
namespace ChadicusTest\Spl\Traits;

/**
 * @coversDefaultClass Chadicus\Spl\Traits\SerializationDisabledTrait
 */
class SerializationDisabledTraitTest extends \PHPUnit_Framework_TestCase
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
        $object = $this->getObjectForTrait('\\Chadicus\\Spl\\Traits\\SerializationDisabledTrait');
        serialize($object);
    }
}
